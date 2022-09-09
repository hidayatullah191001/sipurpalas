         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>

            <div class="row mb-5">
               <div class="col-lg-7">
                  <div class="card border-0 shadow p-2">
                     <div class="card-body">
                       <div class="row align-items-center">
                         <div class="col-lg-3 col-md-3 col-sm-1">
                           <img src="<?=base_url('assets/img/profile/').$user['image'] ?>" class="card-img" alt="...">
                        </div>
                        <div class="col">
                           <h6 class="text-pks">Username : <b><?=$user['name'] ?></b></h6>
                           <h6 class="text-pks">Email : <b><?=$user['email'] ?></b></h6>
                           <h6 class="text-pks">Role : <b><?php 
                           if ($user['role_id'] == 2) {
                              echo "Pegawai";
                           }else if($user['role_id'] == 5){
                              echo "Lurah";
                           }else if($user['role_id'] == 1){
                              echo "Administrator";
                           }
                           ?></b></h6>
                           <h6 class="text-pks">Tanggal Gabung : <b>
                              <?php 
                              date_default_timezone_set('Asia/Jakarta');
                              echo date('d F Y', $user['date_created']); ?></b></h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         	<!-- Content Row -->
         	<!-- <div class="row">
         		<div class="col-xl-4 col-md-6 mb-4">
         			<div class="card border-left-primary shadow h-100 py-2">
         				<div class="card-body">
         					<div class="row no-gutters align-items-center">
         						<div class="col mr-2">
         							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
         							Total User</div>
         							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_total ?></div>
         						</div>
         						<div class="col-auto">
         							<i class="fas fa-calendar fa-2x text-gray-300"></i>
         						</div>
         					</div>
         				</div>
         			</div>
         		</div>

         		<div class="col-xl-4 col-md-6 mb-4">
         			<div class="card border-left-success shadow h-100 py-2">
         				<div class="card-body">
         					<div class="row no-gutters align-items-center">
         						<div class="col mr-2">
         							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
         							Total User Aktif</div>
         							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_aktif ?></div>
         						</div>
         						<div class="col-auto">
         							<i class="fas fa-inbox fa-2x text-gray-300"></i>
         						</div>
         					</div>
         				</div>
         			</div>
         		</div>

         		<div class="col-xl-4 col-md-6 mb-4">
         			<div class="card border-left-danger shadow h-100 py-2">
         				<div class="card-body">
         					<div class="row no-gutters align-items-center">
         						<div class="col mr-2">
         							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total User Tidak Aktif
         							</div>
         							<div class="row no-gutters align-items-center">
         								<div class="col-auto">
         									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $count_tidak_aktif ?></div>
         								</div>
         							</div>
         						</div>
         						<div class="col-auto">
         							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
         						</div>
         					</div>
         				</div>
         			</div>
         		</div>
            </div>
         </div> -->
      </div>
         <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

