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
          <a href="<?= base_url();?>">STIP</a>
        </h1>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="<?= base_url()?>">Beranda</a></li>
            <li class="drop-down">
              <a href="#">Tentang Kami</a>
              <ul>
                <li><a href="<?= base_url()?>sejarah">Sejarah</a></li>
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

    <section class="section-detail-news">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="news-grid-txt">
              <span>Berita Stip</span>
              <h2>
              <?= $news[0]['title']?>
              </h2>
              <ul>
                <li>
                  <i class="icofont-calendar" aria-hidden="true"></i> <?=$this->libs->ymdhis2dMonthy($news[0]['created_at'])?>
                </li>
                <li>
                  <i class="icofont-ui-user" aria-hidden="true"></i> <?= $news[0]['modify']?>
                </li>
                <li><i class="icofont-eye" aria-hidden="true"></i> <?=$news[0]['hit']?></li>
              </ul>
            </div>
            <div class="post-sharing text-center">
              <ul class="list-inline">
                <li>
                  <button
                    onClick="window.open('http://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.developphp.com%2Fvideo%2FJavaScript%2FTrigger-CSS-Transitions-to-Control-Animations','sharer','toolbar=0,status=0,width=580,height=400');"
                    title="Share on Facebook"
                    class="fb-button btn"
                  >
                    <i class="icofont-facebook"></i>
                    Share on Facebook
                  </button>
                </li>
                <li>
                  <button
                    onClick="window.open('http://www.twitter.com/intent/tweet?url=https%3A%2F%2Fwww.developphp.com%2Fvideo%2FJavaScript%2FTrigger-CSS-Transitions-to-Control-Animations&amp;text=JavaScript - Trigger CSS Transitions to Control Animations','tweety','toolbar=0,status=0,width=550,height=450');"
                    title="Tweet this"
                    class="tw-button btn"
                  >
                    <i class="icofont-twitter"></i>
                    <span class="down-mobile">Tweet on Twitter</span>
                  </button>
                </li>
                <li>
                  <button
                    onClick="window.location='mailto:?subject=JavaScript - Trigger CSS Transitions to Control Animations&body=Hi, I thought you might like to see this: %0D%0Ahttps://www.developphp.com/video/JavaScript/Trigger-CSS-Transitions-to-Control-Animations';"
                    title="Send this to an email contact"
                    class="gp-button btn"
                  >
                    <i class="icofont-email"></i> Gmail
                  </button>
                </li>
              </ul>
            </div>
            <!-- end post-sharing -->
            <div class="single-post-media pt-5">
              <img src="frontend/images/image3.jpg" alt="" class="img-fluid" />
            </div>
            <!-- end media -->
            <div class="blog-content">
             
              <!-- end pp -->

              <img
                src="<?= $news[0]['foto']?>"
                alt=""
                class="img-fluid img-fullwidth"
              />

              <div class="pp">
              <?= $news[0]['description']?>
              </div>
              <!-- end pp -->
            </div>
            <!-- end content -->
            <hr class="invis" />

            <div class="custombox clearfix">
              <h4 class="small-title">0 Comments</h4>
              <div class="row">
                <div class="col-lg-12">
                  <div class="comments-list">
                    
                  <div class="media">
                      <a class="media-left" href="#">
                        <img
                          src="frontend/images/2.png"
                          alt=""
                          class="rounded-circle"
                        />
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading user_name">
                          Amanda Martines <small>5 days ago</small>
                        </h4>
                        <p>
                          Exercitation photo booth stumptown tote bag Banksy,
                          elit small batch freegan sed. Craft beer elit seitan
                          exercitation, photo booth et 8-bit kale chips proident
                          chillwave deep v laborum. Aliquip veniam delectus,
                          Marfa eiusmod Pinterest in do umami readymade swag.
                          Selfies iPhone Kickstarter, drinking vinegar jean.
                        </p>
                        <a href="#" class="btn btn-primary btn-sm">Reply</a>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- end col -->
              </div>
              <!-- end row -->
            </div>
            <!-- end custom-box -->

            <hr class="invis" />

            <div class="custombox clearfix">
              <h4 class="small-title">Leave a Reply</h4>
              <div class="row">
                <div class="col-lg-12">
                  <form class="form-wrapper">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Your name"
                    />
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Email address"
                    />
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Website"
                    />
                    <textarea
                      class="form-control"
                      placeholder="Your comment"
                    ></textarea>
                    <button type="submit" class="btn btn-primary">
                      Submit Comment
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
