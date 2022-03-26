<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<link rel="stylesheet" href="css/coffee/create.css">
<div>
    <form method="post" class="form" id="coffee-create-form" action="" enctype="multipart/form-data">
        <div id="create-coffee-title">
            <h2>Add New Coffee</h2>
            <span id="create-coffee-title-message"></span>
        </div>
        <div style="margin-top: 20px">
            <div class="form-group">
                <label for="create-coffee-name">Name:</label>
                <input type="text" name="name" id="create-coffee-name" placeholder="Please enter coffee name"><br>
                <span class="create-coffee-error" id="create-coffee-name-error"></span>
            </div>
            <div class="form-group">
                <label for="create-coffee-image">Image:</label>
                <input type="file" name="image" id="create-coffee-image"><br>
                <span class="create-coffee-error" id="create-coffee-image-error"></span>
            </div>
            <div class="form-group">
                <label for="create-coffee-price">Price:</label>
                <input type="text" name="price" id="create-coffee-price" placeholder="Please enter coffee price"><br>
                <span class="create-coffee-error" id="create-coffee-price-error"></span>
            </div>
            <div class="form-group">
                <label for="create-coffee-type">Type:</label>
                <select id="create-coffee-type" name="type">
                    <option value="">----------------Choose a type----------------</option>
                    <option value="1">Example 1</option>
                    <option value="2">Example 2</option>
                    <option value="3">Example 3</option>
                </select>
                <span class="create-coffee-error" id="create-coffee-type-error"></span>
            </div>
            <div class="form-group">
                <label for="create-coffee-brand">Brand:</label>
                <select id="create-coffee-brand" name="brand">
                    <option value="">----------------Choose a brand----------------</option>
                    <option value="1">Example 1</option>
                    <option value="2">Example 2</option>
                    <option value="3">Example 3</option>
                </select>
                <span class="create-coffee-error" id="create-coffee-brand-error"></span>
            </div>
            <div class="form-group">
                <label for="create-coffee-description">Description:</label><br>
                <textarea type="text" name="description" id="create-coffee-description" placeholder="Please enter coffee description" rows="7"></textarea>
                <span class="create-coffee-error" id="create-coffee-description-error"></span>
            </div>
        </div>
        <div class="clearfix">
            <button type="submit" name="btnsubmit">Submit</button>
        </div>
    </form>
</div>
<script src="js/coffee/create.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>