<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-secondary{
          background-color: #B19570;
        }
        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 16px;
        }

        .photo-item {
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .photo-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }

        .bg-footer{
            background-color: #252525;
        }

        .home-button{
            position: fixed;
            bottom: 30px;
            right: 20px;
            z-index: 1000;
        }

    </style>
</head>
<body>

<div id="carouselExampleIndicators" class="container carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="<?php echo base_url('album/tambah'); ?>"><img src="<?php echo base_url('assets/'); ?>img/slider3.png" class="d-block w-100" alt="Foto 3"></a>
    </div>
    <div class="carousel-item">
      <a href="<?php echo base_url('foto/rank_foto'); ?>"><img src="<?php echo base_url('assets/'); ?>img/slider1.png" class="d-block w-100" alt="Foto 1"></a>
    </div>
    <div class="carousel-item">
      <a href="<?php echo base_url('user/user_rank'); ?>"><img src="<?php echo base_url('assets/'); ?>img/slider2.png" class="d-block w-100" alt="Foto 2"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container mt-5">
    <div class="photo-grid">
        <?php foreach ($gambar as $g): ?>
            <?php if ($g != '.' && $g != '..'): ?>
                <div class="photo-item">
                    <a href="<?php echo base_url('foto/detail/'.$g->FotoID); ?>">
                        <img src="<?php echo base_url('uploads/' . $g->LokasiFile); ?>" alt="<?php echo $g->JudulFoto; ?>">
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<!-- <a href="#" class="btn btn-secondary back-button"></a> -->
<a href="#" class="btn btn-secondary home-button"><i class="fa-solid fa-caret-up"></i></a>


<!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
