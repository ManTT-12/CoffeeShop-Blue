<?php

// env
require_once("env.php");

// inlcudes
require_once("includes/function.php");
require_once("includes/Database.php");
require_once("includes/Session.php");
Session::init();

$coffees_latest = Database::table('coffees')->take(4)->orderBy(['id' => 'DESC'])->get();
$coffee_brands = Database::table('coffee_brands')->get();
$coffee_types = Database::table('coffee_types')->get();

foreach ($coffee_brands as $key => $coffee_brand) {
    $coffee_brands[$key]['coffees_list'] = Database::table('coffees')
        ->where([['brand', '=', $coffee_brand['id']]])
        ->take(4)
        ->get();
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'index') {
        require_once('view/site/home.php');
    } else if ($action == 'search') {
        if (isset($_GET['keywords'])) {
            $keywords = trim($_GET['keywords']);
        }

        if (isset($_GET['brand'])) {
            $brand = trim($_GET['brand']);
        }

        if (isset($_GET['type'])) {
            $brand = trim($_GET['type']);
        }

        require_once('view/site/search.php');
    }

} else {
    require_once('view/site/home.php');
}


