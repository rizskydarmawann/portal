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
          <a href="index.html">STIP</a>
        </h1>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="<?= base_url()?>">Beranda</a></li>
            <li class="drop-down">
              <a href="">Tentang Kami</a>
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
          <div class="carousel-item active">
            <img
              src="<?= base_url()?>assets/frontend/images/img1.jpeg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="<?= base_url()?>assets/frontend/images/img2.jpeg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="<?= base_url()?>assets/frontend/images/img3.JPG"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
              </p>
            </div>
          </div>
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
              <div class="figure-img">
                <img
                  src="<?= base_url()?>assets/frontend/images/image1.jpg"
                  class="figure-img img-fluid"
                />
              </div>

              <div class="figure-img">
                <img
                  src="<?= base_url()?>assets/frontend/images/image2.jpg"
                  class="figure-img img-fluid"
                />
              </div>
              <div class="figure-img">
                <img
                  src="<?= base_url()?>assets/frontend/images/image3.jpg"
                  class="figure-img img-fluid"
                />
              </div>
              <div class="figure-img">
                <img
                  src="<?= base_url()?>assets/frontend/images/image4.jpg"
                  class="figure-img img-fluid"
                />
              </div>
              <div class="figure-img">
                <img
                  src="<?= base_url()?>assets/frontend/images/image5.jpg"
                  class="figure-img img-fluid"
                />
              </div>
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
              <div class="news-grid">
                <div class="news-grid-image">
                  <img src="<?= base_url()?>assets/frontend/images/image3.jpg" />
                  <div class="news-grid-box">
                    <h1>19</h1>
                    <p>Sep</p>
                  </div>
                </div>
                <div class="news-grid-txt">
                  <span>Finacne</span>
                  <h2>Heading Will Be Here</h2>
                  <ul>
                    <li>
                      <i class="icofont-calendar" aria-hidden="true"></i> Sep
                      19, 2020
                    </li>
                    <li><i class="icofont-eye" aria-hidden="true"></i> 2232</li>
                    <li>
                      <i class="icofont-ui-user" aria-hidden="true"></i> Michael
                      Ramores Raserva
                    </li>
                  </ul>
                  <div class="news-over">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur, adipisicing elit.
                      Consequuntur aspernatur reprehenderit velit est
                      voluptatum, voluptas amet quasi dicta consectetur.
                    </p>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="detail-berita.html">Read More...</a>
                </div>
              </div>
              <div class="news-grid">
                <div class="news-grid-image">
                  <img src="<?= base_url()?>assets/frontend/images/image2.jpg" />
                  <div class="news-grid-box">
                    <h1>19</h1>
                    <p>Sep</p>
                  </div>
                </div>
                <div class="news-grid-txt">
                  <span>Finacne</span>
                  <h2>Heading Will Be Here</h2>
                  <ul>
                    <li>
                      <i class="icofont-calendar" aria-hidden="true"></i> Sep
                      19, 2020
                    </li>
                    <li><i class="icofont-eye" aria-hidden="true"></i> 2232</li>
                    <li>
                      <i class="icofont-ui-user" aria-hidden="true"></i> Michael
                      Ramores Raserva
                    </li>
                  </ul>
                  <div class="news-over">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur, adipisicing elit.
                      Consequuntur aspernatur reprehenderit velit est
                      voluptatum, voluptas amet quasi dicta consectetur.
                    </p>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="detail-berita.html">Read More...</a>
                </div>
              </div>
              <div class="news-grid">
                <div class="news-grid-image">
                  <img src="<?= base_url()?>assets/frontend/images/image3.jpg" />
                  <div class="news-grid-box">
                    <h1>19</h1>
                    <p>Sep</p>
                  </div>
                </div>
                <div class="news-grid-txt">
                  <span>Finacne</span>
                  <h2>Heading Will Be Here</h2>
                  <ul>
                    <li>
                      <i class="icofont-calendar" aria-hidden="true"></i> Sep
                      19, 2020
                    </li>
                    <li><i class="icofont-eye" aria-hidden="true"></i> 2232</li>
                    <li>
                      <i class="icofont-ui-user" aria-hidden="true"></i> Michael
                      Ramores Raserva
                    </li>
                  </ul>
                  <div class="news-over">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur, adipisicing elit.
                      Consequuntur aspernatur reprehenderit velit est
                      voluptatum, voluptas amet quasi dicta consectetur.
                    </p>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="detail-berita.html">Read More...</a>
                </div>
              </div>
              <div class="news-grid">
                <div class="news-grid-image">
                  <img src="<?= base_url()?>assets/frontend/images/image5.jpg" />
                  <div class="news-grid-box">
                    <h1>19</h1>
                    <p>Sep</p>
                  </div>
                </div>
                <div class="news-grid-txt">
                  <span>Finacne</span>
                  <h2>Heading Will Be Here</h2>
                  <ul>
                    <li>
                      <i class="icofont-calendar" aria-hidden="true"></i> Sep
                      19, 2020
                    </li>
                    <li><i class="icofont-eye" aria-hidden="true"></i> 2232</li>
                    <li>
                      <i class="icofont-ui-user" aria-hidden="true"></i> Michael
                      Ramores Raserva
                    </li>
                  </ul>
                  <div class="news-over">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur, adipisicing elit.
                      Consequuntur aspernatur reprehenderit velit est
                      voluptatum, voluptas amet quasi dicta consectetur.
                    </p>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="detail-berita.html">Read More...</a>
                </div>
              </div>
              <div class="news-grid">
                <div class="news-grid-image">
                  <img src="<?= base_url()?>assets/frontend/images/image4.jpg" />
                  <div class="news-grid-box">
                    <h1>19</h1>
                    <p>Sep</p>
                  </div>
                </div>
                <div class="news-grid-txt">
                  <span>Finacne</span>
                  <h2>Heading Will Be Here</h2>
                  <ul>
                    <li>
                      <i class="icofont-calendar" aria-hidden="true"></i> Sep
                      19, 2020
                    </li>
                    <li><i class="icofont-eye" aria-hidden="true"></i> 2232</li>
                    <li>
                      <i class="icofont-ui-user" aria-hidden="true"></i> Michael
                      Ramores Raserva
                    </li>
                  </ul>
                  <div class="news-over">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur, adipisicing elit.
                      Consequuntur aspernatur reprehenderit velit est
                      voluptatum, voluptas amet quasi dicta consectetur.
                    </p>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="detail-berita.html">Read More...</a>
                </div>
              </div>
              <div class="news-grid">
                <div class="news-grid-image">
                  <img src="<?= base_url()?>assets/frontend/images/image5.jpg" />
                  <div class="news-grid-box">
                    <h1>19</h1>
                    <p>Sep</p>
                  </div>
                </div>
                <div class="news-grid-txt">
                  <span>Finacne</span>
                  <h2>Heading Will Be Here</h2>
                  <ul>
                    <li>
                      <i class="icofont-calendar" aria-hidden="true"></i> Sep
                      19, 2020
                    </li>
                    <li><i class="icofont-eye" aria-hidden="true"></i> 2232</li>
                    <li>
                      <i class="icofont-ui-user" aria-hidden="true"></i> Michael
                      Ramores Raserva
                    </li>
                  </ul>
                  <div class="news-over">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur, adipisicing elit.
                      Consequuntur aspernatur reprehenderit velit est
                      voluptatum, voluptas amet quasi dicta consectetur.
                    </p>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="detail-berita.html">Read More...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <a href="berita.html" class="btn btn-primary"
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
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?= base_url()?>assets/frontend/images/image1.jpg')"
                >
                  <a
                    href="<?= base_url()?>assets/frontend/images/image1.jpg"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  >
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?= base_url()?>assets/frontend/images/image5.jpg')"
                >
                  <a
                    href="<?= base_url()?>assets/frontend/images/image5.jpg"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?= base_url()?>assets/frontend/images/image2.jpg')"
                >
                  <a
                    href="<?= base_url()?>assets/frontend/images/image2.jpg"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?= base_url()?>assets/frontend/images/image5.jpg')"
                >
                  <a
                    href="<?= base_url()?>assets/frontend/images/image5.jpg"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?= base_url()?>assets/frontend/images/image3.jpg')"
                >
                  <a
                    href="<?= base_url()?>assets/frontend/images/image3.jpg"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?= base_url()?>assets/frontend/images/image4.jpg')"
                >
                  <a
                    href="<?= base_url()?>assets/frontend/images/image4.jpg"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?= base_url()?>assets/frontend/images/image4.jpg')"
                >
                  <a
                    href="<?= base_url()?>assets/frontend/images/image4.jpg"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?= base_url()?>assets/frontend/images/image5.jpg')"
                >
                  <a
                    href="<?= base_url()?>assets/frontend/images/image5.jpg"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-2">
            <div class="component-news d-block">
              <div class="news-thumbnail">
                <div
                  class="news-image"
                  style="background-image: url('<?= base_url()?>assets/frontend/images/image4.jpg')"
                >
                  <a
                    href="<?= base_url()?>assets/frontend/images/image4.jpg"
                    data-gall="Gallery"
                    class="venobox d-flex justify-content-center"
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-12 d-flex justify-content-center">
          <a href="galery.html" class="btn btn-primary"
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
  </body>
</html>