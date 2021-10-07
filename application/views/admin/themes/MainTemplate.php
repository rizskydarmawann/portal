<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->config->item('applicationName')?></title>
    <link rel="stylesheet" href="<?= base_url()?>assets/backend/vendor/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/backend/css/sb-admin-2.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
                    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-code"></i>
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
   <a class="nav-link pb-0" href="<?= base_url('admin/dashboard')?>">
   <i class="fas fa-fw fa-paperclip"></i>
    <span>Link Terkait</span></a>  
 </li>

 <li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/dashboard')?>">
   <i class="fas fa-fw fa-newspaper"></i>
    <span>News</span></a>  
 </li>

<hr class="sidebar-divider mt-3">


<div class="sidebar-heading">
    menu
</div>

<li class="nav-item active">
<li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/dashboard')?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>     
 </li>
 <li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/dashboard')?>">
    <i class="fas fa-fw fa-sliders-h"></i>
    <span>Slide Show</span></a>  
 </li>

 <li class="nav-item">
   <a class="nav-link pb-0" href="<?= base_url('admin/dashboard')?>">
   <i class="fas fa-fw fa-paperclip"></i>
    <span>Link Terkait</span></a>  
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
                                        src="<?= base_url()?>assets/backend/img/avatar2.png" />
                                </a>
                             
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <!-- <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        My Profile
                                    </a> -->
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <a class="dropdown-item" href="<?= base_url('auth/logout')?>" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                </nav>

                <?=isset($content)?$content:''?> 
    
          
                
     <!-- Footer -->
   <footer class="sticky-footer bg-white">
       <div class="container my-auto">
           <div class="copyright text-center my-auto">
               <span>Copyright &copy; <?=$this->config->item('applicationName')?> <?= date('Y')?></span>
           </div>
       </div>
   </footer>
   <!-- End of Footer -->
   </div>
   <!-- End of Content Wrapper -->
   </div>
   <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
       <i class="fas fa-angle-up"></i>
   </a>

  
   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                   </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.
               </div>
               <div class="modal-footer">
                   <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                   <a class="btn btn-primary" href="<?= base_url('admin/logout')?>">Logout</a>
               </div>
           </div>
       </div>
   </div>


   <!-- Bootstrap core JavaScript-->
   <script src="<?= base_url()?>assets/backend/vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url()?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="<?= base_url()?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>
    
   <!-- Custom scripts for all pages-->
   <script src="<?= base_url()?>assets/backend/js/sb-admin-2.min.js"></script>

   
   

<script src="<?= base_url()?>assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- <script src="<?= base_url()?>assets/backend/js/demo/datatables-demo.js"></script> -->
<script>
$(document).ready(function() {
  $('#dataTable').DataTable();
});
</script>

</body>

</html>