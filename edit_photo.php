<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="./assets/style.css" />
    <style>
        html,
        body {
            margin: 0px;
            height: 100%;
        }

        body {
            background-color: #cad1ff;
        }

        .btnreg {
            border: 2px solid black;
            width: 150px;
        }
    </style>
    <title>profil</title>
</head>

<body>

    <?php
        include './config/conn.php';
        $str_query = "SELECT * FROM user WHERE nik = '" . $_SESSION['nik'] . "'";
        $query = mysqli_query($connection, $str_query);
        $data = mysqli_fetch_array($query);
    ?>
    <div class="row" style="padding:15px;background-color:#f9ffca;">
        <div class="col-8">Aplikasi Pengelolaan Keuangan</div>
        <div class="col-1"><a href="./home.php" style="color:black">Home</a></div>
        <div class="col-1"><u><a href="./profile.php" style="color:black">Profile</a></u></div>
        <div class="col-2 text-right"><a href="./logout.php" style="color:black">Logout</a></div>
    </div>

    <div class="d-flex flex-column " style="padding: 0px 20px 0px 20px;">
        <h3 style="margin: 30px 0px 30px 0px;" class="text-center">Change Profile Photo</h3>

        <div class="row">
            <div class="col-12 text-center">
                <img src="./assets/profilepic/<?= $data['profile_pic'] ?>" alt="No pic" style="max-width: 100px;">
            </div>

            <div class="col-12 text-center">
                <form action="./edit_photo_process.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="profil" id="profile_pic" style="width: 20%;" required/>
                    <input type="submit" value="Ganti Photo!" class="btn btn-primary"/>
                </form>

                <a href="./edit_profile.php" class="btn btn-secondary" style="margin-top: 20px;width:28%">Kembali</a>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>