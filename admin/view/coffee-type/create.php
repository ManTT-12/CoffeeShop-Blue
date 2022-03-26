<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<link rel="stylesheet" href="css/coffee-type/create.css">
<div>
    <form method="post" class="form" id="coffee-type-create-form" action="" enctype="multipart/form-data">
        <div id="create-coffee-type-title">
            <h2>Add New Coffee Type</h2>
            <span id="create-coffee-type-title-message"></span>
        </div>
        <div style="margin-top: 20px">
            <div class="form-group">
                <label for="create-coffee-type-name">Name:</label>
                <input type="text" name="name" id="create-coffee-type-name" placeholder="Please enter coffee type name"><br>
                <span class="create-coffee-type-error" id="create-coffee-type-name-error"></span>
            </div>
        </div>
        <div class="clearfix">
            <button type="submit" name="btnsubmit">Submit</button>
        </div>
    </form>
</div>
<script src="js/coffee-type/create.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>