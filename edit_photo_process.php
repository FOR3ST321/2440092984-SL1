<?php
session_start();
include('./config/conn.php');
// print_r($_POST);

//profile
$namaFile = $_FILES['profil']['name'];
$tmp_name = $_FILES['profil']['tmp_name'];
$dirUpload = "assets/profilepic/";
$terupload = move_uploaded_file($tmp_name, $dirUpload . $namaFile);

$str_query = "UPDATE user SET profile_pic = '".$namaFile."' WHERE nik = '".$_SESSION['nik']."'";
$query = mysqli_query($connection, $str_query);

$_SESSION["msg"] = "Profile Berhasil Diubah!";


header("Location: ./profile.php");