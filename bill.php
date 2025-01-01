
<?php include "headernguoidung.php";?>
   <?php include "thuvien.php";
    if(isset($_POST['dongydathang'])){

        // Lấy thông tin khách hàng từ form để tạo đơn hàng
        $name=$_POST['hoten'];
        $address=$_POST['diachi'];
        $tel=$_POST['dienthoai'];
        $email=$_POST['email'];
        $total=tongdonhang();
        $pttt=0;

        // Insert đơn hàng - Tạo đơn hàng mới , // Lấy thông tin giỏ hàng từ session + id đơn hàng vừa tạo

        $idbill=taodonhang($name, $address, $tel,$email,$total,$pttt);

        // Insert vào bảng giỏ hàng 

        for($i=0;$i < sizeof($_SESSION['giohang']);$i++){
            $tensp = $_SESSION['giohang'][$i][1];
            $img = $_SESSION['giohang'][$i][0];
            $dongia = intval($_SESSION['giohang'][$i][2]); // intval dùng để biến thành kiểu số , bên dưới cũng vậy 
            $soluong = intval($_SESSION['giohang'][$i][3]);
            $thanhtien = $dongia * $soluong*1000;
            taogiohang($tensp, $img, $dongia,$soluong,$thanhtien,$idbill);
        }

        // Show confirm giỏ hàng

            $ttkh=' <h2> Mã đơn hàng : '.$idbill.' </h2>
            <div>
            <ul>                        
                <div class="checkout__input">
                    <p>Họ Và Tên<span>*</span>
                    <input type="text" value="'.$name.'"  >
                </div>
                <div class="checkout__input">
                    <p>Số Điện Thoại<span>*</span>
                    <input type="text" value="'.$tel.'">
                </div>
                <div class="checkout__input">
                    <p>Địa Chỉ<span>*</span>
                    <input type="text" value="'.$address.'">
                </div>
                <div class="checkout__input">
                    <p>Email<span>*</span>
                    <input type="text" value="'.$email.'" >
                </div>
            </ul>
            </div>';
        $ttgh = showgiohang1();

        // Unset giỏ hàng session

    
    unset($_SESSION['giohang']);
  echo "<script> alert('Bạn đã đặt hàng thành công!') </script>";


       

    }
    $_SESSION['giohang'] = [];

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
            color: green;
        }
        .cart__table-img {
            width: 60%;
            height: 100%;
        }
        .shoping__cart__table table thead .shoping__stt  {
            width: 6%;
        }
        .shoping__cart__table table thead th {
            padding-bottom: 0;
            color:green;
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
    </style>
</head>

<body>
    <!-- Page Preloder -->
   

    <!-- Shoping Cart Section Begin -->
  
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="shoping__checkout">

                <div class="cart__fill">   
                            
                            <?php echo $ttkh; ?>    

                </div>
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
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo $ttgh; ?>
                                </tbody>

                        </table>
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



