        </section>

        <?php 
            if (Session::get('login_user') == true) {
                ?>
                    <div id="manager">
                        <?php $cart->display(); ?>
                    </div>
                <?php
            } else {
                require('view/login/login.php');
            }

        ?>
    </div>