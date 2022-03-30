<?php
session_start();
include('./config/conn.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $str_query = "SELECT * FROM user WHERE username='" . $username . "' AND password='" . $password . "'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);

    if($data){
        $_SESSION['nik'] = $data['nik'];
        $_SESSION['fullname'] = $data['nama_depan'] . " " . $data['nama_tengah'] . " " . $data['nama_belakang'];
        header("Location: home.php");
    }
    else{
        $_SESSION['msg'] = 'Username/Password salah';
        header("Location: login.php");
    }
}
