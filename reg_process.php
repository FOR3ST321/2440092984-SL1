<?php
session_start();
include('./config/conn.php');
// print_r($_POST);

//profile
$namaFile = $_FILES['profil']['name'];
$tmp_name = $_FILES['profil']['tmp_name'];
$dirUpload = "assets/profilepic/";
$terupload = move_uploaded_file($tmp_name, $dirUpload . $namaFile);

$nik = $_POST['nik'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password1']);
$nama_depan = $_POST['nama_depan'];
$nama_tengah = $_POST['nama_tengah'];
$nama_belakang = $_POST['nama_belakang'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$warga_negara = $_POST['warga_negara'];
$alamat = $_POST['alamat'];
$kode_pos = $_POST['kode_pos'];
$no_hp = $_POST['no_hp'];
$profil = $namaFile;

$str_query = "INSERT INTO user VALUE('".$nik."','".$email."','".$username."','".$password."','".$nama_depan."','".$nama_tengah."','".$nama_belakang."','".$tanggal_lahir."','".$tempat_lahir."','".$warga_negara."','".$alamat."','".$kode_pos."','".$no_hp."','".$profil."')";

try{
    $query = mysqli_query($connection, $str_query);
    $_SESSION["msg"] = "Register Berhasil";
    echo json_encode(array("location"=> "./login.php"));
} catch(Exception $e){
    $_SESSION["msg"] = "Register Gagal";
    echo json_encode(array("error"=> mysqli_error($connection)));
}




