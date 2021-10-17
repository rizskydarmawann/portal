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
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/vendor/owl/owl.carousel.min.css" />
    <!-- <link rel="stylesheet" href="frontend/css/owl.theme.default.css" /> -->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/bootstrap-grid.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/style.css" />
    <link href="<?=base_url()?>assets/frontend/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/frontend/vendor/venobox/venobox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/responsive.css" />
    <style>
    #panorama {
        width: 100%;
        height: 500px;
    }
    </style>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
  </head>
  <body>
    <!-- header -->
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12 section-header">
            <img src="<?=base_url()?>assets/frontend/images/logo.png" alt="LOGO" />
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
          <a href="index.html">STIP</a>
        </h1>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="<?=base_url()?>">Beranda</a></li>
            <li class="drop-down">
              <a href="">Tentang Kami</a>
              <ul>
                <li><a href="<?=base_url()?>sejarah">Sejarah</a></li>
                <li><a href="<?= base_url()?>vm">Visi, Misi dan Tujuan</a></li>
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
                <li><a href="<?=base_url()?>galery">Galeri</a></li>
                <li><a href="<?=base_url()?>testimoni">Testimoni</a></li>
                <li><a href="<?=base_url()?>animo">Animo & Daya Tampung</a></li>
                <li><a href="<?=base_url()?>biaya">Biaya Pendidikan</a></li>
                <li><a href="<?=base_url()?>jadwal">Jadwal Pendaftaran</a></li>
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
            <li><a href="<?=base_url()?>kebijakan">Kebijakan Privasi</a></li>
            <li><a href="<?=base_url()?>kontak">Kontak</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- navbar -->
    <!-- corousel -->

    <div class="bd-example">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleCaptions"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <?php

foreach ($slide as $row):
    if ($row['id_slide'] == 5) {

        ?>
	          <div class="carousel-item active">
	            <img
	              src="<?php echo $row['foto']; ?>"
	              class="d-block w-100"
	              alt="..."
	            />
	            <div class="carousel-caption d-none d-md-block">
	              <h5><?php echo $row['judul']; ?></h5>
	            </div>
	          </div>
	          <?php
    } else {
        ?>
	<div class="carousel-item item">
	            <img
	              src="<?php echo $row['foto']; ?>"
	              class="d-block w-100"
	              alt="..."
	            />
	            <div class="carousel-caption d-none d-md-block">
	              <h5><?php echo $row['judul']; ?></h5>
	            </div>
	          </div>
	  <?php
    }

endforeach

?>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- Corusel akhir -->

    <!-- Panorama -->
   
    <section class="section-link p-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col-12">
            <h5>IMAGE 360</h5>
          </div>
        </div>
       
        <div class="row">
          <div class="col-12">
            <div id="panorama"></div>
          </div>
        </div>
      </div>
    </section>


    <!-- end of panorama -->
    <!-- link terkait -->


    
    <section class="section-link p-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col-12">
            <h5>LINK TERKAIT</h5>
          </div>
        </div>
       
        <div class="row">
          <div class="col-12">
            <div id="link" class="owl-carousel">
            <?php foreach ($link as $row):
        ?>
              <div class="figure-img"><a target="_blank" href="<?php echo $row['url']; ?>">
                <img
                  src="<?php echo $row['foto_link']; ?>"
                  class="figure-img img-fluid"
                />
                </a>
              </div>
              <?php
            endforeach
            ?>
   
    
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- link terkait -->
    <!-- news -->
    <section class="section-news bg-light p-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col-12">
            <h5>NEWS</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div id="news-slider" class="owl-carousel">

            <?php 
            $jml = count($news);
            for($i=0;$i<$jml;$i++){
              $tlh1 = $this->libs->ymdhis2dMonthy($news[$i]['created_at']);
              $tanggal = date('d');
              $bulan = $this->libs->Month(date('m'));
            ?>

              <div class="news-grid">
                <div class="news-grid-image">
                  <img src="<?=$news[$i]['foto']?>" />
                  <div class="news-grid-box">
                    <h1><?= $tanggal?></h1>
                    <p><?= $bulan?></p>
                  </div>
                </div>
                <div class="news-grid-txt">
                  <span> Berita Stip </span>
                  <h2><?=$news[$i]['title']?></h2>
                  <ul>
                    <li>
                      <i class="icofont-calendar" aria-hidden="true"></i> <?=$this->libs->ymdhis2dMonthy($news[$i]['created_at'])?>
                    </li>
                    <li><i class="icofont-eye" aria-hidden="true"></i> <?=$news[$i]['hit']?></li>
                    <li>
                      <i class="icofont-ui-user" aria-hidden="true"></i> <?=$news[$i]['modify']?>
                    </li>
                  </ul>
                  <div class="news-over">
                  <?=$news[$i]['description'];?>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="<?= base_url('detailberita/show/'.$news[$i]['id_news']);?>">Read More...</a>
                </div>
              </div>
              <?php } ?>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <a href="<?= base_url('berita')?>" class="btn btn-primary"
              >Selengkapnya <i class="icofont-arrow-right"></i
            ></a>
          </div>
        </div>
      </div>
    </section>
    <!-- NEWS -->
    <!-- GALERY -->
    <section class="section-galery p-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col-12">
            <h5>GALERY</h5>
          </div>
        </div>


        <div class="row row-galery">
          <?php 
          $j = count($gallery);
          for($k=0;$k<$j;$k++){
          ?>
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?=$gallery[$k]['foto']?>')"
                >
                  <a
                    href="<?=$gallery[$k]['foto']?>"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  >
                  </a>
                </div>
              </div>
            </div>
          </div>
            <?php }  ?>
        </div>


      </div>
      <div class="row pt-5">
        <div class="col-12 d-flex justify-content-center">
          <a href="<?= base_url('galery');?>" class="btn btn-primary"
            >Selengkapnya <i class="icofont-arrow-right"></i
          ></a>
        </div>
      </div>
    </section>

    <!-- GALERY -->
    <footer class="section-footer mb-4 border-top">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-lg-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href="<?= base_url('sejarah'); ?>"> Sejarah </a>
                  </li>
                  <li>
                    <a href=" <?= base_url('vm'); ?> "> Visi Misi </a>
                  </li>
                  <li>
                    <a href=" <?= base_url('biaya'); ?> "> Biaya Pendidikan </a>
                  </li>
                  <li>
                    <a href=" <?= base_url('jadwal'); ?> "> Jadwal Pendaftaran </a>
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

    <script src="<?=base_url()?>assets/frontend/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="frontend/js/jquery.min.js"></script> -->
    <!-- <script src="frontend/js/popper.min.js"></script> -->
    <script src="<?=base_url()?>assets/frontend/js/bootstrap.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/main.js"></script>
    <script src="<?=base_url()?>assets/frontend/vendor/venobox/venobox.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/vendor/owl/owl.carousel.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $("#news-slider").owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          autoplay: true,
          autoplayTimeout: 4000,
          dotd: false,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 2,
            },
            1000: {
              items: 3,
            },
            1400: {
              items: 4,
            },
          },
        });
      });
    </script>
    <script type="text/javascript">
      $("#link").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        dotd: false,

        responsive: {
          0: {
            items: 2,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 5,
          },
          1400: {
            items: 5,
          },
        },
      });
    </script>
    <script>
    pannellum.viewer('panorama', {
        "type": "equirectangular",
        "panorama": "https://pannellum.org/images/alma.jpg"
    });
    </script>
  </body>
</html>
