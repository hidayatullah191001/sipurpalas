import { Assert, UnitTest } from '@ephox/bedrock-client';
import { Arr } from '@ephox/katamari';
import { Hierarchy, Html, Insert, Remove, SugarBody, SugarElement } from '@ephox/sugar';
import { copyCols } from 'ephox/snooker/api/CopyCols';

UnitTest.test('CopyColumnsTest', () => {
  const check = (
    inputHtml: string,
    expectedHtml: string,
    section: number,
    row: number,
    column: number
  ) => {
    const table = SugarElement.fromHtml<HTMLTableElement>(inputHtml);
    Insert.append(SugarBody.body(), table);

    const rows = copyCols(table, {
      selection: [ Hierarchy.follow(table, [ section, row, column, 0 ]).getOrDie() ]
    }).getOrDie();
    const copiedHtml = Arr.map(rows, Html.getOuter).join('');

    Assert.eq('Copied HTML should match', expectedHtml, copiedHtml);
    Remove.remove(table);
  };

  check(
    (
      '<table>' +
      '<thead>' +
      '<tr><td>H1</td><td>H2</td></tr>' +
      '</thead>' +
      '<tbody>' +
      '<tr><td>A2</td><td>B2</td></tr>' +
      '<tr><td>A3</td><td>B3</td></tr>' +
      '</tbody>' +
      '<tfoot>' +
      '<tr><td>F1</td><td>F2</td></tr>' +
      '</tfoot>' +
      '</table>'
    ),
    (
      '<tr><td>H2</td></tr>' +
      '<tr><td>B2</td></tr>' +
      '<tr><td>B3</td></tr>' +
      '<tr><td>F2</td></tr>'
    ),
    0, 0, 1
  );

  check(
    (
      '<table>' +
      '<thead>' +
      '<tr><td>H1</td><td>H2</td></tr>' +
      '</thead>' +
      '<tbody>' +
      '<tr><td rowspan="2">A2</td><td>B2</td></tr>' +
      '<tr><td>B3</td></tr>' +
      '</tbody>' +
      '<tfoot>' +
      '<tr><td>F1</td><td>F2</td></tr>' +
      '</tfoot>' +
      '</table>'
    ),
    (
      '<tr><td>H1</td></tr>' +
      '<tr><td rowspan="2">A2</td></tr>' +
      '<tr></tr>' +
      '<tr><td>F1</td></tr>'
    ),
    1, 0, 0
  );

  check(
    (
      '<table>' +
      '<thead>' +
      '<tr><td>H1</td><td>H2</td></tr>' +
      '</thead>' +
      '<tbody>' +
      '<tr><td>A2</td><td>B2</td></tr>' +
      '<tr><td colspan="2">A3</td></tr>' +
      '</tbody>' +
      '<tfoot>' +
      '<tr><td>F1</td><td>F2</td></tr>' +
      '</tfoot>' +
      '</table>'
    ),
    (
      '<tr><td>H1</td><td>H2</td></tr>' +
      '<tr><td>A2</td><td>B2</td></tr>' +
      '<tr><td colspan="2">A3</td></tr>' +
      '<tr><td>F1</td><td>F2</td></tr>'
    ),
    1, 1, 0
  );

  check(
    (
      '<table>' +
      '<thead>' +
      '<tr><td>H1</td><td>H2</td></tr>' +
      '</thead>' +
      '<tbody>' +
      '<tr><td>A2</td><td>B2</td></tr>' +
      '<tr><td colspan="2">A3</td></tr>' +
      '</tbody>' +
      '<tfoot>' +
      '<tr><td>F1</td><td>F2</td></tr>' +
      '</tfoot>' +
      '</table>'
    ),
    (
      '<tr><td>H1</td></tr>' +
      '<tr><td>A2</td></tr>' +
      '<tr><td>A3</td></tr>' +
      '<tr><td>F1</td></tr>'
    ),
    1, 0, 0
  );
});
