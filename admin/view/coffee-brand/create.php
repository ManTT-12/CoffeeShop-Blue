<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<link rel="stylesheet" href="css/coffee-brand/create.css">
<div>
    <div>
        <a class="btn btn-primary" href="<?=APP_URL?>admin/coffee-brand.php">Back</a>
    </div>
    <form method="post" class="form" id="coffee-brand-create-form" action="" enctype="multipart/form-data">
        <div id="create-coffee-brand-title">
            <h2>Add New Coffee Brand</h2>
            <span id="create-coffee-brand-title-message"></span>
        </div>
        <div style="margin-top: 20px">
            <div class="form-group">
                <label for="create-coffee-brand-name">Name:</label>
                <input type="text" name="name" id="create-coffee-brand-name" placeholder="Please enter coffee brand name"><br>
                <span class="create-coffee-brand-error" id="create-coffee-brand-name-error"></span>
            </div>
        </div>
        <div class="clearfix">
            <button type="submit" name="btnsubmit">Submit</button>
        </div>
    </form>
</div>
<script src="js/coffee-brand/create.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>