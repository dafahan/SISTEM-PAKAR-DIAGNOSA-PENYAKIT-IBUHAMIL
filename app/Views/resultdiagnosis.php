
<?= $this->extend('layout/user') ?>



<?= $this->section('content') ?>

				<!-- Page content-->
<!-- DataTales Example -->
<div class="card shadow mb-12 tabell">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold warna">Diagnosis</h6>
        </div>
        <div class="card-body">
          
            <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Diagnosis</h4>
          
        </div>
        <div class="card-content">
        <div class="card-body card-dashboard">
          <div class="container mt-5">
                <h1 class="mb-4">Diagnosis Result</h1>

                <?php if (!empty($diagnosedDiseases)): ?>
                    <p>Berdasarkan gejala yang diberikan , penyakit yang mungkin anda derita adalah :</p>
                    <ul class="list-group">
                        <li class="list-group-item"><?php echo $diagnosedDiseases['nama']; ?></li> 
                    </ul>
                <?php else: ?>
                    <p>Gejala yang anda berikan tidak spesifik menunjukan penyakit apapun</p>
                <?php endif; ?>
                  <div class="d-flex justify-content-start mt-5 w-100" >
                    <div class="d-flex justify-content-around w-50">
                    <a href="<?= base_url('diagnosis');?>">Ulangi Diagnosis <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M0 224c0 17.7 14.3 32 32 32s32-14.3 32-32c0-53 43-96 96-96H320v32c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l64-64c12.5-12.5 12.5-32.8 0-45.3l-64-64c-9.2-9.2-22.9-11.9-34.9-6.9S320 19.1 320 32V64H160C71.6 64 0 135.6 0 224zm512 64c0-17.7-14.3-32-32-32s-32 14.3-32 32c0 53-43 96-96 96H192V352c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9l-64 64c-12.5 12.5-12.5 32.8 0 45.3l64 64c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V448H352c88.4 0 160-71.6 160-160z"/></svg></a>
                    <a href="<?= base_url('diagnosis/result');?>">List Result <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg></a>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
<?= $this->endSection()?>