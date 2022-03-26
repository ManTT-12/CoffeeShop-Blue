<?php

require_once('../env.php');
require_once('../includes/Database.php');

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'index':
            $title = 'Coffee Type - List';
            require_once('view/coffee-type/index.php');
            break;
        case 'create':
            $title = 'Coffee Type - Create';
            require_once('view/coffee-type/create.php');
            break;
        case 'details':
            $title = 'Coffee Type - Details';
            $coffee_type_details_id='';
            if (isset($_GET['id'])) {
                $coffee_type_details_id = $_GET['id'];
            }

            require_once('view/coffee-type/details.php');
            break;
        case 'edit':
            $title = 'Coffee Type - Edit';
            require_once('view/coffee-type/details.php');
            break;
        default:
            require_once('../view/404.php');
            break;
    }
} else {
    $title = 'Coffee Type - List';
    require_once('view/coffee-type/index.php');
}