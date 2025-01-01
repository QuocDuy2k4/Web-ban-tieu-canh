<?php
session_start();
include "thuvien.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['huy_don_hang'])) {
    $order_id = $_POST['order_id'];
    
    // Gọi hàm để hủy đơn hàng (bạn cần triển khai hàm này trong tệp thuvien.php)
    huyDonHang($order_id);

    // Cập nhật trạng thái order_success để hiển thị lại giỏ hàng
    $_SESSION['order_success'] = true;

    // Thêm mã JavaScript để hiển thị thông báo alert
    echo '<script>alert("Đơn hàng đã được hủy thành công!");</script>';

    // Chuyển hướng người dùng trở lại trang đơn hàng
    header("Location: xemdonhang_dadat.php");
    exit();
} else {
    // Nếu không có yêu cầu hủy đơn hàng, chuyển hướng về trang chủ hoặc trang khác
    header("Location: index.php");
    exit();
}
?>
