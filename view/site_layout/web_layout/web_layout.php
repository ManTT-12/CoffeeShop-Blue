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
    <link rel="stylesheet" href="web_layout.css">
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

    <div id="main-content">
        <section class="content">
            <div id="main-name">
                <h2>Drinks</h2>
            </div>
            <div class="all-card">
                <div class="card">
                    <div class="cart-image">
                        <img src="" alt="">
                    </div>
                    <div class="card-name"><a href="#">Coffee</a></div>
                    <div class="card-details">
                        <div class="card-price">1.2$</div>
                        <div class="card-description">Delicious</div>
                    </div>
                </div>
                <div class="card">
                    <div class="cart-image">
                        <img src="" alt="">
                    </div>
                    <div class="card-name"><a href="#">Coffee</a></div>
                    <div class="card-details">
                        <div class="card-price">1.2$</div>
                        <div class="card-description">Delicious</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div id="login-signup-form">
            <div>
                <div id="login-title">
                    <h3>Login</h3>
                </div>
                <div id="login-form">
                    <div class="form-group">
                        <label for="login-username">Username:</label>
                        <input type="text" id="login-username" placeholder="Please enter username...">
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password:</label>
                        <input type="text" id="login-password" placeholder="Please enter password...">
                    </div>
                </div>
                <div id="login-button">
                    <button type="submit" name="btnlogin">Login</button>
                </div>
            </div>
            <div id="signup-button">
                <label for="signup-title">Don't have account?</label>
                <a href="">SignUp</a>
            </div>
        </div> -->
        <div id="manager">
            <div id="manager__title">
                <div id="welcom-name">Welcom [name]</div>
                <div id="logout-button"><a href="">Logout</a></div>
            </div>
            <div id="list-item">
                <div class="item">
                    <div class="item-name">item1</div>
                    <div class="item-button"><i class="bi bi-x-lg"></i></div>
                </div>
                <div class="item">
                    <div class="item-name">item1</div>
                    <div class="item-button"><i class="bi bi-x-lg"></i></div>
                </div>
                <div class="item">
                    <div class="item-name">item1</div>
                    <div class="item-button"><i class="bi bi-x-lg"></i></div>
                </div>
            </div>
            <div id="cart-total">
                <div class="cart-subtotal">
                    <div class="subtotal-name">Subtotal:</div>
                    <div class="subtotal-price">20$</div>
                </div>
                <div class="cart-shipfee">
                    <div class="shipfee-name">Shipping fee:</div>
                    <div class="shipfee-price">10$</div>
                </div>
                <div class="cart-total">
                    <div class="total-name">TOTAL:</div>
                    <div class="total-price">100$</div>
                </div>
            </div>
            <div id="cart-button">
                <button>update</button>
                <button>drop all</button>
                <button>order detail</button>
                <button>checkout</button>
            </div>
        </div>
    </div>
    <footer>
        <div class="socialbtns">
            <ul>
                <li>
                    <a href="#" class="fa fa-lg fa-facebook"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-lg fa-twitter"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-lg fa-google-plus"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-lg fa-github"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-lg fa-pinterest"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-lg fa-linkedin"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-lg fa-instagram"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-lg fa-youtube"></a>
                </li>
            </ul>
        </div>

        <p>This website is developed by Not Drop</p>
    </footer>
    </div>
    <script src="web_layout.js"></script>
</body>

</html>