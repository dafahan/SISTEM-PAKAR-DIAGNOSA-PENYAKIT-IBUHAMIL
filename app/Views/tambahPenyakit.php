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
				<a class="nav-link text-white" href="<?= base_url('/admin/penyakit') ?>">
					
					<span>Data Penyakit</span></a>
			</li>
			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('/admin/gejala') ?>">
					
					<span>Data Gejala</span></a>
			</li>

			<div class="sidebar-heading">
				Solusi
			</div>

			<!-- Nav Item - Pages Collapse Menu -->

			<!-- Nav Item - Charts -->
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('/admin/rules') ?>">
					
					<span>Data Rules</span></a>
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
       
    </div>
<!-- Form Tambah Data -->

<div class="kanan">
    <div class="container-fluid">

    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between ml-4 py-5">
            <h1 class="h3 mb-0 text-gray-800 " id="tess">Form Tambah Penyakit</h1>
        </div>


    <!-- Content Row -->
    <div class="row ml-4">
	<form action="<?= ($penyakit) ? base_url("/admin/penyakit/update/{$penyakit['kode']}") : base_url('/admin/store') ?>" id="tambah" method="POST">
		<div class="form-group">
			<label for="penyakit">Penyakit</label>
			<input type="text" class="form-control" id="penyakit" name="nama" placeholder="Masukkan penyakit" value="<?= ($penyakit) ? esc($penyakit['nama']) : '' ?>">
		</div>
		<button class="btn btn-ciri text-white">Submit</button>
	</form>

	

    </div>

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