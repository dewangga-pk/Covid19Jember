<?php
require("./helpers/connection.php");
function getPengunjung(){
    global $conn;
    $query = "SELECT t1.NIKP,t1.namaP,t1.telpP,t1.kotaP,t2.kecamatanV,t3.tanggal_dikunjungi,t2.namaV,t3.tanggal_kembali,t1.idP,t2.idV FROM 
(SELECT p.id as idP,p.NIK as NIKP,p.telp as telpP,p.nama as namaP,r.name as kotaP,p.id_detail as id_detail FROM person AS p JOIN districts AS d ON p.id_kecamatan=d.id JOIN regencies AS r ON d.regency_id=r.id) as t1,
(SELECT v.id as idV,v.nama as namaV,d.name as kecamatanV,v.id_detail as id_detail FROM visited as v JOIN districts AS d ON v.id_kecamatan=d.id) as t2,
(SELECT id as idDv,tanggal_dikunjungi,tanggal_kembali FROM detail_visited) as t3
WHERE t1.id_detail = t2.id_detail AND (t1.id_detail=t3.idDv AND t2.id_detail=t3.idDv)";
    $result = mysqli_query($conn,$query);
    return $result;
}
function getData($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    return $result;
}
function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $pass = mysqli_real_escape_string($conn,$data["password1"]);
    $pass2 = mysqli_real_escape_string($conn,$data["password2"]);
    $nama = htmlspecialchars($data['nama']);

    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username yang anda daftarkan sudah terpakai');
              </script>";
        return false;
    }

    if ($pass !== $pass2 ){
        echo "<script>
                alert('Password tidak sesuai');
              </script>";
        return false;
    }

    $pass = password_hash($pass,PASSWORD_DEFAULT);

    mysqli_query($conn,"INSERT INTO user VALUES ('','$username','$pass','$nama')");

    return mysqli_affected_rows($conn);

}
function getUser($id){
    global $conn;
    $result = mysqli_fetch_assoc(mysqli_query($conn,"SELECT nama FROM user WHERE id=$id"));
    return $result;
}