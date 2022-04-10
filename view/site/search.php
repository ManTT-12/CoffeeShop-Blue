<?php require_once('view/site_layout/header.php'); ?>
<!-- Start Content -->
<div class="container">
    <div class="card" style="width:100%">
        <form class="add-to-cart-form" method="POST">
            <input type="hidden" name="coffee-id" value="">
            <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md col-lg col-xl">
                        <img src="" class="img-fluid " alt="Coffee-Image not found">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        <p class="lead fw-normal mb-2 ">Name</p>
                        <p><span class="text-muted">Brand: </span>1 <span class="text-muted">Type: </span>1</p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-arrow-up"></i>
                        </button>

                        <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-arrow-down"></i>
                        </button>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h5 class="mb-0">$499.00</h5>
                    </div>
                    <input type="submit" class="add-to-cart-btn" value="Add to Cart">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="card" style="width:100%">
        <form class="add-to-cart-form" method="POST">
            <input type="hidden" name="coffee-id" value="">
            <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md col-lg col-xl">
                        <img src="" class="img-fluid " alt="Coffee-Image not found">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        <p class="lead fw-normal mb-2 ">Name</p>
                        <p><span class="text-muted">Brand: </span>1 <span class="text-muted">Type: </span>1</p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-arrow-up"></i>
                        </button>

                        <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-arrow-down"></i>
                        </button>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h5 class="mb-0">$499.00</h5>
                    </div>
                    <input type="submit" class="add-to-cart-btn" value="Add to Cart">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Content -->
<?php require_once('view/site_layout/sidebar.php'); ?>
<?php require_once('view/site_layout/footer.php'); ?>