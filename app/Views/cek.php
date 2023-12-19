<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Dashboard Donatur</title>

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

		<!-- Sidebar -->
		<ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
				<div class="sidebar-brand-icon rotate-n-15">
					
				</div>
                <section class="logo">
           
        </section>
				<div class="sidebar-brand-text mx-3"> <img src="assets/gambar/logooo.png" alt="logo" height="200px" /><sup></sup>
            </div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->

            <div class="sidebar-heading">
            <h5 class="font-weight-bold text-white text-uppercase teks">Data User</h5>
        </div>
        <section class="isi">
            <a class="nav-link" href="indexAdmin.php">
            <span>Data Pasien</span></a>
        </section>
        <section class="isi">
            <a class="nav-link" href="indexPakar.php">
            <span>Data Pakar</span></a>
        </section>
        <div class="sidebar-heading">
            <h5 class="font-weight-bold text-white text-uppercase teks">Gejala & Penyakit</h5> 
        </div>
        <section class="isi">
            <a class="nav-link" href="indexPenyakit.php">
            <span>Data Penyakit</span>
            </a>
        </section>
        <section class="isi">
            <a class="nav-link" href="indexGejala.php">
            <span>Data Gejala</span>
            </a>
        </section>
        <div class="sidebar-heading">
            <h5 class="font-weight-bold text-white text-uppercase teks">Rules</h5> 
        </div>
        <section class="isi">
            <a class="nav-link" href="indexSolusi.php">
            <span>Data Rules</span>
            </a>
        </section>
        <section class="isi">
            <a class="nav-link" href="logout.php">
            <span>Logout</span>
            </a>
        </section>

			<!-- Nav Item - Pages Collapse Menu -->
			<!-- Nav Item - Tables -->
           

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Content Row -->
					<div class="row">

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<i class="fas fa-calendar fa-2x text-gray-300"></i>
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Beasiswa</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
											<div class="text-left">
              								<div class="underline"></div>
											<br><a class="small text-black stretched-link" href="<?= base_url('/beadonatur') ?>">Lihat Selengkapnya<i class="fas fa-angle-right arrow"></i></a>
             							 </div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-success shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<i class="fa-solid fa-users fa-2x text-gray-300"></i>
											<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pendaftar</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">4 orang</div>
											<div class="text-left">
              								<div class="underline"></div>
											<br><a class="small text-black stretched-link" href="<?= base_url('/pendaftar') ?>">Lihat Selengkapnya<i class="fas fa-angle-right arrow"></i></a>
             							 </div>
										</div>
							
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<i class="fa-solid fa-address-card fa-2x text-gray-300"></i>
											<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Beswan</div>
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">2 orang</div>
												</div>
												<div class="text-left">
              								<div class="underline"></div>
											<br><a class="small text-black stretched-link" href="<?= base_url('/penerima') ?>">Lihat Selengkapnya<i class="fas fa-angle-right arrow"></i></a>
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
							<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<i class="fa-solid fa-sack-dollar fa-2x text-gray-300"></i>
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengeluaran</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 100.000.000</div>
											<div class="text-left">
              								<div class="underline"></div>
											<br><a class="small text-black stretched-link" href="<?= base_url('/daftarpengeluaran') ?>">Lihat Selengkapnya<i class="fas fa-angle-right arrow"></i></a>
             							 </div>
										</div>
									</div>
								</div>
							</div>
						</div>


						
					</div>

				</div>
				<!-- Page content-->
				<div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
						<center>
                        <a href="#!"><img src="assets/img/djarum.jpg" width="300px" height="300px" alt="..." /></a>
						</center>
                        <div class="card-body">
                            <div class="small text-muted">25 Januari 2023</div>
                            <h2 class="card-title">Beasiswa Djarum Plus</h2>
                            <p class="card-text">Program Djarum Beasiswa Plus merupakan beasiswa prestasi yang memberikan kesempatan bagi mahasiswa dari berbagai jurusan yang tengah menempuh program studi Strata 1/ Diploma 4 di perguruan tinggi negeri maupun swasta yang memiliki kerja sama (bermitra) dengan Djarum Foundation.</p>
                            <a class="btn btn-success" href="#!">Lihat →</a>
                        </div>
                    </div>
                    
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <!-- Categories widget-->
                    <div class="card-box mb-4">
                        <div class="card-header text-white"><i class="fa-solid fa-bullhorn"></i> Berita</div>
                        <div class="card-body">
                            <div class="row">
                                <div>
                                    <ul class="list-unstyled">
                                        <p><b class="text-white">Hadapi Era Bonus Demografi, Lebih dari 500 Beswan Djarum Ikuti Nation Building</b></p>
                                        <li></li>
                                        <li><a href="#!">Selengkapnya...</a></li>
                                    </ul>

									<hr class="sidebar-divider">

									<ul class="list-unstyled">
                                        <p><b class="text-white">Isu Populasi Kucing Liar Antar Mahasiswi ITB Juara Essay Contest Beswan Djarum 2022/2023</b></p>
                                        <li></li>
                                        <li><a href="#!">Selengkapnya...</a></li>
                                    </ul>

									<hr class="sidebar-divider">

									<ul class="list-unstyled">
                                        <p><b class="text-white">Tujuh Elemen Self Driving untuk Mengembangkan Potensi Diri ala Prof. Rhenald Kasali</b></p>
                                        <li></li>
										<div class="text-box">
                                        <li><a href="#!">Selengkapnya...</a></li>
										</div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                </div>
            </div>
        </div>
				<!-- Begin Page Content -->
				<div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Daftar Pengeluaran Donatur</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Beasiswa</th>
                                            <th>Universitas</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Pengeluaran</th>
                                            <th>Bukti Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Beasiswa Djarum Plus</td>
                                            <td>Universitas Lampung</td>
                                            <td>1/4/2023</td>
                                            <td>1/11/2023</td>
                                            <td>Rp. 100.000.000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Beasiswa Djarum Plus</td>
                                            <td>Universitas Indonesia</td>
                                            <td>1/4/2023</td>
                                            <td>1/11/2023</td>
                                            <td>Rp. 100.000.000</td>
                                            <td></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
								<!-- Pagination-->
								<nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Halaman</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Lainnya</a></li>
                        </ul>
                    </nav>
                            </div>
                        </div>
                    </div>
					
                </div>		
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; BesCamp 2023</span>
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