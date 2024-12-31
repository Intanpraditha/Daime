<style>
    .btn-secondary{
        background-color:#B19570;
    }
    .bg-sec{
        background-color:#E0CAAE;
    }
    .back-button {
        position: fixed;
        top: 100px;
        left: 20px;
        z-index: 1000; /* Memastikan tombol kembali di atas konten lain */
    }
    .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 16px;
        }

        .photo-item {
            overflow: hidden;
            border-radius: 8px;
        }

        .photo-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .album-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        
</style>

<div class="container mt-5">
    <a href="<?php echo base_url('dashboard/'); ?>" class="btn btn-secondary back-button"><i class="fa-solid fa-chevron-left"></i></a>
    <div class="card p-4">
        <div class="dropdown position-absolute end-0 me-4">
            <button class="btn btn-secondary dropdown-toggle p-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url('user'); ?>">admin <i class="fa-solid fa-user-tie"></i></a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">logout <i class="fa-solid fa-right-to-bracket"></i></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img class="shadow-sm rounded-circle ms-3" src="<?php echo base_url('uploads/') . $this->session->userdata('LokasiFoto'); ?>" width="190rem" height="190rem" > 
            </div>
            
            <div class="col-md-7">
                <h2> <?php echo $this->session->userdata('namaLengkap'); ?></h2>
                <h5 class="text-secondary"><?php echo $this->session->userdata('username'); ?></h5>
                <h6 class="fw-normal text-secondary"><?php echo $this->session->userdata('email'); ?></h6>
                <h6 class="fw-normal text-secondary"><?php echo $this->session->userdata('alamat'); ?></h6>
                <div class="row mt-4">
                    <div class="col-md-4 align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <img id="likeButton" src="<?php echo base_url('assets/'); ?>img/liked.png" alt="Like" width="30" height="35">
                            </div>
                            <div>
                                <span class="fw-bold text-secondary" id="likeCount"><?php echo $total_likes; ?> likes</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <img id="likeButton" src="<?php echo base_url('assets/'); ?>img/foto.png" alt="Like" width="40" height="35">
                            </div>
                            <div>
                                <span class="fw-bold text-secondary" id="likeCount"><?php echo $total_photos; ?> unggahan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-md-4 mt-4 ms-5">
        <button id="showAlbums" class="btn"><h5>album</h5></button>
        <button id="showPhotos" class="btn border-bottom border-4"><h5>foto</h5></button>
    </div> -->
    <div class="card mt-4 p-4">

        

        <!-- <div id="albumList" style="display: none;">
            <div class="photo-grid">
                <div class="album-item">
                    <a href="<?php echo base_url('album/tambah'); ?>" title="tambah album"><img src="<?php echo base_url('assets/'); ?>img/add-album.png" alt=""></a>
                    <div class="p-2 ms-5">
                        <span class="fw-bold"></span>
                    </div>
                </div>
                <?php foreach($album as $a): ?>
                    <div class="album-item">
                        <img src="<?php echo base_url('assets/'); ?>img/album.png" alt="">
                        <div class="p-2 ms-5">
                            <span class="fw-bold"><?php echo $a->NamaAlbum; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div> -->

        <!-- <div class="photo-item">
            <a href="<?php echo base_url('foto/tambah'); ?>" title="tambah album">
                <img src="<?php echo base_url('assets/'); ?>img/add-img.png" alt="">
            </a>
        </div> -->
        <div class="container">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle mb-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo base_url('album/tambah'); ?>">tambah album </a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('foto/tambah'); ?>">tambah foto </a></li>
                </ul>
            </div>
            <?php foreach ($album as $album): ?>
                <div class="bg-sec mx-auto p-3 rounded mb-3">
                    <h5 class="album-title text-white"><?php echo $album->NamaAlbum; ?></h3>
                </div>
                <div class="photo-grid mb-5">
                    <?php foreach ($photos as $photo): ?>
                        <?php if ($photo->AlbumID == $album->AlbumID): ?>
                            <div class="photo-item shadow-sm rounded-top">
                                <a href="<?php echo base_url('foto/detail/'.$photo->FotoID); ?>">
                                    <img src="<?php echo base_url('uploads/' . $photo->LokasiFile); ?>" alt="Photo">
                                </a>
                                <div class="p-2 ms-3">
                                    <span class="fw-medium"><?php echo $photo->JudulFoto; ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>


    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
