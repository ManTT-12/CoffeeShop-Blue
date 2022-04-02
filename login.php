<?php

// env
require_once("env.php");

// inlcudes
require_once("includes/function.php");
require_once("includes/Database.php");
require_once("includes/Session.php");
Session::init();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if($action == 'logout') {
        Session::unset('login_user');
        Session::unset('login_username');
    }

    exit();
}
Session::set('login_user', true);
Session::set('login_username', $_POST['username']);

exit(json_encode('Success'));