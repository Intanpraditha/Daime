<style>
  .img-profile{
    height: 2rem;
    width: 2rem;
  }
  .text{
    color:#B19570;
  }
</style>


<nav class="navbar sticky-top navbar-expand-lg bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand text fw-bold " href="<?php echo base_url('dashboard/'); ?>">
      <img src="<?php echo base_url('assets/'); ?>img/logo-s.png" alt="Bootstrap" width="30" height="35" class="me-2">
      DAIME
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('dashboard/'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('album/'); ?>">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('foto/'); ?>">Foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('komentarfoto/'); ?>">Komentar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('likefoto/'); ?>">Like</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('user/'); ?>">User</a>
        </li> -->
        <a href="<?php echo base_url('user/profile'); ?>">
          <img class="shadow-sm img-profile rounded-circle" src="<?php echo base_url('uploads/') . $this->session->userdata('LokasiFoto'); ?>"> 
        </a>
      </ul>
  </div>
</nav>
