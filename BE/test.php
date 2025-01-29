<?php
    session_start();
    require_once 'inc/functions.php';
    require 'inc/config.php';

    
    if($_SERVER['REQUEST_METHOD'] == "POST"){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(authenticate($email, $password)){
        $_SESSION['email'] = $email;
        redirect('index.php');
    }else{
        $status = "The provided credentials did not work";
        redirect('login.php');
    }

    if($email == false){
        $status = "Please provide a valid email";
        redirect('log.php');
    }
    }else{
        $status = "ERROR in form";
        redirect('login.php');
    }

    $_SESSION['status'] = $status;