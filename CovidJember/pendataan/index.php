<?php
require("connection.php");
$sql_provinsi = mysqli_query($con,"SELECT * FROM provinces ORDER BY name ASC");
$kecamatannya = mysqli_query($con,"SELECT  * FROM districts WHERE regency_id =3509 ORDER BY name ASC");
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

    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/icofont.min.css">
    <link rel="stylesheet" href="../assets/css/lightcase.css">
    <link rel="stylesheet" href="../assets/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <style>
        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>
    <title>Pendataan</title>
</head>

<body>
<!-- Mobile Menu Start Here -->
<div class="mobile-menu">
    <nav class="mobile-header">
        <div class="header-logo">
            <a href="../index.php"><img src="../assets/icons/01.png" alt="logo"></a>
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
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../informasi.php">Informasi</a></li>
                    <li class="active"><a href="#">Pendaftaran</a></li>
                    <li><a href="../assets/files/HOTLINE%20PUSKESMAS%20CONVID-19.pdf">Hotline</a></li>
                    <li><a href="../assets/files/Manual%20Book%20-%20Deteksi%20Dini%20Covid-19.pdf">Buku Panduan</a></li>
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
                    <a href="../index.php"><img src="../assets/icons/02.png" alt="logo"></a>
                </div>
                <div class="main-area">
                    <div class="main-menu">
                        <ul class="lab-ul">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../informasi.php">Informasi</a></li>
                            <li><a href="../assets/files/HOTLINE%20PUSKESMAS%20CONVID-19.pdf">Hotline</a></li>
                            <li><a href="../assets/files/Manual%20Book%20-%20Deteksi%20Dini%20Covid-19.pdf">Buku Panduan</a></li>
                        </ul>
                    </div>
                    <div class="header-btn">
                        <a href="#" class="lab-btn style-2"><span>Ingin pergi ke-Jember ?</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop menu ending here -->

<!-- Page Header Section Start Here -->
<section class="page-header">
    <div class="container">
        <div class="page-title">
            <h2>Datakan diri anda sebelum berkunjung</h2>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- FORM section start here -->
<section class="corona-count-section pt-0 padding-tb">
    <div class="container">
        <div class="corona-wrap">
            <div class="corona-count-top">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-3 col-md-6 col-12">
                        <h5>Pendataan</h5>
                    </div>
                </div>
            </div>
            <div class="corona-count-bottom">
                <form class="col-md-8 offset-md-2" action="insert.php" method="post" id="form_pelaku_perjalanan">
                    <div id="form-section">
                        <div class="row mb-1">
                            <div class="col-md-1">
                                <h2 class="icofont-user-alt-4" ></h2>
                            </div>
                            <div class="col-md-11">
                                <h5 class="font-weight-bold text-secondary">Data Pribadi</h5>
                                <p>Merupakan data isian yang dibutuhkan untuk pendataan, pastikan data yang anda isikan valid, dan data yang anda isikan tidak akan disebarluaskan.</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik" class="col-sm-3 col-form-label">NIK <i class="text-danger">*</i></label>
                            <div class="col-sm-9">
                                <input type="text" id="nik" name="nik" placeholder="Masukkan NIK" class="form-control" onkeypress="return isNumber(event);"
                                       maxlength="16" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Nama Lengkap <i class="text-danger">*</i></label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">No Hp <i class="text-danger">*</i></label>
                            <div class="col-sm-9">
                                <input type="tel" id="phone" name="phone" placeholder="Masukkan No HP"
                                       pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required class="form-control">
                                <small id="emailHelp" class="form-text text-muted" style="margin-top: -5px">Format : 0856-1234-1234</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-sm-3 col-form-label">Umur <i class="text-danger">*</i></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="age" id="age" placeholder="Masukkan Umur" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin <i class="text-danger">*</i></label>
                            <div class="col-sm-4">
                                <select class="form-control" style="height: 35px;" id="gender" name="gender" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xl-4">
                                    <label for="provinsi">Provinsi <i
                                                class="text-danger">*</i></label>
                                    <select name="provinsi" id="provinsi" class="form-control" required>
                                        <option></option>
                                        <?php  while($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)): ?>
                                            <option value="<?= $rs_provinsi['id'] ?>"><?= $rs_provinsi['name'] ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                    <img src="asset/img/loading.gif" width="35" id="load1" style="display:none;" />
                                </div>
                                <div class="col-xl-4">
                                    <label for="kota">Kab/Kota <i
                                                class="text-danger">*</i></label>
                                    <select name="kota" id="kota" class="form-control" required>
                                        <option></option>
                                    </select>
                                    <img src="asset/img/loading.gif" width="35" id="load2  " style="display:none;" />
                                </div>
                                <div class="col-xl-4">
                                    <label for="kecamatan">Kecamatan <i
                                                class="text-danger">*</i></label>
                                    <select class="form-control" name="kecamatan" id="kecamatan" required>
                                        <option></option>
                                    </select>
                                    <img src="asset/img/loading.gif" width="35" id="load3" style="display:none;" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Lengkap <i class="text-danger">*</i></label>
                            <textarea class="form-control" rows="3" id="alamat" name="alamat" required></textarea>
                        </div>
                        <!--                Alamat        yang dikunjungi-->
                        <div class="row mb-3 mt-5">
                            <div class="col-md-1">
                                <h2 class="icofont-ui-map"></h2>
                            </div>
                            <div class="col-md-11">
                                <h5 class="font-weight-bold text-secondary">Kunjungan</h5>
                                <p>Merupakan data orang dan alamat yang anda kunjungi, berserta dengan perkiraan tanggal anda berkunjung di Kabupaten Jember</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="visited_name">Masukkan Nama Lengkap yang dikunjungi <i class="text-danger">*</i></label>
                            <input type="text" name="visited_name" id="visited_name" class="form-control"
                                   placeholder="Nama lengkap yang dikunjungi" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="visited_datefirst">Tanggal berkunjung <i
                                                class="text-danger">*</i></label>
                                    <input type="date" class="form-control" name="visited_datefirst"
                                           id="visited_datefirst" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="visited_datefirst">Tanggal kembali</label>
                                    <input type="date" class="form-control" name="visited_datelast"
                                           id="visited_datelast">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <fieldset disabled>
                                            <label for="provinsi_visited">Provinsi <i
                                                        class="text-danger">*</i></label>
                                            <select id="provinsi_visited" class="form-control" name="provinsi_visited">
                                                <option value="35">JAWA TIMUR</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-4">
                                        <fieldset disabled>
                                            <label for="kota_visited">Kab/Kota <i
                                                        class="text-danger">*</i></label>
                                            <select name="kota_visited" id="kota_visited" class="form-control">
                                                <option value="3509">KAB JEMBER</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="kecamatan_visited">Kecamatan <i
                                                    class="text-danger">*</i></label>
                                        <select name="kecamatan_visited" id="kecamatan_visited" class="form-control" required>
                                            <option value=""selected disabled>Pilih Kecamatan</option>
                                            <?php  while($rs_kecamatan= mysqli_fetch_assoc($kecamatannya)): ?>
                                                <option value="<?= $rs_kecamatan['id'] ?>"><?= $rs_kecamatan['name'] ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="visited_address">Alamat yang dikunjungi<i
                                        class="text-danger">*</i></label>
                            <textarea name="visited_address" id="visited_address" rows="3" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <em class="text-danger" style="font-size: small;">Kolom dengan tanda * harus diisi</em>
                        </div>
                    </div>
                    <div id="panel">
                        <div class="row mb-3 mt-5">
                            <div class="col-md-1">
                                <h2 class="icofont-question-circle"></h2>
                            </div>
                            <div class="col-md-11">
                                <h5 class="font-weight-bold text-secondary">Pertanyaan kesehatan</h5>
                                <p>Pertanyaan sederhana untuk mengecek kondisi kesehatan anda</p>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item text-center">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="../assets/images/service/01.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5>Apakah anda pilek?</h5>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4 offset-2">
                                                    <select name="flu" id="flu" class="form-control" required style="width: auto">
                                                        <option value=""selected disabled>Ya/Tidak</option>
                                                        <option value="Y" >Ya</option>
                                                        <option value="N" >Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item text-center">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="../assets/images/service/02.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5>Apakah anda demam?</h5>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4 offset-2">
                                                    <select name="demam" id="demam" class="form-control" required style="width: auto">
                                                        <option value=""selected disabled>Ya/Tidak</option>
                                                        <option value="Y" >Ya</option>
                                                        <option value="N" >Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item text-center">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="../assets/images/service/01.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5>Apakah anda batuk?</h5>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4 offset-2">
                                                    <select name="batuk" id="batuk" class="form-control" required style="width: auto">
                                                        <option value=""selected disabled>Ya/Tidak</option>
                                                        <option value="Y" >Ya</option>
                                                        <option value="N" >Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item text-center">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="../assets/images/service/06.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5>Apakah anda merasakan sakit tenggorokan?</h5>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4 offset-2">
                                                    <select name="sakit_tenggorokan" id="sakit_tenggorokan" class="form-control" required style="width: auto">
                                                        <option value=""selected disabled>Ya/Tidak</option>
                                                        <option value="Y" >Ya</option>
                                                        <option value="N" >Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item text-center">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="../assets/images/service/04.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5>Apakah anda mengalami sesak nafas?</h5>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4 offset-2">
                                                    <select name="sesak_nafas" id="sesak_nafas" class="form-control" required style="width: auto">
                                                        <option value=""selected disabled>Ya/Tidak</option>
                                                        <option value="Y" >Ya</option>
                                                        <option value="N" >Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mt-5">
                            <div class="col-md-1">
                                <h2 class="icofont-exclamation-tringle"></h2>
                            </div>
                            <div class="col-md-11">
                                <p>Dengan ini saya menyatakan, bahwa bersedia melakukan karantina mandiri selama 14  hari , serta akan melaporkan kondisi kesehatan selama masa karantina mandiri kepada Puskesmas domisi melalui nomor hotline Puskesmas.</p>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <select name="karantina" id="karantina" class="form-control" required style="width: auto">
                                                <option value=""selected disabled>Ya/Tidak</option>
                                                <option value="Y" >Ya</option>
                                                <option value="N" >Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-info" id="flip2" type="button">BACK</button>
                            </div>
<!--                            <div class="col align-self-end"></div>-->
                            <button class="btn btn-primary" name="submit" id="submit" type="submit">SUBMIT</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col offset-9">
                        <button class="btn btn-success" id="flip">NEXT</button>
                    </div>
                </div>
<!--                <div class="row">-->
<!--                    <div class="col offset-2">-->
<!--                        <button class="btn btn-info" id="flip2">BACK</button>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</section>
<!-- FORM section ending here -->

<!-- Footer Section Start Here -->
<footer style="background-image: url(../assets/css/bg-image/bg-3.jpg);">
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


<!--    <script src="assets/js/jquery.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<!--    <script src="assets/js/bootstrap.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="../assets/js/lightcase.js"></script>
<script src="../assets/js/isotope.pkgd.min.js"></script>
<!--    <script src="assets/js/swiper.min.js"></script>-->
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script src="../assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/functions.js"></script>
<script src="../assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
<script src="../assets/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
<script src="app.js"></script>
<script>
    $(document).ready(function(){
        $("#panel").hide();
        $("#flip2").hide();
        $("#flip").click(function(){
            $("#form-section").slideUp(1000);
            $("#flip").hide();
            $("#panel").slideDown(2000).show();
            $("#flip2").show();
        });
        $("#flip2").click(function () {
            $("#flip2").hide();
            $("#panel").slideUp(1000);
            $("#flip").show();
            $("#form-section").slideDown(2000);
        })
    })
</script>
</body>

</html>