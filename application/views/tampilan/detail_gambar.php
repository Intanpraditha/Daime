<style>
    .tanggal{
        font-size:12px;
    }
    .btn-secondary{
        background-color:#B19570;
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
    <div class="card shadow">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('uploads/' . $gambar->LokasiFile); ?>" class="img-fluid rounded-start" alt="<?php echo $gambar->JudulFoto; ?>">
            </div>
            <div class="col-md-6">
                <div class="row mt-3 p-4">
                    <div class="">
                        <h5><?php echo $gambar->namaUploader; ?></h3>
                        <h2><?php echo $gambar->JudulFoto; ?></h2>
                        <p class="text-secondary"><?php echo $gambar->DeskripsiFoto; ?></p>
                        <p class="fw-lighter text-body-tertiary tanggal"><?php echo $gambar->TanggalUnggah; ?></p>
                        <div class="row g-3">
                            <!-- Tombol Like -->
                            <div class="col-md-4 align-items-center">
                                <form id="likeForm" action="<?php echo base_url('likefoto/tambah_like/'.$gambar->FotoID); ?>" method="post">
                                    <div class="d-flex align-items-center">
                                        <div class="me-0">
                                            <button type="submit" class="btn"><img id="likeButton" src="<?php echo base_url('assets/'); ?>img/liked.png" alt="Like" width="30" height="35" style="cursor:pointer;"></button>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-secondary" id="likeCount"><?php echo $jumlah_like; ?> likes</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Tombol Komentar -->
                            <div class="col-md-5 align-items-center">
                                <form id="commentForm" action="" method="post">
                                    <div class="d-flex align-items-center">
                                        <div class="me-0">
                                            <button type="submit" class="btn"><img id="commentButton" src="<?php echo base_url('assets/'); ?>img/komen.png" alt="Comment" width="30" height="35" style="cursor:pointer;"></button>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-secondary" id="commentCount"><?php echo $jumlah_komen; ?> komentar</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <!-- <div class="card-header py-1">
                        <p class="m-0 text-secondary">Komentar</p>
                    </div> -->
                        <div class="card p-3">
                            <ul>
                                <?php foreach($komentar as $k): ?>
                                <li><strong><?php echo $k->namaLengkap; ?> :  </strong> <?php echo $k->IsiKomentar; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 MT-1">
                        <form action="<?php echo base_url('foto/tambah_komentar/'.$gambar->FotoID); ?>" method="post">
                            <div class="input-group">
                                <textarea class="form-control" id="komentar" name="komentar" rows="1" placeholder="Tulis komentar"></textarea>
                                <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
        
        
</div>
    
<script>
    // Menangkap klik pada gambar lalu mengirimkan permintaan POST
    document.getElementById('likeButton').addEventListener('click', function() {
        // Mencari form dengan id 'likeForm'
        var form = document.getElementById('likeForm');
        
        // Mengirimkan form secara otomatis saat gambar diklik
        form.submit();
    });
</script>

