<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <style>
        body {
            background-color: #cad1ff;
        }

        .btnlog {
            border: 2px solid black;
            width: 150px;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="row" style="padding:15px;background-color:#f9ffca;">
        <div class="col-8">Aplikasi Pengelolaan Keuangan</div>
        <div class="col-1"><u><a href="./home.php" style="color:black">Home</a></u></div>
        <div class="col-1"><a href="./profile.php" style="color:black">Profile</a></div>
        <div class="col-2 text-right"><a href="./logout.php" style="color:black">Logout</a></div>
    </div>

    <div class="d-flex flex-column align-items-center">
        <p style="font-size:22px;padding-top:30px;padding-top:30vh">Halo <strong><?= isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '' ?></strong>, selamat datang di aplikasi pengelolaan keuangan!</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="./assets/script.js"></script>
</body>

</html>