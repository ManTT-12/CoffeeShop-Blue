<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<link rel="stylesheet" href="css/coffee-brand/details.css">
<div>
    <h3 id="coffee-brand-details-title">Coffee Brand Id</h3>
    <div id="coffee-brand-details-info">
        <input type="hidden" id="coffee-brand-details-id" value=<?=$coffee_brand_details_id?>>
        <div class="form-group">
            Name: <span id="coffee-brand-details-name"></span>
        </div>
        <div class="form-group">
            Created At: <span id="coffee-brand-details-created_at"></span>
        </div>
        <div class="form-group">
            Updated At: <span id="coffee-brand-details-updated_at"></span>
        </div>
    </div>
</div>
<script src="js/coffee-brand/details.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>