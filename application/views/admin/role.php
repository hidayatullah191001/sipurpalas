         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>

         	<div class="row">
         		<div class="col-lg-6">

         			<?=form_error('menu','<div class="alert alert-danger text-danger">
         				<div class = "icon text-white">
         				<i class="fas fa-fw fa-ban"></i>
         				</div>
         				','
         				</div>')?>

         				<?= $this->session->flashdata('message') ?>

         				<a data-toggle="modal" data-target="#newRoleModal" class="btn btn-primary btn-icon-split mb-3">
                  <span class="icon text-white-20">
                        <i class="fas fa-fw fa-plus"></i>
                     </span>
                     <span class="text">Add New Role</span></a>
                     
                     <table class="table table-hover">
                      <thead class="text-white bg-primary">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Role</th>
                          <th scope="col">Action</th>
                       </tr>
                    </thead>
                    <tbody>
                     <?php $i=1; ?>
                     <?php foreach ($role as $r ) : ?>
                       <tr>
                         <th scope="row"><?= $i ?></th>
                         <td><?=$r['role']?></td>
                         <td>
                           <a class="btn btn-warning btn-circle btn-sm" href="<?= base_url('admin/roleaccess/').$r['id'] ?>"><i class="fas fa-fw fa-eye"></i></a>
                        </td>
                     </tr>
                     <?php $i++; ?>
                  <?php endforeach ?>
               </tbody>
            </table>
         </div>			
      </div>

   </div>
   <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- MODAL -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
       </button>
    </div>
    <form method="post" action="<?=base_url('admin/role') ?>">
     <div class="modal-body">
       <div class="form-group">
         <input type="text"class="form-control" id="role" name="role" placeholder="Role name">
      </div>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Add</button>
 </div>
</form>
</div>
</div>
</div>
