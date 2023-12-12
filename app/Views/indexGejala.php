<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Dashboard Admin</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/css/dashboard/sb-admin-2.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/dashboard/sb-admin-2.css') ?>" rel="stylesheet">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

    <!-- Page Heading -->
   

		<!-- Sidebar -->
		<ul class="navbar-nav bg-dash sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/admin') ?>">
				<div class="sidebar-brand-icon rotate-n-15">
					
				</div>
                
				<div class="sidebar-brand-text mx-3"><br><br> Bumil Sehat<sup></sup> 
                <section class="logo">
                <img src="<?=base_url("assets/gambar/bumil.png")?>" height="70px" />
           </section> </div>
               
			</a>

			<!-- Divider -->
			<br><br><hr class="sidebar-divider my-0"><br>

			<!-- Nav Item - Dashboard -->
			
			<!-- Heading -->
			<div class="sidebar-heading">
				Data User
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<!-- Nav Item - Tables -->
            <li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('/admin') ?>">
					<span>Data Pasien</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Gejala dan Penyakit
			</div>

			<!-- Nav Item - Pages Collapse Menu -->

			<!-- Nav Item - Charts -->
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('admin/penyakit') ?>">
					
					<span>Data Penyakit</span></a>
			</li>
			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('admin/gejala') ?>">
					
					<span>Data Gejala</span></a>
			</li>

			<div class="sidebar-heading">
				Solusi
			</div>

			<!-- Nav Item - Pages Collapse Menu -->

			<!-- Nav Item - Charts -->
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('admin/solusi') ?>">
					
					<span>Data Solusi</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Logout -->
			<li class="nav-item">
				<a class="nav-link" href="#">
					
					<span>Keluar</span></a>
			</li>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content tab-aja">
				<!-- End of Topbar -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4 db">
        <h1 class="h3 mb-0 text-gray-800">Data Gejala</h1>
    </div>
				<!-- Begin Page Content -->
				<div class="container-fluid bebas">

					<!-- Content Row -->
					<br><div class="row">

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2 dapas">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
                                        <i class="fa-solid fa-users fa-2x text-black-300"></i>
											<div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Data Pasien</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
											<div class="text-left">
              								<div class="underline"></div>
											<br><a class="small text-black stretched-link" href="<?= base_url('/admin') ?>">Lihat Selengkapnya<i class="fas fa-angle-right arrow"></i></a>
             							 </div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info  shadow h-100 py-2 dapen">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
                                        <i class="fas fa-calendar fa-2x text-black-300"></i>
											
											<div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Data Penyakit</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">4 orang</div>
											<div class="text-left">
              								<div class="underline"></div>
											<br><a class="small text-black stretched-link" href="<?= base_url('/admin/penyakit') ?>">Lihat Selengkapnya<i class="fas fa-angle-right arrow"></i></a>
             							 </div>
										</div>
							
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2 daje">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
                                        <i class="fa-regular fa-note-sticky  fa-2x text-black-300"></i>
											<div class="text-xs font-weight-bold text-grey text-uppercase mb-1">Data Gejala</div>
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">2 orang</div>
												</div>
												<div class="text-left">
              								<div class="underline"></div>
											<br><a class="small text-black stretched-link" href="<?= base_url('/admin/gejala') ?>">Lihat Selengkapnya<i class="fas fa-angle-right arrow"></i></a>
             							 </div>
												<!-- <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2 dasos">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
                                        <i class="fa-solid fa-address-card fa-2x text-black-300"></i>
											<div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Data Solusi</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 100.000.000</div>
											<div class="text-left">
              								<div class="underline"></div>
											<br><a class="small text-black stretched-link" href="<?= base_url('/admin/solusi') ?>">Lihat Selengkapnya<i class="fas fa-angle-right arrow"></i></a>
             							 </div>
										</div>
									</div>
								</div>
							</div>
						</div>


						
					</div>

				</div>
				<!-- Page content-->
<!-- DataTales Example -->
<div class="card shadow mb-12 tabell">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold warna">Tabel Data Gejala</h6>
        </div>
        <div class="card-body">
            <form method="post" encytpe="multipart/form-data">
                <table class="table table-bordered wartab" id="dataTable" width="50%" cellspacing="0" >
                    <thead>
                        <tr>
                           
                            <th>Id Gejala</th>
                            <th>Nama Gejala</th>
							<th>Aksi</th>
                        </tr>
                    </thead>
                <tbody>
		
                    <tr>
                        <td> 001 </td>
						<td> muntah</td>
						<td>
                        <a class="badge badge-pill badge-warning" href="#">edit</a> |
                        <a href="#" onclick="return confirm('Yakin ingin menghapus data?');" class="badge badge-pill badge-danger">hapus</a>
                        </td>
                    </tr>
					
                </tbody>
                <a href="/admin/tambahgjl" class="btn btn-ciri my-2 px-2 text-white" weight="100px">Tambah Data</a>
                </table>
            </form>
        </div>
    </div>
                <!-- Blog entries-->
               
                <!-- Side widgets-->
               
            </div>
        </div>
				<!-- Begin Page Content -->
		

                <!-- DataTales Example -->

					
                </div>		
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Bumil Sehat 2023</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Bootstrap core JavaScript-->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="../assets/js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="../assets/vendor/chart.js/Chart.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="../assets/js/demo/chart-area-demo.js"></script>
	<script src="../assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>