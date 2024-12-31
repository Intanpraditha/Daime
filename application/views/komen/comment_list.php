<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4 shadow">
                <div class="d-flex mb-3">
                    <div class="me-auto">
                        <h3>Komentar</h3>
                    </div>
                    <div>
                        <a href="<?php echo base_url('komentarfoto/tambah/');?>" class="btn btn-primary">Tambah data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>KomentarID</th>
                        <th>FotoID</th>
                        <th>UserID</th>
                        <th>Isi Komentar</th>
                        <th>Tanggal Komentar</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach($comments as $comment): ?>
                    <tr>
                        <td><?php echo $comment->KomentarID; ?></td>
                        <td><?php echo $comment->FotoID; ?></td>
                        <td><?php echo $comment->UserID; ?></td>
                        <td><?php echo $comment->IsiKomentar; ?></td>
                        <td><?php echo $comment->TanggalKomentar; ?></td>
                        <td>
                            <!-- <a href="<?php echo base_url('komentarfoto/edit/'.$comment->KomentarID); ?>">Edit</a> | -->
                            <a href="<?php echo base_url('komentarfoto/hapus/'.$comment->KomentarID); ?>" onclick="return confirm('Anda yakin ingin menghapus komentar ini?');"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
