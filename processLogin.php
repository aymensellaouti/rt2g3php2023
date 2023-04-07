<?php
    session_start();
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if (isset($email) && isset($password)) {
        if ($email == 'admin@gmail.com' && $password == "0000") {
            $_SESSION['user'] = $email;
            header("Location:home.php");
        } else {
            $_SESSION['errormessage']="Veuillez vérifier vos credentials";
            header("Location:login.php");
        }
    } else {
        $_SESSION['errormessage']="Veuillez vérifier vos credentials";
        header("Location:login.php");
    }