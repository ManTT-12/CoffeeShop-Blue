<?php

require_once('../env.php');

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'index':
            $title = 'Coffee - List';
            require_once('view/coffee/index.php');
            break;
        case 'create':
            $title = 'Coffee - Create';
            require_once('view/coffee/create.php');
            break;
        case 'details':
            $title = 'Coffee - Details';
            $coffee_details_id='';
            if (isset($_GET['id'])) {
                $coffee_details_id = $_GET['id'];
            }

            require_once('view/coffee/details.php');
            break;
        case 'edit':
            $title = 'Coffee - Edit';
            require_once('view/coffee/details.php');
            break;
        default:
            require_once('../view/404.php');
            break;
    }

} else {
    $title = 'Coffee - List';
    require_once('view/coffee/index.php');
}