<?php
    session_start();
    require 'inc/db,.php';
    require 'inc/functions.php';
    
    $fun = new Functions();

    $fun->view('admin','Admin');