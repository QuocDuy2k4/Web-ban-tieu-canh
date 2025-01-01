
<link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet">
<?php
   include "headerquantri.php";
   include "function_sanpham.php";
   
 
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .container h2,
        label {
            color: black;
        }
    </style>
</head>

<body>
<?php

   $sanpham = new sanpham();
   $result_nhom= $sanpham->hienthinhom();
   if(isset($_POST['tbOk'])){
       $sanpham->masanpham = isset($_POST['masp']) ? $_POST['masp'] : '';
       $sanpham->nhomid= isset($_POST['nhom_id']) ? $_POST['nhom_id'] : '';
       $sanpham->tensanpham = isset($_POST['tensp']) ? $_POST['tensp'] : '';
       $sanpham->mota= isset($_POST['mota']) ? $_POST['mota'] : '';
       $sanpham->dongiacu = isset($_POST['dongiacu']) ? $_POST['dongiacu'] : '';
       $sanpham->dongiamoi = isset($_POST['dongiamoi']) ? $_POST['dongiamoi'] : '';
       $sanpham->enable = isset($_POST['enable']) ? $_POST['enable'] : 0;
       $sanpham->soluong = isset($_POST['soluong']) ? $_POST['soluong'] : '';
       $sanpham->diemnoibat = isset($_POST['diemnoibat']) ? $_POST['diemnoibat'] : '';
       $sanpham->dieukienchamsoc= isset($_POST['dieukienchamsoc']) ? $_POST['dieukienchamsoc'] : '';
       $sanpham->cachchamsoc = isset($_POST['cachchamsoc']) ? $_POST['cachchamsoc'] : '';
       $sanpham->xuatxu= isset($_POST['xuatxu']) ? $_POST['xuatxu'] : '';
       $sanpham->ngaydang = isset($_POST['ngaydang']) ? $_POST['ngaydang'] : '';
       $sanpham->kichthuoc = isset($_POST['kichthuoc']) ? $_POST['kichthuoc'] : '';
       $sanpham->nguoidang = isset($_POST['nguoidang']) ? $_POST['nguoidang'] : '';
       $sanpham->giongloai = isset($_POST['giongloai']) ? $_POST['giongloai'] : '';
       $sanpham->themsanpham();

   }
   ?>


    <div class="container">
    <h2>Thêm Sản Phẩm</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Nhóm Sản Phẩm:</label>
            <select class="form-control" id="nhom_id" name="nhom_id">
                <?php while ($row_nhom = mysqli_fetch_assoc($result_nhom)) { ?>
                    <option value="<?php echo $row_nhom["id"] ?>">
                        <?php echo $row_nhom["tennhom"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="masp">Mã Sản Phẩm:</label>
            <input type="text" class="form-control" name="masp" required>
        </div>
        <div class="form-group">
            <label for="tensp">Tên Sản Phẩm:</label>
            <input type="text" class="form-control" name="tensp" required>
        </div>
        <div class="form-group">
            <label for="mota">Mô Tả:</label>
            <textarea type="text" rows="5" class="form-control" name="mota"></textarea>
        </div>
        <div class="form-group">
            <label for="dongia">Đơn Giá Cũ:</label>
            <input type="number" class="form-control" name="dongiacu">
        </div>
        <div class="form-group">
            <label for="dongia">Đơn Giá Mới:</label>
            <input type="number" class="form-control" name="dongiamoi">
        </div>
        <div class="form-group">
            <label for="img">Ảnh 1:</label>
            <input type="file" class="form-control-file border" name="img1">
       
        </div>
        <div class="form-group">
            <label for="img">Ảnh 2:</label>
            <input type="file" class="form-control-file border" name="img2">
       
        </div>
        <div class="form-group">
            <label for="img">Ảnh 3:</label>
            <input type="file" class="form-control-file border" name="img3">
       
        </div>
        <div class="form-group">
            <label for="img">Ảnh 4:</label>
            <input type="file" class="form-control-file border" name="img4">
       
        </div>
        <div class="form-group">
            <label for="soluong">Số Lượng:</label>
            <input type="number"  class="form-control" name="soluong">
        </div>
        <div class="form-group">
            <label for="ghichu">Điểm Nổi Bât:</label>
            <textarea type="text" rows="3" class="form-control" name="diemnoibat"></textarea>
        </div>
        <div class="form-group">
            <label for="ghichu">Điều Kiện Chăm Sóc:</label>
            <textarea type="text" rows="3" class="form-control" name="dieukienchamsoc"></textarea>
        </div>
        <div class="form-group">
            <label for="ghichu">Cách Chăm Sóc:</label>
            <textarea type="text" rows="3" class="form-control" name="cachchamsoc"></textarea>
        </div>
        <div class="form-group">
            <label for="tensp">Xuất Xứ:</label>
            <input type="text" class="form-control" name="xuatxu" >
        </div>
        <div class="form-group">
            <label for="tensp">Ngày Đăng:</label>
            <input type="text" class="form-control" name="ngaydang" >
        </div>
        <div class="form-group">
            <label for="tensp">Kích Thước:</label>
            <input type="text" class="form-control" name="kichthuoc" >
        </div>
        <div class="form-group">
            <label for="tensp">Người Đăng:</label>
            <input type="text" class="form-control" name="nguoidang" >
        </div>
        <div class="form-group">
            <label for="tensp">Giống Loài:</label>
            <input type="text" class="form-control" name="giongloai">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="enable" value="1" checked> Hiển Thị
            </label>
        </div>
        <button type="submit" class="btn btn-primary" name="tbOk">Chấp nhận</button>
    </form>
</div>
</body>