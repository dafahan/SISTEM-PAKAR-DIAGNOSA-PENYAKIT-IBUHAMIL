
<?= $this->extend('layout/admin') ?>



<?= $this->section('content') ?>
				<!-- Page content-->
<!-- DataTales Example -->
<div class="card shadow mb-12 tabell">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold warna">Tabel Data Rules</h6>
        </div>
        <div class="card-body">
            <form method="post" encytpe="multipart/form-data">
                <table class="table table-bordered wartab" id="dataTable" width="50%" cellspacing="0" >
                    <thead>
                        <tr>
                           
                            <th>No</th>
                            <th>Kode Penyakit</th>
                            <th>Kode Gejala</th>
							<th>Aksi</th>
                        </tr>
                    </thead>
                <tbody>
					<?php $row=1; foreach($rules as $r):?>
                    <tr>
                        <td> <?= $row++; ?></td>
						<td> <?= 'P'.$r['id'];?></td>
                        <td> <?= $r['rule'];?> </td>
						<td>
                        <a class="badge badge-pill badge-warning" href="">edit</a> |
                        <a href="#" onclick="return confirm('Yakin ingin menghapus data?');" class="badge badge-pill badge-danger">hapus</a>
                        </td>
                    </tr>
					<?php endforeach;?>
                </tbody>
                <a href="/admin/tambahsol" class="btn btn-ciri my-2 px-2 text-white" weight="100px">Tambah Data</a>
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