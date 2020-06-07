<?php
require ("assets/helpers/connection.php");
$data= mysqli_query($conn,"SELECT COUNT(v.id) AS jumlah,d.name FROM visited AS v JOIN districts AS d ON v.id_kecamatan=d.id GROUP BY d.name");
$pengunjung=mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(id) FROM detail_visited"));
$kecamatan = mysqli_query($conn,"SELECT COUNT(id_kecamatan) FROM visited GROUP BY (id_kecamatan)");
$jumlah_kecamatan = 0;
while (mysqli_fetch_assoc($kecamatan)){
    $jumlah_kecamatan++;
}
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<!--	<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="assets/css/icofont.min.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<title>Informasi Terkini</title>
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
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="informasi.php">Informasi</a></li>
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
								<li><a href="index.php">Home</a></li>
								<li class="active"><a href="informasi.php">Informasi</a></li>
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

	<!-- Page Header Section Start Here -->
	<section class="page-header">
		<div class="container">
			<div class="page-title">
				<h2>Informasi Terkini Penyebaran Corona Kabupaten Jember</h2>
			</div>
		</div>
	</section>
	<!-- Page Header Section Ending Here -->

	<!-- corona count section start here -->
	<section class="corona-count-section pt-0 padding-tb">
		<div class="container">
			<div class="corona-wrap">
				<div class="corona-count-top">
					<div class="row justify-content-center align-items-center">
						<div class="col-xl-3 col-md-6 col-12">
							<h5>Total terdata : </h5>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="corona-item">
								<div class="corona-inner">
									<div class="corona-thumb">
										<img src="assets/images/corona/01.png" alt="corona">
									</div>
									<div class="corona-content">
										<h3 class="count-number"><?= $pengunjung["COUNT(id)"]; ?></h3>
										<p>Pelaku Perjalanan</p>
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
										<h3 class="count-number"><?= $jumlah_kecamatan; ?></h3>
										<p>Jumlah Kecamatan</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="countcorona">
					<div class="countcorona-area">
						<table id="example" class="table table-striped table-bordered text-center">
							<thead>
								<tr>
									<th>Kecamatan</th>
									<th>Jumlah Pendatang</th>
								</tr>
							</thead>
                            <tfoot>
                            <tr>
                                <th>Kecamatan</th>
                                <th>Jumlah Pendatang</th>
                            </tr>
                            </tfoot>
							<tbody>
                            <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                                <tr>
                                    <td><?= $row["name"] ?></td>
                                    <td><?= $row["jumlah"] ?></td>
                                </tr>
                            <?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- corona count section ending here -->

	<!-- Footer Section Start Here -->
	<footer style="background-image: url(assets/css/bg-image/bg-3.jpg);">
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


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <scrip src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></scrip>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/functions.js"></script>

	<script>
		$(document).ready(function () {
			$("#example").DataTable();
		});
	</script>
</body>

</html>