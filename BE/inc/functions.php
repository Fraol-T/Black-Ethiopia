<?php  
   function redirect($url){
    return header("location: $url");
} 
   function view($name, $model){
        require 'view/layout.view.php';
    }

    function authenticate($email, $password){

        require 'db.php';
            
        $sql = "SELECT * FROM userinfo WHERE id='1'";
        $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $e = $row['email'];
        $p = $row['password']; 
            return  $e; //($email == $e && $password == $p);
    } 
    function user_authenticate($email, $password){
        return ($email == EMAIL && $password == PASSWORD);
    }

    function is_user_authenticated(){
        return isset($_SESSION['email']);
    }

    function require_login(){
        if(!is_user_authenticated()){
            redirect('login.php');
        }
    }
    