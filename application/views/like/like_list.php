<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4 shadow">
                <div class="d-flex mb-3">
                    <div class="me-auto">
                        <h3>Like</h3>
                    </div>
                    <div>
                        <a href="<?php echo base_url('likefoto/tambah/');?>" class="btn btn-primary">Tambah data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>LikeID</th>
                        <th>FotoID</th>
                        <th>UserID</th>
                        <th>Tanggal Like</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach($likes as $like): ?>
                    <tr>
                        <td><?php echo $like->LikeID; ?></td>
                        <td><?php echo $like->FotoID; ?></td>
                        <td><?php echo $like->UserID; ?></td>
                        <td><?php echo $like->TanggalLike; ?></td>
                        <td>
                            <!-- <a href="<?php echo base_url('likefoto/edit/'.$like->LikeID); ?>">Edit</a> | -->
                            <a href="<?php echo base_url('likefoto/hapus/'.$like->LikeID); ?>" onclick="return confirm('Anda yakin ingin menghapus like ini?');"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
