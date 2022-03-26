<?php require_once('view/layout/header.php'); ?>
<!-- Start Content -->
<link rel="stylesheet" href="css/coffee/create.css">
<div id="add">
    <form method="post" class="form" id="add_form" action="" enctype="multipart/form-data">
        <div id="header_name">
            <h2>Thêm thực đơn mới</h2>
        </div>
        <table>
            <tr>
                <th>Tên thực đơn mới:</th>
                <td><input type="text" name="name" id="create-coffee-name" placeholder="Nhập tên" required></td>
            </tr>
            <tr>
                <th>Hình ảnh:</th>
                <td><input type="file" name="image" id="create-coffee-image"></td>
            </tr>
            <tr>
                <th>Giá:</th>
                <td><input type="text" name="price" id="create-coffee-price" placeholder="Giá...." required></td>
            </tr>
            <tr>
                <th>Loại:</th>
                <td><input type="text" name="type" id="create-coffee-type" placeholder="Chọn loại sp" required></td>
            </tr>
            <tr>
                <th>Status:</th>
                <td><input type="text" name="status" id="create-coffee-status" placeholder="Nhập...." required></td>
            </tr>
            <tr>
                <th>Hãng/Hiệu:</th>
                <td><input type="text" name="brand" id="create-coffee-brand" placeholder="Nhập mã hãng" required></td>
            </tr>
            <tr>
                <th>Mô tả:</th>
                <td><textarea type="text" name="description" id="create-coffee-descrip" placeholder="Vui lòng nhập mô tả" cols="30" rows="7"></textarea></td>
            </tr>
            <tr>
                <th>Ngày tạo:</th>
                <td><input type="datetime-local" id="create-coffee-created_day" name="created_at"></td>
            </tr>
            <tr>
                <th>Ngày cập nhật:</th>
                <td><input type="datetime-local" id="create-coffee-updated_day" name="updated_at"></td>
            </tr>
        </table>
        <div class="clearfix">
            <button type="submit" name="btnsubmit">Thêm sản phẩm</button>
        </div>
    </form>
</div>
<script src="js/coffee/create.js"></script>
<!-- End Content -->
<?php require_once('view/layout/footer.php'); ?>