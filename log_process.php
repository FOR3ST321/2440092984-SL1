<?php
    session_start();

    print_r($_POST);

    if(isset($_POST['submit'])){
        if(isset($_SESSION['username']) && isset($_SESSION['password'])){
            if($_POST['username'] == $_SESSION['username'] && $_POST['password'] == $_SESSION['password']){
                header("Location: home.php");
            }
            else{
                $_SESSION['msg'] = 'Username/Password salah';
                header("Location: login.php");
            }
            
        }
        else{
            $_SESSION['msg'] = 'Username/Password salah';
            header("Location: login.php");
        }

        
    }
