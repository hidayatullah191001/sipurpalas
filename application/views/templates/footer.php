 <!-- Footer -->
 <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <b>Sistem Informasi Perpustakaan Digital SMAN 14 Palembang</b> <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Keluar Aplikasi?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Kamu yakin ingin keluar dan mengakhiri session ini?</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-danger" href="<?=base_url('auth/logout') ?>">Keluar</a>
        </div>
    </div>
</div>
</div>

<!-- Core plugin JavaScript-->
<script src="<?=base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?=base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?=base_url('assets/') ?>js/sb-admin-2.min.js"></script>

<script>
    $('.custom-file-input').on('change', function(){
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>


<script type="text/javascript">
   const togglePassword1 = document.querySelector('#togglePassword1');
   const password1 = document.querySelector('#password1');

   togglePassword1.addEventListener('click', function(e) {
         // toggle the type attribute
         const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
         password1.setAttribute('type', type);
         // toggle the eye slash icon
         this.classList.toggle('fa-eye-slash');
     });
 </script>

 <script>
    $('.form-check-input').on('click', function(){
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url : "<?=base_url('admin/changeAccess'); ?>",
            type : 'post',
            data : {
                menuId : menuId,
                roleId : roleId
            },
            success : function(){
                document.location.href = "<?=base_url('admin/roleAccess/'); ?>" + roleId;
            }
        });

    });

</script>

</body>

</html>