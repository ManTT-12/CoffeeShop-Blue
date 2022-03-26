<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<link rel="stylesheet" href="css/coffee-type/details.css">
<div>
    <h3 id="coffee-type-details-title">Coffee Type Id</h3>
    <div id="coffee-type-details-info">
        <input type="hidden" id="coffee-type-details-id" value=<?=$coffee_type_details_id?>>
        <div class="form-group">
            Name: <span id="coffee-type-details-name"></span>
        </div>
        <div class="form-group">
            Created At: <span id="coffee-type-details-created_at"></span>
        </div>
        <div class="form-group">
            Updated At: <span id="coffee-type-details-updated_at"></span>
        </div>
    </div>
</div>
<script src="js/coffee-type/details.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>