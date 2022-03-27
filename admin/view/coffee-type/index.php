<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<div class="table-responsive">
    <a href="<?=APP_URL?>admin/coffee-type.php?action=create" class="btn btn-primary">Create New</a>
    <h3 class="text-danger text-center">COFFEE TYPE LIST</h3>
    <table id="coffee-type-datatable" class="table table-striped table-bordered">
    </table>
</div>
<script src="js/coffee-type/index.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>