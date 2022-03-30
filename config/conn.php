<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'keuangan';

$connection = mysqli_connect($server, $username, $password, $db_name);

if ($connection) {
    // echo "koneksi berhasil";
} else {
    throw new Exception('Mysql Connection Error!'.mysqli_connect_error());
}
?>