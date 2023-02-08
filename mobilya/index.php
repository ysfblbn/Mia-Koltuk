<?php include 'sistem/baglan.php' ?>
<?php
$anasayfa = $db->prepare("SELECT * FROM  anasayfa");
$anasayfa->execute();
$anasayfaCek = $anasayfa->fetch(PDO::FETCH_ASSOC);

$hakkimizda = $db->prepare("SELECT * FROM  hakkimizda");
$hakkimizda->execute();
$hakkimizdaCek = $hakkimizda->fetch(PDO::FETCH_ASSOC);

$urunler = $db->prepare("SELECT * FROM  urunler");
$urunler->execute();
$urunlerCek = $urunler->fetch(PDO::FETCH_ASSOC);

$memnun = $db->prepare("SELECT * FROM  memnun");
$memnun->execute();
$memnunCek = $memnun->fetch(PDO::FETCH_ASSOC);

$iletisim = $db->prepare("SELECT * FROM  iletisim");
$iletisim->execute();
$iletisimCek = $iletisim->fetch(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title><?php echo $anasayfaCek["anasayfaTitle"]; ?></title>
  <!--
DREAM PULSE
https://templatemo.com/tm-536-dream-pulse
-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="slick/slick.css" />
  <link rel="stylesheet" href="slick/slick-theme.css" />
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/templatemo-dream-pulse.css" />
</head>

<body>
  <main class="container-fluid">
    <div class="row">
      <nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="tm-sidebar-sticky">
          <div class="tm-brand-box">
            <div class="tm-double-border-1">
              <div class="tm-double-border-2">
                <h1 class="tm-brand text-uppercase"><?= $anasayfaCek["anasayfaFirmaAd"] ?></h1>
              </div>
            </div>
          </div>

          <ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
            <li class="nav-item">
              <a href="#intro" class="nav-link active">
                <span class="d-inline-block mr-3">Anasayfa</span>
                <span class="d-inline-block tm-white-rect"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">
                <span class="d-inline-block mr-3">Hakkımızda</span>
                <span class="d-inline-block tm-white-rect"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#work" class="nav-link">
                <span class="d-inline-block mr-3">Ürünlerimiz</span>
                <span class="d-inline-block tm-white-rect"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#clients" class="nav-link">
                <span class="d-inline-block mr-3">MEMNUNİYET</span>
                <span class="d-inline-block tm-white-rect"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#talk" class="nav-link">
                <span class="d-inline-block mr-3">İLETİŞİM</span>
                <span class="d-inline-block tm-white-rect"></span>
              </a>
            </li>
          </ul>
          <ul class="nav flex-row tm-social-links">
            <li class="nav-item">
              <a href="https://facebook.com" class="nav-link tm-social-link">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com" class="nav-link tm-social-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://linkedin.com" class="nav-link tm-social-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
          <footer class="text-center text-white small">
            <p class="mb--0 mb-2">Copyright 2022 Dream Pulse</p>

          </footer>
        </div>
      </nav>
      <!-- Sidebar Bİtişi -->
      <main role="main" class="ml-sm-auto col-12">
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/<?= $anasayfaCek["anasayfaArkaPlan"] ?>">
          <div class="tm-section-wrap">
            <section id="intro" class="tm-section">
              <div class="tm-bg-white-transparent tm-intro">
                <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary"><?= $anasayfaCek["anasayfaBaslik"]  ?></h2>
                <p class="tm-color-gray">
                  <b> <?= $anasayfaCek["anasayfaYazi"] ?></b>
                </p>
                <p class="mb-0 tm-color-gray">

                </p>
              </div>
            </section>
          </div>
        </div>

        <div class="tm-section-wrap bg-white">
          <section id="about" class="row tm-section">
            <div class="col-xl-6">
              <div class="tm-section-half">
                <div><i class="fas fa-6x fa-balance-scale mb-5 tm-section-icon"></i></div>
                <h2 class="tm-section-title tm-color-primary mb-5">Hakkımızda</h2>
                <p class="mb-5">
                  <?= $hakkimizdaCek["hakkimizdaYazi"] ?>
                </p>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="tm-section-half">
                <div><i class="far fa-6x fa-building mb-5 tm-section-icon"></i></div>
                <h2 class="tm-section-title tm-color-primary mb-5">Firma Profilimiz </h2>
                <p class="mb-5">
                  <?= $hakkimizdaCek["hakkimizdaFirmaYazi"] ?> </p>

              </div>
            </div>
          </section>
        </div>

        <div class="tm-section-wrap bg-white">
          <section id="work" class="row tm-section">
            <div class="col-12">
              <div class="w-100 tm-double-border-1 tm-border-gray">
                <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                  <div class="tm-gallery-wrap">
                    <h2 class="tm-color-primary tm-section-title mb-4 ml-2">Ürünlerimiz</h2>
                    <div class="tm-gallery">
                      <?php
                      $urunler = $db->prepare("SELECT * FROM  urunler");
                      $urunler->execute();
                      $urunListele = $urunler->fetchAll(PDO::FETCH_ASSOC);
                      foreach ($urunListele as $row) { ?>

                        <div class="tm-gallery-item">
                          <figure class="effect-bubba">
                            <img src="img/gallery/<?= $row["urunFoto"] ?>" alt="Our Work Image" class="img-fluid">
                            <figcaption>
                              <h2><span><?= $row["urunAd"] ?><br></span> Koltuk</h2>
                              <p>Ürünü İncelemek İçin Tıklayın</p>
                              <a href="img/gallery/large/<?= $row["urunFoto"] ?>"></a>
                            </figcaption>
                          </figure>
                        </div>
                      <?php  } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>


        <div class="tm-section-wrap bg-white">
          <section id="clients" class="row tm-section">
            <div class="col-12 tm-section-pad">
              <div class="tm-flex-item-left">
                <div class="tm-w-80">
                  <h2 class="tm-color-primary tm-section-title mb-4">Memnuniyet</h2>
                  <p class="mb-5">
                    <?= $anasayfaCek["memnunYazi"] ?>
                  </p>
                </div>
                <div class="row tm-clients-images">
                <?php
                      $memnun = $db->prepare("SELECT * FROM  memnun");
                      $memnun->execute();
                      $memnunListele = $memnun->fetchAll(PDO::FETCH_ASSOC);
                      foreach ($memnunListele as $row) { ?>

                
                  <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                    <a href="<?= $row["memnunUrl"] ?>">
                      <img src="img/<?= $row["memnunFoto"] ?>" alt="Client Image" class="img-fluid tm-client-img" />
                    </a>
                  </div>
               
              <?php } ?>
              </div>
                
                </div>
            </div>
          </section>
        </div>

        <div class="tm-section-wrap bg-white">
          <section id="talk" class="row tm-section">
            <div class="col-xl-6 mb-5">
              <div class="tm-double-border-1 tm-border-gray">
                <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                  <h2 class="tm-color-primary tm-section-title mb-4">İletişim</h2>
                  <p class="mb-4">
                    <?= $iletisimCek["iletisimAdres"] ?>
                  </p>
                  <p class="mb-3">
                    Tel: <?= $iletisimCek["iletisimTel"] ?> <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 mb-5">
              <div class="tm-contact-form-wrap">
                <form method="POST" action="admin/template/islem.php" class="tm-contact-form"  >
                  <div class="form-group">
                    <input type="text" id="contact_name" name="iletisimFormAd" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Ad Soyadınız" required="" />
                  </div>
                  <div class="form-group">
                    <input type="email" id="contact_email" name="iletisimFormMail" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="E-mail" required="" />
                  </div>

                  <div class="form-group">
                    <textarea rows="4" id="contact_message" name="iletisimFormMesaj" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Mesajınız..." required=""></textarea>
                  </div>

                  <div class="form-group mb-0">
                    <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary" name="formGonder">
                      Gönder
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-scripts.js"></script>
</body>

</html>