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
    <?php include APPPATH."/views/menu.php";?>

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
                    onClick="window.open('http://www.facebook.com/sharer/sharer.php?u=<?= base_url('detailberita/show/'.$this->uri->segment(3))?>','sharer','toolbar=0,status=0,width=580,height=400');"
                    title="Share on Facebook"
                    class="fb-button btn"
                  >
                    <i class="icofont-facebook"></i>
                    Share on Facebook
                  </button>
                </li>
                <li>
                  <button
                    onClick="window.open('http://www.twitter.com/intent/tweet?url=<?= base_url('detailberita/show/'.$this->uri->segment(3))?> &amp;text=STIP Jakarta','tweety','toolbar=0,status=0,width=550,height=450');"
                    title="Tweet this"
                    class="tw-button btn"
                  >
                    <i class="icofont-twitter"></i>
                    <span class="down-mobile">Tweet on Twitter</span>
                  </button>
                </li>
                <li>
                  <button
                    onClick="window.location='mailto:?subject=<?=$news[0]['title']?>&body=Saya Tertarik Artikel Ini';"
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
    <?php include APPPATH."/views/footer.php";?>
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
