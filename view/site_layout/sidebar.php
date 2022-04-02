        </section>

        <?php 
            if (Session::get('login_user') == true) {
                require('view/cart/cart.php');
            } else {
                require('view/login/login.php');
            }
            
        ?>
    </div>