<div class="modal fade" id="deleteModal<?=$vd['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title font-weight-bold text-white" id="exampleModalLongTitle">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data akan dihapus secara permanen. Apakah kamu ingin melanjutkan?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="<?=base_url('video/hapus/').$vd['id']?>" type="button" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>