<?php
require("connection.php");
//Data Pengunjung
$nik = $_POST['nik'];
$nama_pengunjung = $_POST['name'];
$no_hp = $_POST['phone'];
$umur = $_POST['age'];
$jenis_kelamin =$_POST['gender'];
$distric_visitor = $_POST['kecamatan'];
$alamat_lengkap = $_POST['alamat'];
////Data yang dikunjungi
$visited_name = $_POST['visited_name'];
$firstdate = $_POST['visited_datefirst'];
if($_POST['visited_datelast'] == '0000-00-00'){
    $lastdate=null;
}else{
    $lastdate = $_POST['visited_datelast'];
}
$visited_district = $_POST['kecamatan_visited'];
$visited_address = $_POST['visited_address'];

//DataKesehatan
$flu = $_POST['flu'];
$demam = $_POST['demam'];
$batuk = $_POST['batuk'];
$sakit_tenggorokan = $_POST['sakit_tenggorokan'];
$sesak_nafas = $_POST['sesak_nafas'];
$karantina = $_POST['karantina'];

//SQl syntax insert detail visited
$sql = "INSERT INTO detail_visited
    VALUES ('','$firstdate','$lastdate')";
if (mysqli_query($con, $sql)) {
    echo "New record detail_visited created successfully";
    $id_detail = mysqli_fetch_assoc(mysqli_query($con,"SELECT id FROM detail_visited ORDER BY id DESC LIMIT 1"));
    $id_detail = (int)$id_detail['id'];
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    die();
}

$sql = "INSERT INTO kesehatan
    VALUES ('','$flu','$demam','$batuk','$sakit_tenggorokan','$sesak_nafas','$karantina')";
if (mysqli_query($con, $sql)) {
    echo "New record detail_visited created successfully";
    $id_kesehatan = mysqli_fetch_assoc(mysqli_query($con,"SELECT id FROM kesehatan ORDER BY id DESC LIMIT 1"));
    $id_kesehatan = (int)$id_kesehatan['id'];
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    die();
}

$sql = "INSERT INTO person 
VALUES ('','$nik','$nama_pengunjung','$no_hp',$umur,'$jenis_kelamin',$distric_visitor,'$alamat_lengkap',$id_detail,$id_kesehatan)";
if (mysqli_query($con, $sql)) {
    echo "New record person created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    die();
}

$sql = "INSERT INTO visited 
VALUES ('','$visited_name',$visited_district,'$visited_address',$id_detail)";
if (mysqli_query($con, $sql)) {
    echo "New record visited created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    die();
}

header("Location: ../pendataan/");
