<?php
    session_start();
    require 'inc/functions.php';

    $fun = new Functions();

    $fun->view('register','Register');