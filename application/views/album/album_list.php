<!-- Begin Page Content -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4 shadow">
                <div class="d-flex mb-3">
                    <div class="me-auto">
                        <h3>Album</h3>
                    </div>
                    <div>
                        <a href="<?php echo base_url('album/tambah/');?>" class="btn btn-primary">Tambah data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>AlbumID</th>
                            <th>Nama Album</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Dibuat</th>
                            <th>UserID</th>
                            <th>Aksi</th>
                        </tr>
                        <?php foreach($albums as $album): ?>
                        <tr>
                            <td><?php echo $album->AlbumID; ?></td>
                            <td><?php echo $album->NamaAlbum; ?></td>
                            <td><?php echo $album->Deskripsi; ?></td>
                            <td><?php echo $album->TanggalDibuat; ?></td>
                            <td><?php echo $album->UserID; ?></td>
                            <td>
                                <a href="<?php echo base_url('album/edit/'.$album->AlbumID); ?>"><i class="fa fa-pen"></i></a> |
                                <a href="<?php echo base_url('album/hapus/'.$album->AlbumID); ?>" onclick="return confirm('Anda yakin ingin menghapus album ini?');"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
