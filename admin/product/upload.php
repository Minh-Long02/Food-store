<?php
require_once('../database/dbhelper.php');

$id = $title = $price = $number = $thumbnail = $content = $id_category = "";

// Kiểm tra xem có tham số id được truyền qua URL không
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Truy vấn sản phẩm từ cơ sở dữ liệu dựa trên id
    $sql = 'select * from product where id=' . $id;
    $product = executeSingleResult($sql);

    // Nếu sản phẩm tồn tại, gán các giá trị cho các biến tương ứng
    if ($product != null) {
        $title = $product['title'];
        $price = $product['price'];
        $number = $product['number'];
        $thumbnail = $product['thumbnail'];
        $content = $product['content'];
        $id_category = $product['id_category'];
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cập Nhật Sản Phẩm</title>
    <!-- Các tệp CSS và JavaScript cần thiết -->
</head>

<body>
    <!-- Phần giao diện người dùng -->
    <!-- Biểu mẫu chỉnh sửa sản phẩm với các trường đã được điền với thông tin của sản phẩm -->
</body>

</html>
