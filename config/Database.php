<?php
class Database {
        private  $host = 'localhost';
        private  $dbName = 'coffee_shop';
        private  $username = 'root';
        private  $password = '';
        private  $conn;


        // Create a connection to the database using PDO
        public function connection() {

            $this -> conn = null;

            
                try {
                    $this -> conn = new PDO("mysql:host=" . $this -> host . ";dbname=" . $this -> dbName, $this -> username, $this -> password);
                    $this -> conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    echo "Connection error: " . $e->getMessage();
                }
            
            return $this -> conn;
        }
    }