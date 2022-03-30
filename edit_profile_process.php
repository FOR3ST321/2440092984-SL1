<?php
session_start();
include('./config/conn.php');
// print_r($_POST);

$nik = $_POST['nik'];
$email = $_POST['email'];
$nama_depan = $_POST['nama_depan'];
$nama_tengah = $_POST['nama_tengah'];
$nama_belakang = $_POST['nama_belakang'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$warga_negara = $_POST['warga_negara'];
$alamat = $_POST['alamat'];
$kode_pos = $_POST['kode_pos'];
$no_hp = $_POST['no_hp'];
$str_query = "UPDATE user SET nik = '".$nik."', email = '".$email."', nama_depan = '".$nama_depan."', nama_tengah = '".$nama_tengah."', nama_belakang = '".$nama_belakang."', tanggal_lahir = '".$tanggal_lahir."', tempat_lahir = '".$tempat_lahir."', warga_negara = '".$warga_negara."', alamat = '".$alamat."', kode_pos = '".$kode_pos."', no_hp = '".$no_hp."' WHERE nik = '".$_SESSION['nik']."'";
$query = mysqli_query($connection, $str_query);

$_SESSION["msg"] = "Profile Berhasil Diubah!";



echo json_encode(array("location"=>"./profile.php"));
?>