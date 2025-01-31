<?php
    session_start();
    require_once 'inc/functions.php';
   
    $fun = new Functions();
    
    $fun->view('login','Login');

    