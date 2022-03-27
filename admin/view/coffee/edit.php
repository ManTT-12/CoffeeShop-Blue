<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<link rel="stylesheet" href="css/coffee/edit.css">
<div>
    <div>
        <a class="btn btn-primary" href="<?=APP_URL?>admin/coffee.php">Back</a>
    </div>
    <form method="post" class="form" id="coffee-edit-form" action="" enctype="multipart/form-data">
        <input type="hidden" id="coffee-edit-id" value="<?=$coffee_edit['id']?>">
        <div id="edit-coffee-title">
            <h2>EDIT COFFEE <?=$coffee_edit['id']?></h2>
            <span id="edit-coffee-title-message"></span>
        </div>
        <div style="margin-top: 20px">
            <div class="form-group text-center">
                <img id="edit-coffee-image-display" height="300" width="300" src="<?=COFFEE_IMAGE_PATH . $coffee_edit['image']?>" alt="<?=$coffee_edit['name']?>">
            </div>

            <div class="form-group">
                <label for="edit-coffee-name">Name:</label>
                <input type="text" name="name" id="edit-coffee-name" placeholder="Please enter coffee name" value="<?=$coffee_edit['name']?>"><br>
                <span class="edit-coffee-error" id="edit-coffee-name-error"></span>
            </div>
            <div class="form-group">
                <label for="edit-coffee-image">Image:</label>
                <input type="file" name="image" id="edit-coffee-image"><br>
                <span class="edit-coffee-error" id="edit-coffee-image-error"></span>
            </div>
            <div class="form-group">
                <label for="edit-coffee-price">Price:</label>
                <input type="text" name="price" id="edit-coffee-price" placeholder="Please enter coffee price" value="<?=$coffee_edit['price']?>"><br>
                <span class="edit-coffee-error" id="edit-coffee-price-error"></span>
            </div>
            <div class="form-group">
                <label for="edit-coffee-type">Type:</label>
                <select id="edit-coffee-type" name="type">
                    <?php 
                    foreach ($coffee_types as $key => $coffee_type) {
                        ?>
                        <option <?=$coffee_edit['type'] == $coffee_type['id'] ? 'selected' : ''?> value="<?=$coffee_type['id']?>"><?=$coffee_type['name']?></option>
                        <?php
                    }
                    ?>
                </select>
                <span class="edit-coffee-error" id="edit-coffee-type-error"></span>
            </div>
            <div class="form-group">
                <label for="edit-coffee-brand">Brand:</label>
                <select id="edit-coffee-brand" name="brand">
                    <?php 
                    foreach ($coffee_brands as $key => $coffee_brand) {
                        ?>
                        <option <?=$coffee_edit['brand'] == $coffee_brand['id'] ? 'selected' : ''?> value="<?=$coffee_brand['id']?>"><?=$coffee_brand['name']?></option>
                        <?php
                    }
                    ?>
                </select>
                <span class="edit-coffee-error" id="edit-coffee-brand-error"></span>
            </div>
            <div class="form-group">
                <label for="edit-coffee-description">Description:</label><br>
                <textarea type="text" name="description" id="edit-coffee-description" placeholder="Please enter coffee description" rows="7"><?=$coffee_edit['description']?></textarea>
                <span class="edit-coffee-error" id="edit-coffee-description-error"></span>
            </div>
            <div class="form-group">
                <label for="edit-coffee-status">Status:</label>
                <select id="edit-coffee-status" name="status">
                    <option <?=$coffee_edit['status'] == 1 ? 'selected' : ''?> value="1">Enable</option>
                    <option <?=$coffee_edit['status'] == 0 ? 'selected' : ''?> value="0">Disable</option>
                </select>
                <span class="edit-coffee-error" id="edit-coffee-status-error"></span>
            </div>
            </div>
            <div class="clearfix">
                <button type="submit" name="btnsubmit">Submit</button>
            </div>
        </form>
    </div>
<script src="js/coffee/edit.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>