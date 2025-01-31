<?php
    session_start();
    require_once 'inc/functions.php';
    require 'config/Database.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $fun = new Functions();
        

        $database = new Database();
        $db = $database->connection();

        if (!($fun -> checkEmail($email))){
        $sql = "INSERT INTO userinfo (name, email, password) VALUES ('$name','$email', '$password')";
    
            if ($db->query($sql) == TRUE) {
                $_SESSION['email'] = $email;
            //redirect('index.php');
            header ("location: index.php");
            } else {
                $status = "The provided credentials did not work";
                //redirect('home.php');
                header ("location: login.php");
            }
    } else {
        $status = 'The user already have an account';
        //redirect('login.php');
        header ("location: login.php");
    }
    }