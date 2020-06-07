<?php
require 'dep.php';
$content = getApi("https://api.covid19api.com/summary");
$result = json_decode($content,true);
$result = $result["Countries"][77];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Selamat Datang</title>
</head>

<body>
    <!-- Mobile Menu Start Here -->
    <div class="mobile-menu">
        <nav class="mobile-header">
            <div class="header-logo">
                <a href="index.php"><img src="assets/icons/01.png" alt="logo"></a>
            </div>
            <div class="header-bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <nav class="mobile-menu">
            <div class="mobile-menu-area">
                <div class="mobile-menu-area-inner">
                    <ul class="lab-ul">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="informasi.php">Informasi</a></li>
                        <li><a href="pendataan/index.php">Pendaftaran</a></li>
                        <li><a href="assets/files/HOTLINE%20PUSKESMAS%20CONVID-19.pdf">Hotline</a></li>
                        <li><a href="assets/files/Manual%20Book%20-%20Deteksi%20Dini%20Covid-19.pdf">Buku Panduan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Mobile Menu Ending Here -->

    <!-- desktop menu start here -->
    <header class="header-section transparent-header">
        <div class="header-area">
            <div class="container">
                <div class="primary-menu">
                    <div class="logo">
                        <a href="index.php"><img src="assets/icons/02.png" alt="logo"></a>
                    </div>
                    <div class="main-area">
                        <div class="main-menu">
                            <ul class="lab-ul">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="informasi.php">Informasi</a></li>
                                <li><a href="assets/files/HOTLINE%20PUSKESMAS%20CONVID-19.pdf">Hotline</a></li>
                                <li><a href="assets/files/Manual%20Book%20-%20Deteksi%20Dini%20Covid-19.pdf">Buku Panduan</a></li>
                            </ul>
                        </div>
                        <div class="header-btn">
                            <a href="pendataan/index.php" class="lab-btn style-2"><span>Ingin pergi ke-Jember ?</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- desktop menu ending here -->

    <!-- Banner Section start here -->
    <section class="banner-section home-2">
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-9 col-12">
                        <div class="content-part">
                            <div class="banner-content">
                                <span class="sub-title">Selamat Datang di</span>
                                <h2 class="banner-title-2">Portal Pendataan Pelaku Perjalanan Kabupaten Jember</h2>
                                <p>Melalui pendataan pelaku perjalanan ke Kabupaten Jember ini,anda turut berkontribusi
                                    untuk keselamatan diri keluarga dan orang-orang disekitar.</p>
                                <p>Untuk melakukan pendataan mandiri silahkan klik tombol lanjut</p>
                                <div class="button-group">
                                    <a href="pendataan/index.php" class="lab-btn"><span>Lanjut</span></a>
                                    <a href="informasi.php" class="lab-btn style-2"><span>Informasi Terkini</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section ending here -->

    <!-- Service Section Start Here -->
    <section class="service-section pt-0 home-2 padding-tb" style=" background: #f9fcff;">
        <div class="service-shape">
            <div class="shape shape-1">
                <img src="assets/images/service/shape/01.png" alt="service-shape">
            </div>
            <div class="shape shape-2">
                <img src="assets/images/service/shape/01.png" alt="service-shape">
            </div>
        </div>
        <div class="container">
            <div class="service-wrap">
                <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Gejala Virus Corona</h2>
                    <p>Kenali gejala-gejala seseorang yang terpapar virus corona, jika anda merasakan hal yang
                        sama Segeralah periksa kefasilitas kesehatan terdekat</p>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/01.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Batuk dan Bersin</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/02.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Demam</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/03.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Sakit Kepala Berat</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/04.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Sesak Napas</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/05.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Pusing</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/06.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Sakit Tenggorokan</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section Ending Here -->

    <!-- about section start here -->
    <section class="about-section style-2 bg-f9 padding-tb">
        <div class="about-shape">
            <img src="assets/images/about/shape/01.png" alt="about-shape">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center flex-row-reverse">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="about-thumb">
                        <img src="assets/images/about/02.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="about-content">
                        <div class="ab-title">
                            <span>Corona Virus</span>
                            <h3>Ketahui lebih lanjut tentang <i>Corona Virus</i> </h3>
                            <p>Virus Corona atau severe acute respiratory syndrome coronavirus2 (SARS-CoV-2) adalah
                                virus yang menyerang sistem pernapasan.</p>
                            <p>Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan
                                gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section start here -->

    <!-- about section start here -->
    <section class="about-section bg-white padding-tb">
        <div class="about-shape">
            <img src="assets/images/about/shape/01.png" alt="about-shape">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="about-thumb">
                        <img src="assets/images/about/01.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="about-content">
                        <div class="ab-title">
                            <span>Corona Virus</span>
                            <h3>Ketahui lebih lanjut tentang <i>Corona Virus</i> </h3>
                            <p>Saat ini belum ada vaksin untuk mencegah penyakit coronavirus (COVID-19).</p>
                            <p>Cara-cara pencegahan yang terbaik:</p>
                            <ul class="lab-ul">
                                <li>
                                    <div class="ab-thumb">
                                        <img src="assets/images/about/icon/01.jpg" alt="ab-thumb">
                                    </div>
                                    <div class="ab-content">
                                        <h6>Mencuci Tangan</h6>
                                        <p>Cuci tangan secara rutin dengan gel pembersih berbasis alkohol atau sabun dan
                                            bilas dengan air</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="ab-thumb">
                                        <img src="assets/images/about/icon/02.jpg" alt="ab-thumb">
                                    </div>
                                    <div class="ab-content">
                                        <h6>Menutup Hidung saat bersin</h6>
                                        <p>Tutup hidung dan mulut denan tisu atau batuk dan bersin pada bagian dalam
                                            siku</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="ab-thumb">
                                        <img src="assets/images/about/icon/04.jpg" alt="ab-thumb">
                                    </div>
                                    <div class="ab-content">
                                        <h6>Hindari Berinteraksi Fisik</h6>
                                        <p>Hindari interaksi fisik (1 meter atau 3 kaki) dengan siapa pun yang memiliki
                                            gejala batuk pilek atau flu</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section start here -->

    <!-- corona count section start here -->
    <section class="corona-count-section home-2 padding-tb">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <h2>Pandemi Corona di Indonesia</h2>
                <p>Dapatkan infor terbaru mengenai statistik wabah covid-19 di Indonesia</p>
            </div>
            <div class="corona-wrap">
                <div class="corona-count-top wow fadeInUp" data-wow-delay="0.4s">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="corona-item">
                                <div class="corona-inner">
                                    <div class="corona-content">
                                        <h4>Statistik Corona : </h4>
                                        <p>Terakhir Update : <?= substr($result["Date"],0,10) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="corona-item">
                                <div class="corona-inner">
                                    <div class="corona-thumb">
                                        <img src="assets/images/corona/01.png" alt="corona">
                                    </div>
                                    <div class="corona-content">
                                        <h3 class="count-number"><?= $result["TotalConfirmed"] ?></h3>
                                        <p>Positif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="corona-item">
                                <div class="corona-inner">
                                    <div class="corona-thumb">
                                        <img src="assets/images/corona/02.png" alt="corona">
                                    </div>
                                    <div class="corona-content">
                                        <h3 class="count-number"><?= $result["TotalRecovered"] ?></h3>
                                        <p>Sembuh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="corona-item">
                                <div class="corona-inner">
                                    <div class="corona-thumb">
                                        <img src="assets/images/corona/03.png" alt="corona">
                                    </div>
                                    <div class="corona-content">
                                        <h3 class="count-number"><?= $result["TotalDeaths"] ?></h3>
                                        <p>Meninggal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="corona-count-bottom wow fadeInUp" data-wow-delay="0.5s">
                    <div class="gmaps">
                        <img src="assets/images/map2.png" alt="map">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- corona count section ending here -->


    <!-- Footer Section Start Here -->
    <footer style="background-image: url(assets/css/bg-image/footer-bg-2.jpg);">
        <div class="footer-top padding-tb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-item first-set">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <h6>Tentang Covid-19</h6>
                                    </div>
                                    <div class="content">
                                        <p>Kami percaya kita semua bisa melalui rintangan ini bersama</p>
                                        <h6>Alamat :</h6>
                                        <p>Jl. Dewi Sartika No.54</p>
                                        <ul class="lab-ul">
                                            <li>
                                                <p><span>Email:</span>diskominfo@jemberkab.go.id</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-item">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <h6>Social Contact</h6>
                                    </div>
                                    <div class="content">
                                        <ul class="lab-ul">
                                            <li><a href="https://www.facebook.com/jemberkab/"><i
                                                        class="icofont-facebook"></i>Facebook</a></li>
                                            <li><a href="https://twitter.com/Humas_Jember"><i
                                                        class="icofont-twitter"></i>Twitter</a></li>
                                            <li><a href="https://www.instagram.com/humas_jember/"><i
                                                        class="icofont-instagram"></i>Instagram</a></li>
                                            <li><a href="https://www.youtube.com/user/Jemberkab"><i
                                                        class="icofont-youtube"></i>YouTube</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="section-wrapper">
                    <p>&copy; 2020 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ending Here -->

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>