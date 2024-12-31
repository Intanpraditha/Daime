<style>
    .btn-secondary{
        background-color: #B19570;
    }
    .back-button {
        position: fixed;
        top: 100px;
        left: 20px;
        z-index: 1000; /* Memastikan tombol kembali di atas konten lain */
    }
</style>

<div class="container mt-5">
    <a href="<?php echo base_url('dashboard/'); ?>" class="btn btn-secondary back-button"><i class="fa-solid fa-chevron-left"></i></a>

    <table class="table">
       
        <tbody>
            <?php foreach ($photos_with_total_likes_and_user_data as $photo): ?>
                <tr>
                    <td><img src="<?php echo base_url('uploads/' . $photo->LokasiFile); ?>" alt="Foto" width="100"></td>
                    <td><?php echo $photo->JudulFoto; ?></td>
                    <td><?php echo $photo->namaLengkap; ?></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <img src="<?php echo base_url('assets/'); ?>img/liked.png" alt="Like" width="30" height="35">
                            </div>
                            <div>
                                <span class="fw-bold text-secondary" id="likeCount"><?php echo $photo->total_likes; ?> likes</span>
                            </div>
                        </div>
                    </td>
                    <td><a class="btn btn-secondary" href="<?php echo base_url('foto/detail/'.$photo->FotoID); ?>">lihat >></a></td>
                </tr>
            <?php endforeach; ?>
                    
        </tbody>
    </table>

    <!-- <?php foreach ($photos_with_total_likes_and_user_data as $photo): ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo base_url('uploads/' . $photo->LokasiFile); ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $photo->JudulFoto; ?></h4>
                        <p class="card-text fw-medium"><?php echo $photo->username; ?> </p>
                        <p class="card-text"><small class="text-body-secondary"><?php echo $photo->TanggalUnggah; ?></small></p>
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <img src="<?php echo base_url('assets/'); ?>img/liked.png" alt="Like" width="30" height="35">
                            </div>
                            <div>
                                <span class="fw-bold text-secondary" id="likeCount"><?php echo $photo->total_likes; ?> likes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?> -->
</div>

