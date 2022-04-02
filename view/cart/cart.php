        <div id="manager">
            <div id="manager__title">
                <div id="welcom-name">Welcome <?=$_SESSION['login_username']?></div>
                <div id="logout-button"><button id="user-logout">Logout</button></div>
            </div>
            <div id="list-item">
                <?php require('view/cart/cart_line.php') ?>
                <?php require('view/cart/cart_line.php') ?>
                <?php require('view/cart/cart_line.php') ?>
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