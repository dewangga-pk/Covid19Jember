<?php
require_once ("helpers/connection.php");
$id = $_POST['id'];
if (($_POST['Nama'])!='' && ($_POST['NIK'])!='') {
    $nama =$_POST['Nama'];$nik = $_POST['NIK'];
    if(($_POST['telp'])!='' && ($_POST['umur'])!=''){
        $telp = $_POST['telp'];$umur = $_POST['umur'];
        if (($_POST['jenis_kelamin'])!='' && ($_POST['kecamatan'])!=''){
            $gender = $_POST['jenis_kelamin'];$kecamatan = $_POST['kecamatan'];
            if (($_POST['alamat_lengkap'])!=''){
                $alamat = $_POST['alamat_lengkap'];
                $query = "UPDATE person SET NIK ='$nik', nama ='$nama', telp ='$telp', age = $umur, jenis_kelamin ='$gender', id_kecamatan = $kecamatan, alamat_lengkap ='$alamat' WHERE id=$id";
                $result = mysqli_query($conn,$query);
                echo "<script> alert('Berhasil di Update');window.location.replace('pengunjung.php'); </script>";

            }else{
                echo "<script> alert('Alamat lengkap kosong / salah');window.location.replace('edit_pengunjung.php?id=$id'); </script>";
                die();
            }
        }else{
            echo "<script> alert('Jenis kelamin atau daerah belum dipilih');window.location.replace('edit_pengunjung.php?id=$id'); </script>";
            die();
        }
    }else{
        echo "<script> alert('No telp atau umur nya tidak benar');window.location.replace('edit_pengunjung.php?id=$id'); </script>";
        die();
    }
}else{
    echo "<script> alert('Nama atau NIK nya tidak benar');window.location.replace('edit_pengunjung.php?id=$id'); </script>";
    die();
}
