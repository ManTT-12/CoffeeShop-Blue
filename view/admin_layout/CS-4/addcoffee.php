<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>CoffeeShop_Blue</title>
</head>

<body>
    <main>
        <div>
            <div id="add">
                <form action="xulyAddCoffee.php" method="post" class="form">
                    <h2 style="text-align: center;">Thêm thực đơn mới</h2>
                    <div style="padding-top: 10px;">
                        <table>
                            <!-- <tr>
                                <th>Mã thực đơn mới:</th>
                                <td><input type="text" name="id" value="" placeholder="Nhập mã" required></td>
                            </tr> -->

                            <tr>
                                <th>Tên thực đơn mới:</th>
                                <td><input type="text" name="name" value="" placeholder="Nhập tên" required></td>
                            </tr>
                            <tr>
                                <th>Hình ảnh:</th>
                                <td><input type="file" name="image"></td>
                            </tr>
                            <tr>
                                <th>Giá:</th>
                                <td><input type="text" name="price" placeholder="Giá...." required></td>
                            </tr>
                            <tr>
                                <th>Loại:</th>
                                <td><input type="text" name="type" placeholder="Chọn loại sp" required></td>
                            </tr>
                            <tr>
                                <th>Status:</th>
                                <td><input type="text" name="status" placeholder="Nhập...." required></td>
                            </tr>
                            <tr>
                                <th>Hãng/Hiệu:</th>
                                <td><input type="text" name="brand" placeholder="Nhập mã hãng" required></td>
                            </tr>
                            <tr>
                                <th>Mô tả:</th>
                                <td><textarea type="text" name="description" placeholder="Vui lòng nhập mô tả" cols="30" rows="7"></textarea></td>
                            </tr>
                            <tr>
                                <th>Ngày tạo:</th>
                                <td><input type="datetime-local" name="created_at"></td>
                            </tr>
                            <tr>
                                <th>Ngày cập nhật:</th>
                                <td><input type="datetime-local" name="updated_at"></td>
                            </tr>
                            <tr>
                                <th>Ngày kết thúc:</th>
                                <td><input type="datetime-local" name="ended_at"></td>
                            </tr>
                        </table>
                    </div>

                    <div class="clearfix">
                        <button type="button" name="cancelbtn">Trở về</button>
                        <button type="submit" name="btnsubmit">Thêm sản phẩm</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>