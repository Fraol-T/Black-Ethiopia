<?php
   
    function view($name, $model){
        require 'view/layout.view.php';
    }

    function redirect($url){
        return header("location: $url");
    }

    function authenticate_user($email,$password){

        require 'db.php';
            
            $sql = "SELECT * FROM userinfo WHERE email='$email'";
            $result = $conn->query($sql);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return ($email == $row['email'] && $password == $row['password']);

            
    } 

    function is_user_authenticated(){
        return isset($_SESSION['email']);
    }

    function require_login(){
        if(!is_user_authenticated()){
            redirect('login.php');
        }
    }
    