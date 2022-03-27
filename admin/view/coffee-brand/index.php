<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<div class="table-responsive">
    <a href="<?=APP_URL?>admin/coffee-brand.php?action=create" class="btn btn-primary">Create New</a>
    <h3 class="text-danger text-center">COFFEE BRAND LIST</h3>
    <table id="coffee-brand-datatable" class="table table-striped table-bordered">
    </table>
</div>
<script src="js/coffee-brand/index.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>