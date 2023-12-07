<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"/>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/custom.css" />
    
    <title>Cek Kesehatan Bumil Yuk!</title>
  </head>
  <body>
    <nav class="navbar py-2 navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="#" width="300" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item align-self-center active">
              <a class="nav-link" href="index.php"
                >Beranda <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item align-self-center active">
              <a class="nav-link"  href="#services">Layanan <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item align-self-center active">
              <a class="nav-link"  href="#portfolio">Informasi <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <!-- Button trigger modal -->
              <button type="button" class="btn px-4 btn-secondary ml-5 logintombol" data-toggle="modal" data-target="#exampleModal">Log In</button>
              </button>

              <!-- Login -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                      <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                      <form id="login-form" action="function.php?act=login" method="POST" >
                        <div class="form-group">
                          <div id="result"></div>
                            <label for="nama" class="col-form-label">Username :</label>
                              <input type="text" class="form-control" id="nama" name="nama" rows="3" placeholder="Username">
                              <label for="pass" class="col-form-label">Password :</label>
                              <input type="password" class="form-control" id="password" name="password" rows="3" placeholder="Password">
                          </div>
                        <div class="form-row">
                    </div>
                        <div class="modal-footer">
                          <input type="submit" name="login_btn" id="login" class="btn btn-primary" value="Login">
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <a class="btn px-4 btn-primary ml-2" href="/register" role="button"
              >Register</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <section class="heroBWA mt-5">
      <div class="container">
        <div class="row">
        <div class="col d-none d-sm-block">
            <img class="bumil" width="600" src="assets/gambar/bumil.png" alt="hero" />
          </div>
          <div class="col align-self-center">
            <h1 class="mb-4">Cek Kesehatan Bumil Yuk!</h1>
            <p class="mb-4">
            Cek Kesehatan Bumil Yuk! Merupakan sistem informasi berbasis Web Based yang memanfaatkan teknologi Sistem Pakar didalamnya. Dengan menggunakan sistem pakar ini pengguna dapat mengenali atau memeriksakan keluhan terhadap kehamilannya hanya dengan menjawab pertanyaan yang diberikan oleh sistem, dan kemudian pengguna dapat melihat hasil Test dengan hasil yang direpresentasikan dalam bentuk persentase.
            </p>
            <a class="btn btn-primary" href="register.php" role="button">Ayo Mulai!</a>
          </div>
          
        </div>
      </div>
    </section>
    </body>
    <!-- Services-->
    <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <br><h2 class="text-center mt-0">Layanan Kami</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                        <div class="col d-none d-sm-block">
            <img class="mulai"  width="300" src="assets/gambar/mulai.png" alt="hero" />
          </div>
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Mulai</h3>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                    <img class="pilih"  width="225" src="assets/gambar/pilih.png" alt="hero" />
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2 inpo">Tentukan Diagnosa</h3>
                    
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                        <img class="hasil"  width="330" src="assets/gambar/hasil.png" alt="hero" />
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2 hasdog">Hasil Diagnosa</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!-- Informasi-->
      <br><br><br><br> <div id="portfolio">
            <div class="container-fluid p-0">
            <hr class="divider" />
            <h2 class="text-center mt-0" ><b>Informasi</b></h2>
            <hr class="garis" />
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/gambar/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/gambar/thumbnail/1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Klik</div>
                                <div class="project-name">Bumil Sehat!</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/gambar/fullsize/2.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/gambar/thumbnail/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Klik</div>
                                <div class="project-name">Bumil Sehat!</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/gambar/fullsize/3.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/gambar/thumbnail/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Klik</div>
                                <div class="project-name">Bumil Sehat!</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/gambar/fullsize/4.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/gambar/thumbnail/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Klik</div>
                                <div class="project-name">Bumil Sehat!</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/gambar/fullsize/5.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/gambar/thumbnail/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Klik</div>
                                <div class="project-name">Bumil Sehat!</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/gambar/fullsize/6.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/gambar/thumbnail/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Klik</div>
                                <div class="project-name">Bumil Sehat!</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
  

  <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"
  ></script>
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
  ></script>
</html>
