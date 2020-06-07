<?php
$con = mysqli_connect("localhost","root","","covidkunjunganjember");

function insertPendataan($data){
    global $con;
    $nik = htmlspecialchars($data['nik']);
    $nama_pengunjung = htmlspecialchars($data['name']);
    $no_hp = $data['phone'];
    $umur = $data['age'];
    $jenis_kelamin =$data['gender'];
    $distric_visitor = $data['kecamatan'];
    $alamat_lengkap = htmlspecialchars($data['alamat']);
    $visited_name = $data['visited_name'];
    $firstdate = $data['visited_datefirst'];
    $lastdate = $data['visited_datelast'];
    $visited_district = $data['kecamatan_visited'];
    $visited_address = htmlspecialchars($data['visited_address']);
    $query = "INSERT INTO detail_visited VALUES ('','$firstdate','$lastdate')";
    mysqli_query($con,$query);
    $id_detail = mysqli_fetch_assoc(mysqli_query($con,"SELECT id FROM detail_visited ORDER BY id DESC LIMIT 1"));
    $id_detail = (int)$id_detail['id'];
    $query="INSERT INTO person VALUES ('','$nik','$nama_pengunjung','$no_hp',$umur,'$jenis_kelamin',$distric_visitor,'$alamat_lengkap',$id_detail)";
    mysqli_query($con,$query);
    $query="INSERT INTO visited VALUES ('','$visited_name',$visited_district,'$visited_address',$id_detail)";
    mysqli_query($con,$query);

    return mysqli_affected_rows($con);
}