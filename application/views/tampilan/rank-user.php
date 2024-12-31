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

    <?php foreach ($users as $user): ?>   
        <div class="card mb-3 p-3">
            <div class="row g-0">
                <div class="col-md-2">
                    <img class="rounded-circle" src="<?php echo base_url('uploads/' . $user->LokasiFoto); ?>" alt="Foto" width="100" height="100">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $user->namaLengkap; ?></h5>
                        <p class="card-text"><?php echo $user->username; ?><br>
                        <small class="text-body-secondary"><?php echo $user->email; ?></small></p>
                    </div>
                </div>
                
                <div class="col-md-2 align-items-center">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <img src="<?php echo base_url('assets/'); ?>img/liked.png" alt="Like" width="30" height="35">
                            </div>
                            <div>
                                <span class="fw-bold text-secondary" id="likeCount"><?php echo isset($total_likes_array[$user->UserID]) ? $total_likes_array[$user->UserID] : 0; ?> likes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>