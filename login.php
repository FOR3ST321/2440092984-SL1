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
            background-color: #fbfdac;
        }

        .btnlog {
            border: 2px solid black;
            width: 150px;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="d-flex flex-column align-items-center">
        <h4 style="padding-top:30px;padding-bottom:10vh">Login</h4>
        <?php //print_r($_SESSION) ?>

        <div class="container" style="background-color:#ace6fd;width:35vw;padding:30px 50px 30px 50px">
            <form action="./log_process.php" method="POST">
                <?php
                if (isset($_SESSION['msg']) && $_SESSION['msg'] != "") {
                ?>
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-12">
                            <strong>
                                <?=
                                $_SESSION['msg'];
                                ?>
                            </strong>
                        </div>
                    </div>
                <?php
                    $_SESSION['msg'] = "";
                }
                ?>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-3">
                        Username
                    </div>
                    <div class="col-9">
                        <input type="text" style="width: 100%;" class="form-control" name="username" id="username">
                    </div>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-3">
                        Password
                    </div>
                    <div class="col-9">
                        <input type="password" style="width: 100%;" class="form-control" name="password" id="password">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-9 d-flex">
                        <a href="./welcome.php" class="btn btnlog" style="margin-right:45px;background-color:#fdd7ac">Kembali</a>
                        <button type="submit" name="submit" class="btn btnlog" style="background-color:#adf59f">Login!</button>
                    </div>
                </div>
        </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="./assets/script.js"></script>
</body>

</html>