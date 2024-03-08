<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header" data-background-color="blue">
                <a href="<?php echo base_url($this->session->userdata('level') . '/page/index') ?>" class="logo">
                    <img src="<?php echo base_url() ?>/assets/img/logo.png" style="width: 100%; height:45px" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <h3 class="text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Sistem Penjaminan Mutu - <?php echo $this->session->userdata('instansi_singkat') ?></h3>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="<?php echo base_url() ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="<?php echo base_url() ?>/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4><?php echo $this->session->userdata('nama') ?></h4>
                                                <p class="text-muted"><?php echo $this->session->userdata('jabatan') ?></p>
                                                <!-- <a href="<?php echo base_url($this->session->userdata('level') . '/page/profil') ?>" class="btn btn-xs btn-secondary btn-sm"><i class="fas fa-user-circle"></i> Profil</a> -->
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url($this->session->userdata('level') . '/page/bantuan') ?>"><i class="fas fa-info-circle"></i> Bantuan</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-arrow-circle-right"></i> Keluar</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <a data-toggle="dropdown" href="#" aria-expanded="false">
                            <span class="caret text-white"></span>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>