<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<link rel="stylesheet" href="css/coffee-brand/edit.css">
<div>
    <div>
        <a class="btn btn-primary" href="<?=APP_URL?>admin/coffee-brand.php">Back</a>
    </div>
    <form class="form" id="coffee-brand-edit-form" action="">
        <input type="hidden" id="coffee-brand-edit-id" value="<?=$coffee_brand_edit['id']?>">
        <div id="edit-coffee-brand-title">
            <h2>EDIT COFFEE BRAND <?=$coffee_brand_edit['id']?></h2>
            <span id="edit-coffee-brand-title-message"></span>
        </div>
        <div style="margin-top: 20px">
            <div class="form-group">
                <label for="edit-coffee-brand-name">Name:</label>
                <input type="text" name="name" id="edit-coffee-brand-name" placeholder="Please enter coffee brand name" value="<?=$coffee_brand_edit['name']?>"><br>
                <span class="edit-coffee-brand-error" id="edit-coffee-brand-name-error"></span>
            </div>
            <div class="clearfix">
                <button type="submit" name="btnsubmit">Submit</button>
            </div>
        </form>
    </div>
<script src="js/coffee-brand/edit.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>