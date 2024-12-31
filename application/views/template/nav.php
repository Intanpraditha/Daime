<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
            <div class="d-flex align-items-center mt-3">
                <div>
                    <a href="<?php echo base_url('dashboard/'); ?>" class="navbar-brand ms-5 me-2">
                        <img src="<?php echo base_url('assets/'); ?>img/logo-s.png" width="30rem" height="35rem" alt="">
                    </a>
                </div>
                <div>
                    <h4 class="text-primary">Daime</h3>
                </div>
            </div>
                <div class="navbar-nav w-100 mt-4">
                    <a href="<?php echo base_url('dashboard/'); ?>" class="nav-item nav-link mb-3"><i class="fas fa-fw fa-home me-2"></i>Home</a>
                    <a href="<?php echo base_url('foto/'); ?>" class="nav-item nav-link mb-3"><i class="fas fa-fw fa-image me-2"></i>Foto</a>
                    <a href="<?php echo base_url('album/'); ?>" class="nav-item nav-link mb-3"><i class="fas fa-fw fa-book me-2"></i>Album</a>
                    <a href="<?php echo base_url('user/'); ?>" class="nav-item nav-link mb-3"><i class="fas fa-fw fa-user me-2"></i>User</a>
                    <hr class="ms-4">
                    <a href="<?php echo base_url('likefoto/'); ?>" class="nav-item nav-link mb-3"><i class="fas fa-fw fa-heart me-2"></i>Like</a>
                    <a href="<?php echo base_url('komentarfoto/'); ?>" class="nav-item nav-link mb-3"><i class="fas fa-fw fa-comment me-2"></i>Komentar</a>
                    <hr class="ms-4">
                    <a href="<?php echo base_url('Evaluasi/'); ?>" class="nav-item nav-link mb-3"><i class="fas fa-fw fa-comment me-2"></i>Evaluasi</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php echo $this->session->userdata('username'); ?></span>
                            <img class="rounded-circle me-lg-2" src="<?php echo base_url('uploads/') . $this->session->userdata('LokasiFoto'); ?>" alt="" style="width: 40px; height: 40px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="<?php echo base_url('login/logout'); ?>" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->