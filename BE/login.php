<?php
    session_start();
    require_once 'inc/functions.php';
    require 'inc/config.php';

    
    if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_POST['name'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if(authenticate_user($email, $password)){
        $_SESSION['email'] = $email;
        redirect('index.php');
    }else{
        $status = "The provided credentials did not work";
        redirect('log.php');
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