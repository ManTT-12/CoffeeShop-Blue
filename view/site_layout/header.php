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
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js" integrity="sha256-0H3Nuz3aug3afVbUlsu12Puxva3CP4EhJtPExqs54Vg=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="public/css/layout.css">

    <!-- Axios Library -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <title><?=$title ?? 'Coffee Shop'?></title>
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
        </ul>
    </div>
    <input type="hidden" id="app-url" value="<?=APP_URL?>">
    <input type="hidden" id="api-url" value="<?=API_URL?>">
    <input type="hidden" id="coffee-image-path" value="<?=COFFEE_IMAGE_PATH?>">

    <div class="search-bar" >
        <form action="<?=APP_URL?>index.php?action=search">
            <div class="search-info">
                <div class="search-wrapper bottom">
                    <button>
                        <span class="las la-search"></span>
                    </button>
                    <input type="search" name="keywords" placeholder="Search here" class="input-search">
                </div>
                <button type="button" id="search-toggle" class="drop-down">Advanced Search</button>
            </div>
            <div class="filter" id="advanced-search-filter">
                <div class="row">
                    <span style="margin-right: 5px">Type:</span> 
                    <select name="coffee-type" id="search-coffee-type" >
                        <option value="">All Type</option>
                        <?php
                        foreach ($coffee_types as $coffee_type) {
                            ?>
                            <option value="<?=$coffee_type['id']?>"><?=$coffee_type['name']?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <span style="margin: 0 5px 0 20px">Brand:</span> 
                    <select name="coffee-brand" id="search-coffee-brand">
                        <option value="">All Brand</option>
                        <?php
                        foreach ($coffee_brands as $coffee_brand) {
                            ?>
                            <option value="<?=$coffee_brand['id']?>"><?=$coffee_brand['name']?></option>
                            <?php
                        }
                        ?>
                    </select>
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
        </form>
    </div>

    <div id="main-content">
        <section class="content">