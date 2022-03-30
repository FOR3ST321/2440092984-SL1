<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <style>
        html,
        body {
            margin: 0px;
            height: 100%;
        }

        body {
            background-color: #c2f0f7;
        }

        .btnreg {
            border: 2px solid black;
            width: 150px;
        }
    </style>
    <title>Register</title>
</head>

<body>
    <div class="d-flex flex-column " style="padding: 0px 20px 0px 20px;">
        <h3 style="margin: 30px 0px 30px 0px;" class="text-center">Register</h3>

        <p class="text-danger">
            <strong id="error_register">
            </strong>
        </p>

        <form action="reg_process.php" enctype="multipart/form-data" method="POST" id="regForm">
            <div class="row">
                <div class="col-4">
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Nama depan (*)</div>
                        <div class="col-8"><input type="text" name="nama_depan" id="nama_depan"></div>
                        <div class="col-12 text-danger" id="err1"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">tempat lahir (*)</div>
                        <div class="col-8"><input type="text" name="tempat_lahir" id="tempat_lahir"></div>
                        <div class="col-12 text-danger" id="err2"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">warga negara (*)</div>
                        <div class="col-8"><input type="text" name="warga_negara" id="warga_negara"></div>
                        <div class="col-12 text-danger" id="err3"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">alamat (*)</div>
                        <div class="col-8"><textarea name="alamat" id="alamat" cols="23" rows="3"></textarea></div>
                        <div class="col-12 text-danger" id="err4"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Username (*)</div>
                        <div class="col-8"><input type="text" name="username" id="username"></div>
                        <div class="col-12 text-danger" id="err5"></div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Nama tengah (*)</div>
                        <div class="col-8"><input type="text" name="nama_tengah" id="nama_tengah"></div>
                        <div class="col-12 text-danger" id="err6"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Tanggal Lahir (*)</div>
                        <div class="col-8"><input type="date" name="tanggal_lahir" id="tanggal_lahir"></div>
                        <div class="col-12 text-danger" id="err7"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Email (*)</div>
                        <div class="col-8"><input type="email" name="email" id="email"></div>
                        <div class="col-12 text-danger" id="err8"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Kode pos (*)</div>
                        <div class="col-8"><input type="number" name="kode_pos" id="kode_pos"></div>
                        <div class="col-12 text-danger" id="err9"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Password 1 (*)</div>
                        <div class="col-8"><input type="password" name="password1" id="password1"></div>
                        <div class="col-12 text-danger" id="err10"></div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Nama belakang (*)</div>
                        <div class="col-8"><input type="text" name="nama_belakang" id="nama_belakang"></div>
                        <div class="col-12 text-danger" id="err11"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">NIK (*)</div>
                        <div class="col-8"><input type="number" name="nik" id="nik"></div>
                        <div class="col-12 text-danger" id="err12"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">no hp (*)</div>
                        <div class="col-8"><input type="text" name="no_hp" id="no_hp"></div>
                        <div class="col-12 text-danger" id="err13"></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Foto Profil (*)</div>
                        <div class="col-8"><input type="file" name="profil" id="profil" accept="image/png, image/jpeg" required></div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <div class="col-4">Password 2 (*)</div>
                        <div class="col-8"><input type="password" name="password2" id="password2"></div>
                        <div class="col-12 text-danger" id="err14"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <a href="./welcome.php" class="btn btnreg" style="margin-right:45px;background-color:#fdd7ac">Kembali</a>
                    <button type="submit" id="formBtn" name="submit" class="btn btnreg" style="background-color:#adf59f">Register</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="./assets/validation.js"></script>
</body>

</html>