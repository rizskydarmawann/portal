<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Megister :: STIP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/vendor/owl/owl.carousel.min.css" />
    <!-- <link rel="stylesheet" href="frontend/css/owl.theme.default.css" /> -->
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/bootstrap-grid.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/style.css" />
    <link href="<?= base_url()?>assets/frontend/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="<?= base_url()?>assets/frontend/vendor/venobox/venobox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/responsive.css" />
  </head>
  <body>
    <!-- header -->
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12 section-header">
            <img src="<?= base_url()?>assets/frontend/images/logo.png" alt="LOGO" />
            <h1>MAGISTER</h1>
            <h1>SEKOLAH TINGGGI ILMU PELAYARAN</h1>
          </div>
        </div>
      </div>
    </header>
    <!-- header -->
    <!-- navbar -->
    <div class="menus">
      <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto navbar-brand">
          <a href="<?= base_url()?>">STIP</a>
        </h1>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="<?= base_url()?>">Beranda</a></li>
            <li class="drop-down">
              <a href="<?= base_url()?>tentang">Tentang Kami</a>
              <ul>
                <li><a href="<?= base_url()?>sejarah">Sejarah</a></li>
                <li><a href="<?= base_url()?>vm">Visi dan Misi</a></li>
                <!-- <li class="drop-down">
                  <a href="#">Deep Drop Down</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
            <li class="drop-down">
              <a href="">Akademik</a>
              <ul>
                <li><a href="<?= base_url()?>galery">Galeri</a></li>
                <li><a href="<?= base_url()?>testimoni">Testimoni</a></li>
                <li><a href="<?= base_url()?>animo">Animo & Daya Tampung</a></li>
                <li><a href="<?= base_url()?>biaya">Biaya Pendidikan</a></li>
                <li><a href="<?= base_url()?>jadwal">Jadwal Pendaftaran</a></li>
                <!-- <li class="drop-down">
                  <a href="#">Deep Drop Down</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
            <li><a href="<?= base_url()?>kebijakan">Kebijakan Privasi</a></li>
            <li><a href="<?= base_url()?>kontak">Kontak</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- navbar -->
    <!-- content -->
    <section class="testimoni-menu">
      <div class="container">
        <div class="section-title">
          <span>Testimoni</span>
          <h2>Testimoni</h2>
        </div>
        <div class="row">
          
        <?php 
          $j = count($testimoni);
          for($k=0;$k<$j;$k++){
          ?>
          

          <div class="col-lg-6 testimoni-col">
            <div class="testimonial-item">
              <img src="<?= $testimoni[$k]['foto'];?>" class="testimonial-img" alt="">
              <h3><?= $testimoni[$k]['name'];?></h3>
              <h4> <?= $testimoni[$k]['email'];?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?= $testimoni[$k]['description'];?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <?php } ?>
      </div>
    </section>
    <!-- content -->

    <footer class="section-footer mb-4 border-top">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-lg-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href=" "> Hukum</a>
                  </li>
                  <li>
                    <a href=" ">Travel</a>
                  </li>
                  <li>
                    <a href=" ">Property</a>
                  </li>
                  <li>
                    <a href=" ">Komveksi</a>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-lg-3">
                <h5>GET CONNECTED</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href=" ">Ciputat Timur</a>
                  </li>
                  <li>
                    <a href=" ">Tangerang Selatan</a>
                  </li>
                  <li>
                    <a href=" ">0851-5758-xxxx</a>
                  </li>
                  <li>
                    <a href=" ">darmawan@gmail.com</a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>SOCIAL MEDIA</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href=" "
                      ><i class="icofont-instagram"></i> stipjakarta</a
                    >
                  </li>
                  <li>
                    <a href=" "><i class="icofont-facebook"></i> stipjakarta</a>
                  </li>
                  <li>
                    <a href=" "><i class="icofont-twitter"> stipjakarta</i></a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>LOCATION</h5>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6887123064917!2d106.75158631431097!3d-6.304567863454402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef103911afdd%3A0xaa8cbd97d3e66313!2sHANASTI%20%26%20REKAN!5e0!3m2!1sid!2sid!4v1594569142660!5m2!1sid!2sid "
                  frameborder="0 "
                  style="border: 0; width: 100%; height: 100px"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-4 pb-1 border-top">
        <div class="row justify-content-center">
          <div class="col-auto text-gray-500 font-weight-light">
            2021 Copyright Project • All rights reserved • Made in Jakarta
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script src="<?= base_url()?>assets/frontend/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="frontend/js/jquery.min.js"></script> -->
    <!-- <script src="frontend/js/popper.min.js"></script> -->
    <script src="<?= base_url()?>assets/frontend/js/bootstrap.js"></script>
    <script src="<?= base_url()?>assets/frontend/js/main.js"></script>
    <script src="<?= base_url()?>assets/frontend/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url()?>assets/frontend/vendor/owl/owl.carousel.min.js"></script>
  </body>
</html>
