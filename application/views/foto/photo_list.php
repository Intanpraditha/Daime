<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4 shadow">
                <div class="d-flex mb-3">
                    <div class="me-auto">
                        <h3>Foto</h3>
                    </div>
                    <div>
                        <a href="<?php echo base_url('foto/tambah/');?>" class="btn btn-primary">Tambah data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>FotoID</th>
                        <th>Gambar</th>
                        <th>Judul Foto</th>
                        <th>Deskripsi Foto</th>
                        <th>Tanggal Unggah</th>
                        <th>AlbumID</th>
                        <th>UserID</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach($photos as $photo): ?>
                    <tr>
                        <td><?php echo $photo->FotoID; ?></td>
                        <td><img src="<?php echo base_url('uploads/' . $photo->LokasiFile); ?>" alt="Foto" width="100"></td>
                        <td><?php echo $photo->JudulFoto; ?></td>
                        <td><?php echo $photo->DeskripsiFoto; ?></td>
                        <td><?php echo $photo->TanggalUnggah; ?></td>
                        <td><?php echo $photo->AlbumID; ?></td>
                        <td><?php echo $photo->UserID; ?></td>
                        <td>
                            <a href="<?php echo base_url('foto/edit/'.$photo->FotoID); ?>"><i class="fa fa-pen"></i></a>
                            <a href="<?php echo base_url('foto/hapus/'.$photo->FotoID); ?>" onclick="return confirm('Anda yakin ingin menghapus foto ini?');"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
