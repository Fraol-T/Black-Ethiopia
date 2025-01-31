<?php  

    class Functions{
        public function redirect($url){

            return header("location: $url");
        } 
        
        public function view($name, $model){
            require 'view/layout.view.php';
        }
    
        public function authenticate($email, $password){
    
            require 'config/Database.php';
    
            $database = new Database();
            $db = $database->connection();
    
                
            $sql = "SELECT * FROM userinfo WHERE id='1'";
            $result = $db->query($sql);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $e = $row['email'];
            $p = $row['password']; 
                return  $e; //($email == $e && $password == $p);
        } 
        public function user_authenticate($email, $password){
            return ($email == EMAIL && $password == PASSWORD);
        }
    
        public function is_user_authenticated(){
            return isset($_SESSION['email']);
        }
    
        public function require_login(){
             ;
            
            if($this -> is_user_authenticated()){
               $this -> redirect('login.php');
            }
        }
    
        public function checkEmail($email){
    
            //require 'config/Database.php';
    
            $database = new Database();
            $db = $database->connection();
    
            $sql = "SELECT * FROM userinfo WHERE email='$email'";
            $result = $db->query($sql);
    
            $num =  $result -> rowCount();
    
            return $num > 0;
    
        }
    }
    