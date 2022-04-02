<?php

require_once('../env.php');
require_once('../includes/Database.php');
require_once("../includes/Session.php");
Session::init();

$title = 'Dashboard';
require_once('view/admin/dashboard.php');