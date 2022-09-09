import { Arr, Fun, Result } from '@ephox/katamari';
import { SimpleGenerators } from '../api/Generators';
import * as Structs from '../api/Structs';
import * as GridRow from './GridRow';

export interface Delta {
  readonly colDelta: number;
  readonly rowDelta: number;
}

/*
  Fitment, is a module used to ensure that the Inserted table (gridB) can fit squareley within the Host table (gridA).
    - measure returns a delta of rows and cols, eg:
        - col: 3 means gridB can fit with 3 spaces to spare
        - row: -5 means gridB can needs 5 more rows to completely fit into gridA
        - col: 0, row: 0 depics perfect fitment

    - tailor, requires a delta and returns grid that is built to match the delta, tailored to fit.
      eg: 3x3 gridA, with a delta col: -3, row: 2 returns a new grid 3 rows x 6 cols

    - assumptions: All grids used by this module should be rectangular
*/

const measure = (startAddress: Structs.Address, gridA: Structs.RowCells[], gridB: Structs.RowCells[]): Result<Delta, string> => {
  if (startAddress.row >= gridA.length || startAddress.column > GridRow.cellLength(gridA[0])) {
    return Result.error(
      'invalid start address out of table bounds, row: ' + startAddress.row + ', column: ' + startAddress.column
    );
  }
  const rowRemainder = gridA.slice(startAddress.row);
  const colRemainder = rowRemainder[0].cells.slice(startAddress.column);

  const colRequired = GridRow.cellLength(gridB[0]);
  const rowRequired = gridB.length;
  return Result.value({
    rowDelta: rowRemainder.length - rowRequired,
    colDelta: colRemainder.length - colRequired
  });
};

const measureWidth = (gridA: Structs.RowCells[], gridB: Structs.RowCells[]): Delta => {
  const colLengthA = GridRow.cellLength(gridA[0]);
  const colLengthB = GridRow.cellLength(gridB[0]);

  return {
    rowDelta: 0,
    colDelta: colLengthA - colLengthB
  };
};

const measureHeight = (gridA: Structs.RowCells[], gridB: Structs.RowCells[]): Delta => {
  const rowLengthA = gridA.length;
  const rowLengthB = gridB.length;

  return {
    rowDelta: rowLengthA - rowLengthB,
    colDelta: 0
  };
};

const generateElements = <T> (cells: T[], row: Structs.RowCells, generators: SimpleGenerators) => {
  const getGenerator = row.section === 'colgroup' ? generators.col : generators.cell;
  return Arr.map(cells, () => Structs.elementnew(getGenerator(), true));
};

const rowFill = (grid: Structs.RowCells[], amount: number, generators: SimpleGenerators): Structs.RowCells[] =>
  grid.concat(Arr.range(amount, () => {
    const row = grid[grid.length - 1];
    return GridRow.setCells(row, generateElements(row.cells, row, generators));
  }));

const colFill = (grid: Structs.RowCells[], amount: number, generators: SimpleGenerators): Structs.RowCells[] =>
  Arr.map(grid, (row) => {
    const newChildren = generateElements(Arr.range(amount, Fun.identity), row, generators);
    return GridRow.setCells(row, row.cells.concat(newChildren));
  });

const tailor = (gridA: Structs.RowCells[], delta: Delta, generators: SimpleGenerators): Structs.RowCells[] => {
  const fillCols = delta.colDelta < 0 ? colFill : Fun.identity;
  const fillRows = delta.rowDelta < 0 ? rowFill : Fun.identity;

  const modifiedCols = fillCols(gridA, Math.abs(delta.colDelta), generators);
  return fillRows(modifiedCols, Math.abs(delta.rowDelta), generators);
};

export { measure, measureWidth, measureHeight, tailor };
