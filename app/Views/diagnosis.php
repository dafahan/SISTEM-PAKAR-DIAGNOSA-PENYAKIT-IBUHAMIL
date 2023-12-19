
<?= $this->extend('layout/usernoheader') ?>



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
            
        <?php echo form_open('diagnosis', ['class' => 'mb-4']); ?>
          <div class="card-body card-dashboard">
          <p> berikan ceklis jika anda merasakan gejala dibawah ini </p>
            <div class="table-responsive">
              <table class="table table-striped ">
                <thead>
                  <tr>
                    <th></th>
                    <th>Gejala</th>
                    <th>Check</th>
                  </tr>
                </thead>
                <tbody>
                    
                <?php $no=1; foreach ($gejala as $dt): ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $dt['gejala']; ?></td>
                      <td><input class="form-check-input ml-2" type="checkbox" style="position:relative;" name="answer_<?php echo $dt['id']; ?>[]" value="1"></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="text-center">
              <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
          </div>
          <?php echo form_close(); ?>
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