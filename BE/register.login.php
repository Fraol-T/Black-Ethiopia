<?php
    require_once 'inc/functions.php';
    require 'inc/db.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    

        $sql = "INSERT INTO userinfo (name, email, password) VALUES ('$name','email', '$hashedPassword')";
    
        if ($conn->query($sql) === TRUE) {
           redirect('login.php');
        } else {
            $status = "The provided credentials did not work";
            redirect('home.php');
        }
    }