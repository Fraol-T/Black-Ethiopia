<?php
    session_start();
    require_once 'inc/functions.php';
    require 'inc/config.php';

    
    if($_SERVER['REQUEST_METHOD'] == "POST"){

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $fun = new Functions();


    if($fun->authenticate($email, $password)){
        $_SESSION['email'] = $email;
        $fun->redirect('index.php');
    }else{
        $status = "The provided credentials did not work";
        $fun->redirect('test.php');
    }

    if($email == false){
        $status = "Please provide a valid email";
        $fun->redirect('log.php');
    }
    }else{
        $status = "ERROR in form";
        header ("location: login.php");
    }

    $_SESSION['status'] = $status;