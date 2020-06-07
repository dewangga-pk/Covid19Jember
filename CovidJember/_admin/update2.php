<?php
require_once ("helpers/connection.php");
$id = $_POST['id'];
if (($_POST['Nama'])!='' && ($_POST['kecamatan'])!='') {
    $nama =$_POST['Nama'];$kecamatan = $_POST['kecamatan'];
    if(($_POST['alamat_lengkap'])!=' '){
        $alamat = $_POST['alamat_lengkap'];
        $query = "UPDATE visited SET  nama ='$nama', id_kecamatan = $kecamatan, alamat_lengkap ='$alamat' WHERE id=$id";
        $result = mysqli_query($conn,$query);
        echo "<script> alert('Berhasil di Update');window.location.replace('dikunjungi.php'); </script>";

    }else{
        echo "<script> alert('Alamat lengkap kosong / salah');window.location.replace('edit_dikunjungi.php?id=$id'); </script>";
        die();
    }
}else{
    echo "<script> alert('Nama atau alamatnya nya tidak benar');window.location.replace('edit_dikunjungi.php?id=$id'); </script>";
    die();
}
