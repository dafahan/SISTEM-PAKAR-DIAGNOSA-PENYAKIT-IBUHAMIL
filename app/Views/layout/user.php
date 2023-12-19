<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Dashboard User</title>

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
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/dashboard') ?>">
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
				Diagnis
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<!-- Nav Item - Tables -->
            <li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('/diagnosis') ?>">
					<span>Diagnosis</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('/diagnosis/result') ?>">
					<span>Diagnosis Result</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Logout -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('logout')?>">
					
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
					<?php 
					 $fullUri = current_url(true);
					 $subdomain = $fullUri->getSegment(1);
					 ?>
        <h1 class="h3 mb-0 text-gray-800"><?= empty($subdomain) ? "Pasien" : ucfirst($subdomain) ?></h1>
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
											<div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Diagnosis</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countDiag?></div>
											<div class="text-left">
              								<div class="underline"></div>
											<br><a class="small text-black stretched-link" href="<?= base_url('diagnosis/result') ?>">Lihat Selengkapnya<i class="fas fa-angle-right arrow"></i></a>
             							 </div>
										</div>
									</div>
								</div>
							</div>
						</div>

						
					</div>

				</div>
                <?= $this->renderSection('content') ?>
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