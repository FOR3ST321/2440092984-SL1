<?php
    session_start();
        // echo "yo";
        print_r($_POST);

        //profile
        $namaFile = $_FILES['profil']['name'];
        $tmp_name = $_FILES['profil']['tmp_name'];
        $dirUpload = "assets/profilepic/";
        $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);

        $_SESSION["nama_depan"] = $_POST["nama_depan"];
        $_SESSION["nama_tengah"] = $_POST["nama_tengah"];
        $_SESSION["nama_belakang"] = $_POST["nama_belakang"];

        $_SESSION["tempat_lahir"] = $_POST["tempat_lahir"];
        $_SESSION["warga_negara"] = $_POST["warga_negara"];
        $_SESSION["alamat"] = $_POST["alamat"];
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["tanggal_lahir"] = $_POST["tanggal_lahir"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["kode_pos"] = $_POST["kode_pos"];
        $_SESSION["password"] = $_POST["password1"];
        $_SESSION["nik"] = $_POST["nik"];
        $_SESSION["no_hp"] = $_POST["no_hp"];
        $_SESSION["profil"] = $namaFile;

        $_SESSION["msg"] = "Register Berhasil!";

        print_r($_SESSION);

        header("Location: login.php");
