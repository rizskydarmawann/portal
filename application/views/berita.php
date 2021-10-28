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
    <!-- content -->
    <section class="section-galery news-menu">
      <div class="container">
        <div class="section-title">
          <span>News</span>
          <h2>News</h2>
        </div>
        <div class="row">
          

        <?php 
            $jml = count($news);
            for($i=0;$i<$jml;$i++){
              $tl = $this->libs->ymdhis2dMonthy($news[$i]['created_at']);
              $tanggal = explode(" ", $tl);
              $bulan = explode(" ", $tl);
              // print_r (explode(" ",$tlh1));
              // $bulan = $this->libs->Month(date('m'));
            ?>
            <div class="col-lg-6 col-md-6 col-sm-2">
              <div class="news-grid">
                <div class="news-grid-image">
                  <img src="<?=$news[$i]['foto']?>" />
                  <div class="news-grid-box">
                    <h1><?= $tanggal[0]?></h1>
                    <p><?= $bulan[1]?></p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>Berita Stip</span>
                <h2> <?= $news[$i]['title'];?> </h2>
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
                <?= $news[$i]['description'];?>
                </div>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url('detailberita/show/'.$news[$i]['id_news'])?>">Read More...</a>
              </div>
            </div>
          </div>
          <!-- </div> -->
        <?php } ?>
        </div>
        
      </div>
    </section>
    <!-- content -->

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
