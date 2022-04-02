<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Bootstrap Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <!-- Jquery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="public/css/layout.css">
    <title>Coffee Shop</title>
</head>

<body>
    <div id="navbar">
        <div id="navbar-brand">
            <h2><a href=""><span class="lab la-accusoft"><span></span>Coffee Shop</span></a></h2>
        </div>
        <div id="nav-menu-icon">
            <span class="las la-bars"></span>
        </div>
        <nav id="navbar-menu">
            <ul>
                <li><a href=""><span><span></span>Product</span></a></li>
                <li>
                    <a href=""><span><span></span>About</span></a>
                </li>
                <li>
                    <a href=""><span><span></span>Contract</span></a>
                </li>
                <li><a href=""><span class="las la-shopping-bag"><span></span>Order</span></a></li>
                <li><a href=""><span class="las la-user-circle"><span></span>Account</span></a></li>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here">
                </div>
            </ul>
        </nav>
    </div>
    <div id="nav-short-menu">
        <ul>
            <li><a href=""><span><span></span>Product</span></a></li>
            <li><a href=""><span><span></span>About</span></a></li>
            <li><a href=""><span><span></span>Contract</span></a></li>
            <li><a href=""><span class="las la-shopping-bag"><span></span>Order</span></a></li>
            <li><a href=""><span class="las la-user-circle"><span></span>Account</span></a></li>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>
        </ul>
    </div>

    <div class="search-bar" >
        <div class="search-info">
            <div class="search-wrapper bottom">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" class="input-search">
            </div>
            <button onclick="myFunction()" class="drop-down">Advanced Search</button>
        </div>
        <div class="filter">
            <div class="row">
                <span style="margin-right: 5px">Type:</span> <select name="coffee-type" id="" ><option>All Brand</option></select>
                <span style="margin: 0 5px 0 20px">Brand:</span> <select name="coffee-brand" id="" ><option>All Brand</option></select>
            </div>
            <div class="row">
                <span style="margin-right: 5px">Date From:</span> <input type="date">
                <span style="margin: 0 5px 0 20px">To:</span> <input type="date">
            </div>
            <div class="row">
                <span style="margin-right: 5px">Price From:</span> <input type="number">
                <span style="margin: 0 5px 0 20px">To:</span> <input type="number">
            </div>
        </div>
    </div>

    <div id="main-content">
        <section class="content">