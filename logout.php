<?php
    session_start();
    session_unset();
    session_destroy();

    require_once 'inc/Functions.php';

    $fun = new Functions();

    $fun->redirect('index.php');

    