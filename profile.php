
<?php session_start();?>
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
    <div class="row" style="padding:15px;background-color:#f9ffca;">
        <div class="col-8">Aplikasi Pengelolaan Keuangan</div>
        <div class="col-1"><a href="./home.php" style="color:black">Home</a></div>
        <div class="col-1"><u><a href="./profile.php" style="color:black">Profile</a></u></div>
        <div class="col-2 text-right"><a href="./logout.php" style="color:black">Logout</a></div>
    </div>

    <div class="d-flex flex-column " style="padding: 0px 20px 0px 20px;">
        <h3 style="margin: 30px 0px 30px 0px;" class="text-center">Profil Pribadi</h3>

        <div class="row">
            <div class="col-4">
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">Nama depan</div>
                    <div class="col-8">
                        <strong><?= isset($_SESSION['nama_depan']) ? $_SESSION['nama_depan'] : "" ?></strong>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">tempat lahir</div>
                    <div class="col-8">
                        <strong><?= isset($_SESSION['tempat_lahir']) ? $_SESSION['tempat_lahir'] : "" ?></strong>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">warga negara</div>
                    <div class="col-8">
                        <strong><?= isset($_SESSION['warga_negara']) ? $_SESSION['warga_negara'] : "" ?></strong>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">alamat</div>
                    <div class="col-8">
                        <strong><?= isset($_SESSION['alamat']) ? $_SESSION['alamat'] : "" ?></strong>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">Nama tengah</div>
                    <div class="col-8">
                        <strong><?= isset($_SESSION['nama_tengah']) ? $_SESSION['nama_tengah'] : "" ?></strong>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">Tanggal Lahir</div>
                    <div class="col-8">
                        <strong><?= isset($_SESSION['tanggal_lahir']) ? $_SESSION['tanggal_lahir'] : "" ?></strong>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">Email</div>
                    <div class="col-8">
                        <strong><?= isset($_SESSION['email']) ? $_SESSION['email'] : "" ?></strong>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">Kode pos</div>
                    <div class="col-8">
                        <strong><?= isset($_SESSION['kode_pos']) ? $_SESSION['kode_pos'] : "" ?></strong>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">Nama belakang</div>
                    <div class="col-8">
                        <strong><?= isset($_SESSION['nama_belakang']) ? $_SESSION['nama_belakang'] : "" ?></strong>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">NIK</div>
                    <div class="col-8">
                    <strong><?= isset($_SESSION['nik']) ? $_SESSION['nik'] : "" ?></strong>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">no hp</div>
                    <div class="col-8">
                    <strong><?= isset($_SESSION['no_hp']) ? $_SESSION['no_hp'] : "" ?></strong>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-4">Foto Profil</div>
                    <div class="col-8">
                        <img src="./assets/profilepic/<?= isset($_SESSION['profil'])? $_SESSION['profil'] :"" ?>" alt="No pic" style="max-width: 100px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="./assets/script.js"></script>
</body>

</html>