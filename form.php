
<link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet">
<?php include "headerquantri.php";
include "function_taikhoan.php";
$taikhoan = new taikhoan();
if(isset($_POST['tbOk'])){
   $taikhoan->tendangnhap=isset($_POST['tendangnhap']) ? $_POST['tendangnhap'] : '';
   $taikhoan->matkhau=isset($_POST['matkhau']) ? $_POST['matkhau'] : '';
   $taikhoan->hoten=isset($_POST['hoten']) ? $_POST['hoten'] : '';
   $taikhoan->email=isset($_POST['email']) ? $_POST['email'] : '';
   $taikhoan->enable=isset($_POST['enable']) ? $_POST['enable'] : 0 ;
   $taikhoan->insert1();

   
}
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
    <style>
     .container h2,label{
          color: black ;
       }

    </style>
</head>
<body>

<div class="container" >
    <h2>Thêm Tài Khoản</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="email">Tên đăng nhập:</label>
            <input type="text" class="form-control" id="tendangnhap" name="tendangnhap" required>
        </div>
        <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control"  name="matkhau" required>
        </div>
        <div class="form-group">
            <label for="email">Họ tên:</label>
            <input type="text" class="form-control" name="hoten" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" >
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="enable" value="1" checked> Kích hoạt </label>
</div>
<button type="submit" class="btn btn-primary" name="tbOk">Chấp nhận</button>
    </form>
</div>
</body>
</html> 
