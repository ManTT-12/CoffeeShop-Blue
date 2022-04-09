<?php

// env
require_once("env.php");

// inlcudes
require_once("includes/function.php");
require_once("includes/Database.php");
require_once("includes/Session.php");
require_once("includes/Class_Cart.php");
Session::init();

$cart = Cart::loadOrCreate();

$action = '';
if (isset($_POST['action'])) {
    $action = $_POST['action'];
}

switch ($action) {
    case 'add-to-cart':
        $coffeeId = null;
        $qty = null;
        if (isset($_POST['data'])) {
            $data = $_POST['data'];

            $coffeeId = $data['id'];
            $qty = $data['qty'];
        }
        $cart->addToCart($coffeeId, $qty);
        break;
    case 'empty-cart': 
        $cart->emptyCart();
        break;
    case 'update-cart':
        $coffeesIdList = [];
        if (isset($_POST['data'])) {
            $coffeesIdList = $_POST['data'];
        }
        $cart->updateCart($coffeesIdList);
        break;
    case 'remove-product':
        $coffeeId = null;
        if (isset($_POST['data'])) {
            $coffeeId = $_POST['data'];
        }
        $cart->removeProduct($coffeeId);
        break;
}
$cart->display();