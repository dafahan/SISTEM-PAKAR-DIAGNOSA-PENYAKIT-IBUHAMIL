
<?= $this->extend('layout/admin') ?>



<?= $this->section('content') ?>

				<!-- Page content-->
			<!-- DataTales Example -->
<div class="card shadow  ml-3 mb-12 tabelll">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Tabel Data Pasien</h6>
    </div>
    <div class="card-body">
        <form method="post" encytpe="multipart/form-data">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        
                        <th>Np</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            <tbody>
                <?php $row=1; foreach($user as $u):
					if($u->username == "admin")continue;
					?>
                <tr>
                    <td><?=$row++;?></td>
                    <td><?= $u->username;?></td>
                    <td><?= $u->email;?></td>
                    <td><?= $u->umur;?></td>
                    <td><?= $u->alamat;?></td>
                    <td>
                
                    <a href="<?= base_url('admin/pasien/delete/'.$u->id)?>" onclick="return confirm('Yakin ingin menghapus data?');" class="badge badge-pill badge-danger">hapus</a>
                    </td>
                   
                </tr>
              <?php endforeach; ?>
            </tbody>
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
			<?= $this->endSection() ?>