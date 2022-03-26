<?php

require_once('../env.php');
require_once('../includes/Database.php');

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'index':
            $title = 'Coffee Brand - List';
            require_once('view/coffee-brand/index.php');
            break;
        case 'create':
            $title = 'Coffee Brand - Create';
            require_once('view/coffee-brand/create.php');
            break;
        case 'details':
            $title = 'Coffee Brand - Details';
            $coffee_brand_details_id='';
            if (isset($_GET['id'])) {
                $coffee_brand_details_id = $_GET['id'];
            }

            require_once('view/coffee-brand/details.php');
            break;
        case 'edit':
            $title = 'Coffee Brand - Edit';
            require_once('view/coffee-brand/details.php');
            break;
        default:
            require_once('../view/404.php');
            break;
    }
} else {
    $title = 'Coffee Brand - List';
    require_once('view/coffee-brand/index.php');
}