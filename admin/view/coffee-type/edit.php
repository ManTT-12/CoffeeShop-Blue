<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<link rel="stylesheet" href="css/coffee-type/edit.css">
<div>
    <div>
        <a class="btn btn-primary" href="<?=APP_URL?>admin/coffee-type.php">Back</a>
    </div>
    <form class="form" id="coffee-type-edit-form" action="">
        <input type="hidden" id="coffee-type-edit-id" value="<?=$coffee_type_edit['id']?>">
        <div id="edit-coffee-type-title">
            <h2>EDIT COFFEE TYPE <?=$coffee_type_edit['id']?></h2>
            <span id="edit-coffee-type-title-message"></span>
        </div>
        <div style="margin-top: 20px">
            <div class="form-group">
                <label for="edit-coffee-type-name">Name:</label>
                <input type="text" name="name" id="edit-coffee-type-name" placeholder="Please enter coffee type name" value="<?=$coffee_type_edit['name']?>"><br>
                <span class="edit-coffee-type-error" id="edit-coffee-type-name-error"></span>
            </div>
            <div class="clearfix">
                <button type="submit" name="btnsubmit">Submit</button>
            </div>
        </form>
    </div>
<script src="js/coffee-type/edit.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>