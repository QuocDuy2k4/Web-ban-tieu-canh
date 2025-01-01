<?php include "headernguoidung.php";?>
<?php
   include "thuvien.php";
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    // Xóa tất cả
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    // Xóa sản phẩm trong giỏ hàng (xóa đơn xóa từng cái một)
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
        array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    // Lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])) {
        $img=$_POST['img1'];
        $tensp=$_POST['tensp'];
        $dongia=$_POST['dongiamoi'];
        $soluong=$_POST['soluong'];
    
        // Kiểm tra sp có trong giỏ hàng hay không

        $fl=0; // Kiểm tra sp có trùng trong giỏ hàng không?

        for($i=0;$i < sizeof($_SESSION['giohang']);$i++){

            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }

        }
        // Nếu không trùng sản phẩm trong giỏ hàng thì thêm mới
        if($fl==0) {

        // Thêm mới sản phẩm vào giỏ hàng
        $sp = [$img,$tensp,$dongia,$soluong];
        $_SESSION['giohang'][]=$sp;
        }
        // var_dump($_SESSION['giohang']);
    }

    // Unset giỏ hàng session chỉ khi ấn nút dongydathang
    if (isset($_POST['dongydathang'])) {
        // Set giỏ hàng về rỗng
    // Lưu trữ giỏ hàng vào biến tạm thời
    $cartBackup = $_SESSION['giohang'];
        unset($_SESSION['giohang']);
        $_SESSION['order_success'] = true;
    }
        

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/cart/bootstrap.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="assets/css/cart/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/cart/elegant-icons.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="assets/css/cart/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/cart/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/cart/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/cart/slicknav.min.css" type="text/css"> -->
    <link rel="stylesheet" href="assets/css/cart/style.css" type="text/css">
    
   
    <style>
        .shoping__cart__item img{
        width: 70px;
        height: 60px;
            }
            .container{
                padding-bottom: 100px;
            }
            .primary-btn {
            
            color: #ffffff;
            
        }
        table {
            border: 1px solid #000;
            border-collapse:collapse;
            width: 100%;
            font-size: 1.4rem;
        }
        thead th{
            width: 15%;
            border: 1px solid #000; 
        }

        tbody td {
            text-align: center;
            border: 1px solid #000;
            height: 120px;
        }

        tbody tr th{
            height: 60px;
            border: 1px solid #000 !important;
        }
        .cart__table-img {
            width: 60%;
            height: 100%;
        }
        .shoping__cart__table table thead .shoping__stt  {
            width: 6%;
        }
        .shoping__cart__table table thead .shoping__sl {
            width: 8%;
        }
        .shoping__cart__table table thead .shoping__cn {
            width: 8%;
        }
        .shoping__cart__table table thead th {
            padding-bottom: 0;
            color:green;
            font-family: 'Roboto';
        }
        .shoping__cart__table table tbody tr td {
            padding-top: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #0e0e0e;
            height: 100px;
        }
        .shoping__cart__table table thead th.shoping__product {
            text-align: center;
        }
        .primary-btn.cart-btn {
            color: white;
            padding: 14px 30px 12px;
            background-color: #7fad39;
            transition: background-color ease-in .2s , color ease-in .2s;
            cursor: pointer;
        }
        .primary-btn.cart-btn:hover{
            color:black;
            background-color:yellow;
        }
        .shoping__checkout .primary-btn {
            display: block;
            text-align: center;
            border: none;
            transition: background-color ease-in .2s , color ease-in .2s;
        }
        .shoping__checkout .primary-btn:hover {
            color : black;
            background-color:yellow
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
   

    <!-- Shoping Cart Section Begin -->
  
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
                <div class="container__cart-dad">
                <h3 class="container-product__heading"style ="color:green;font-weight:700;font-family: 'Roboto';">GIỎ HÀNG ĐÓ</h3>
                <div class="container-product__heading-border"></div>
                <form action="bill.php" method="post">
                <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                <th class="shoping__stt">STT</th>
                                    <th class="shoping__product">Ảnh</th>
                                    <!-- //img -->
                                    <th>Tên Sản phẩm</th>    
                                    <!-- //tên sản phẩm -->
                                    <th>Đơn giá</th>
                                    <th class="shoping__sl">Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th classs="shoping__cn">Chức Năng</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                
                                echo showgiohang();
                                
                                ?>
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="shoping__cart__btns">
                        <a href="fullsp.php" class="primary-btn cart-btn">Tiếp Tục Mua Hàng</a>
                        <a href="cart.php?delcart=1" class="primary-btn cart-btn cart-btn-right"><span class="fa fa-times" style="color:red"></span>
                            Xóa Giỏ Hàng</a>
                    </div>
                    <div class="shoping__checkout">
                  
                        <h5>Thông Tin Thanh Toán</h5>
                        <ul>
                            <!-- <li>Tổng Tiền Thanh Toán<span>$454.98</span></li> -->
                            <!-- <li>Thông Tin Thanh Toán <span></span></li> -->
                                        
                            <div class="checkout__input">
                                <p>Họ Và Tên<span>*</span>
                                <input type="text" name="hoten" >
                            </div>
                                 <div class="checkout__input">
                                <p>Số Điện Thoại<span>*</span>
                                <input type="text" name="dienthoai">
                            </div>
                            <div class="checkout__input">
                                <p>Địa Chỉ<span>*</span>
                                <input type="text" name="diachi">
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span>
                                <input type="text" name="email">
                            </div>
                        </ul>
                         <button class="primary-btn" type="submit" name="dongydathang">Đặt Hàng</button>
   
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    <!-- Shoping Cart Section End -->

    

    <!-- Js Plugins -->
    <script src="assets/js/cart/bootstrap.min.js"></script>
    <script src="assets/js/cart/jquery-3.3.1.min.js"></script>
    <script src="assets/js/cart/jquery.nice-select.min.js"></script>
    <script src="assets/js/cart/jquery-ui.min.js"></script>
    <script src="assets/js/cart/jquery.slicknav.js"></script>
    <script src="assets/js/cart/mixitup.min.js"></script>
    <script src="assets/js/cart/owl.carousel.min.js"></script>
    <script src="assets/js/cart/main.js"></script>


