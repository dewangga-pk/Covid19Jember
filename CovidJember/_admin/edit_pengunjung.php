<?php
session_start();
if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit();
}
require("helpers/adminHelper.php");
$user = getUser($_SESSION['id']);
$id = $_GET['id'];
$identitas = mysqli_fetch_assoc(getData("SELECT * FROM person WHERE id=$id"));
$reg_id = mysqli_fetch_assoc(getData("SELECT regency_id FROM districts WHERE id={$identitas['id_kecamatan']}"));

$kec = getData("SELECT * FROM districts WHERE regency_id={$reg_id['regency_id']}");
$prov_id = mysqli_fetch_assoc(getData("SELECT province_id FROM regencies WHERE id={$reg_id['regency_id']}"));

$prov = getData("SELECT * FROM provinces");
$kot = getData("SELECT * FROM regencies WHERE province_id={$prov_id['province_id']}");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Detail Pengunjung</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Management
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pendataan Pengunjung</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Lihat Data berdasarkan:</h6>
                    <a class="collapse-item" href="pengunjung.php">Pengunjung</a>
                    <a class="collapse-item" href="dikunjungi.php">Dikunjungi</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama'] ?></span>
                            <img class="img-profile rounded-circle" src="https://3znvnpy5ek52a26m01me9p1t-wpengine.netdna-ssl.com/wp-content/uploads/2017/07/noimage_person.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-1 text-gray-800">Detail Informasi Pengunjung</h1>
                <p class="mb-4"></p>

                <!-- Content Row -->
                <div class="row">

                    <!-- Grow In Utility -->
                    <div class="col-lg-6">

                        <div class="card position-relative">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="m-0 font-weight-bold text-primary">Pengunjung</h6>
                                    </div>
                                    <div class="col-sm-1 offset-7">
                                        <a href="detail_pengunjung.php?id=<?= $id; ?>" class="btn btn-warning btn-circle"><i class="fas fa-backspace"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="small mb-3"></div>
                                <form action="update.php" method="post">
                                    <div class="form-group row">
                                        <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="NIK" name="NIK" value="<?= $identitas['NIK']; ?>" maxlength="16">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Nama" name="Nama" value="<?= $identitas['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-2 col-form-label">telp</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="telp" name="telp" value="<?= $identitas['telp']; ?>" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
                                            <small id="emailHelp" class="form-text text-muted">Format : 0856-1234-1234</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="umur" name="umur" value="<?= $identitas['age']; ?>" maxlength="3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <?php if($identitas['jenis_kelamin']=='L'){
                                                echo "<div class='custom-control custom-radio'>
                                                <input type='radio' id='customRadio1' name='jenis_kelamin' class='custom-control-input' value='L' checked>
                                                <label class=\"custom-control-label\" for=\"customRadio1\">Laki - laki</label>
                                            </div>
                                            <div class='custom-control custom-radio'>
                                                <input type='radio' id='customRadio2' name='jenis_kelamin' class='custom-control-input' value='P'>
                                                <label class='custom-control-label' for='customRadio2'>Perempuan</label>
                                            </div>";
                                            }else{
                                                echo "<div class='custom-control custom-radio'>
                                                <input type='radio' id='customRadio1' name='jenis_kelamin' class='custom-control-input' value='L'>
                                                <label class=\"custom-control-label\" for=\"customRadio1\">Laki - laki</label>
                                            </div>
                                            <div class='custom-control custom-radio'>
                                                <input type='radio' id='customRadio2' name='jenis_kelamin' class='custom-control-input' value='P' checked>
                                                <label class='custom-control-label' for='customRadio2'>Perempuan</label>
                                            </div>";
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                                        <div class="col-sm-6">
                                            <select name="provinsi" id="provinsi" class="custom-select custom-select-sm">
                                                <?php while($row = mysqli_fetch_assoc($prov)){
                                                    if ($row['id']==$prov_id['province_id']){
                                                        echo "<option value='". $row['id'] ."' selected>" . $row['name'] ."</option>";
                                                    }else{
                                                        echo "<option value='". $row['id'] ."'>" . $row['name'] ."</option>";
                                                    }
                                                }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kota" class="col-sm-2 col-form-label">Kota / Kabupaten</label>
                                        <div class="col-sm-6">
                                            <select name="kota" id="kota" class="custom-select custom-select-sm">
                                                <?php while($row = mysqli_fetch_assoc($kot)){
                                                    if ($row['id']==$reg_id['regency_id']){
                                                        echo "<option value='". $row['id'] ."' selected>" . $row['name'] ."</option>";
                                                    }else{
                                                        echo "<option value='". $row['id'] ."'>" . $row['name'] ."</option>";
                                                    }
                                                }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                        <div class="col-sm-6">
                                            <select name="kecamatan" id="kecamatan" class="custom-select custom-select-sm">
                                                <?php while($row = mysqli_fetch_assoc($kec)){
                                                    if ($row['id']==$identitas['id_kecamatan']){
                                                        echo "<option value='". $row['id'] ."' selected>" . $row['name'] ."</option>";
                                                    }else{
                                                        echo "<option value='". $row['id'] ."'>" . $row['name'] ."</option>";
                                                    }
                                                }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat_lengkap" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                                        <div class="col-sm-10">
                                            <textarea name="alamat_lengkap" id="alamat_lengkap" rows="3" class="form-control" required><?= $identitas['alamat_lengkap'];?></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?= $id;?>" name="id" id="id">
                                    <div class="form-group row">
                                        <div class="col-sm-1 offset-sm-10">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- Fade In Utility -->
                    <div class="col-lg-6">

                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Dewangga & Dyah , Fasilkom Unej 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="helpers/logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script src="app.js"></script>

</body>

</html>
