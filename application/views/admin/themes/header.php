<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->config->item('applicationName')?></title>
    <link rel="stylesheet" href="<?= base_url()?>assets/backend/vendor/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/backend/css/sb-admin-2.min.css" />
    <!-- <link rel="stylesheet" href="<?= base_url()?>assets/backend/css/bootstrap.css" /> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
                    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <img src="<?= base_url('assets/frontend/images/logo.png')?>" width="100">
    </div>
    <div class="sidebar-brand-text mx-3"><?=$this->config->item('applicationName')?></div>
</a>
<!-- Divider -->
<hr class="sidebar-divider ">

<div class="sidebar-heading">
    Home
</div>

<li class="nav-item active">
<li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/dashboard')?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>     
 </li>
 <li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/slideshow')?>">
    <i class="fas fa-fw fa-sliders-h"></i>
    <span>Slide Show</span></a>  
 </li>

 <li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/link')?>">
   <i class="fas fa-fw fa-paperclip"></i>
    <span>Link Terkait</span></a>  
 </li>

 <li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/news')?>">
   <i class="fas fa-fw fa-newspaper"></i>
    <span>News</span></a>  
 </li>

 <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTentang"
        aria-expanded="true" aria-controls="collapseTentang">
        <i class="fas fa-fw fa-folder"></i>
        <span>Tentang Kami</span>
    </a>
    <div id="collapseTentang" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pages:</h6>
            <a class="collapse-item" href="<?= base_url('admin/edit_sejarah') ?>">Sejarah</a>
            <a class="collapse-item" href="<?= base_url('admin/edit_vm') ?>"> Visi Misi </a>
        </div>
    </div>
</li>



<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAkademik"
        aria-expanded="true" aria-controls="collapseAkademik">
        <i class="fas fa-fw fa-folder"></i>
        <span>Akademik</span>
    </a>
    <div id="collapseAkademik" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pages:</h6>
            <a class="collapse-item" href="<?= base_url('admin/gallery') ?>">Gallery</a>
            <a class="collapse-item" href="<?= base_url('admin/testimoni') ?>"> Testimoni </a>
            <a class="collapse-item" href="<?= base_url('admin/animo') ?>"> Animo & Daya Tampung</a>
            <a class="collapse-item" href="<?= base_url('admin/biaya') ?>"> Biaya Pendidikan</a>
            <a class="collapse-item" href="<?= base_url('admin/jadwal') ?>"> Jadwal </a>
        </div>
    </div>
</li>



<li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/edit_privasi')?>">
   <i class="fas fa-fw fa-info"></i>
    <span>Kebijakan Privasi</span></a>  
 </li>


 <li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/kontak')?>">
   <i class="fas fa-fw fa-envelope"></i>
    <span>Kontak</span></a>  
 </li>

 <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFooter"
        aria-expanded="true" aria-controls="collapseFooter">
        <i class="fas fa-fw fa-folder"></i>
        <span>Footer</span>
    </a>
    <div id="collapseFooter" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pages:</h6>
            <a class="collapse-item" href="<?= base_url('admin/feature') ?>">Feature</a>
            <a class="collapse-item" href="<?= base_url('admin/connected') ?>"> Connected </a>
            <a class="collapse-item" href="<?= base_url('admin/location') ?>"> Location</a>
        </div>
    </div>
</li>


<!-- 
 <li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/connected')?>">
   <i class="fas fa-fw fa-spinner"></i>
    <span>Connected</span></a>  
 </li> -->

 <li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/user')?>">
   <i class="fas fa-fw fa-user"></i>
    <span>User</span></a>  
 </li>


<hr class="sidebar-divider mt-3">

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/logout')?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">


<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$this->session->userdata('username')?></span>
                                    <img class="img-profile rounded-circle"
                                        src="<?=$this->session->userdata('foto')?>" />
                                </a>
                             
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?= base_url('admin/update_profile')?>">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('admin/logout')?>" >
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                </nav>