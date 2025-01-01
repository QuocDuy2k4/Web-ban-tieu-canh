
<link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet">
<?php include "headerquantri.php";?>
    <?php
    include "function_sanpham.php";
    $sanpham = new sanpham();
    $masp = $_GET['masp'];
    $result_nhom = $sanpham->hienthinhom();
    $result = $sanpham->hienthisanpham($masp);
    $row = mysqli_fetch_array($result);
    if(isset($_POST['ok'])){
        $sanpham->masanpham  = isset($_POST['masanpham']) ? $_POST['masanpham'] : '';
        $sanpham->nhomid = isset($_POST['nhom_id']) ? $_POST['nhom_id'] : 0;
        $sanpham->tensanpham  = isset($_POST['tensp']) ? $_POST['tensp'] : '';
        $sanpham->mota= isset($_POST['mota']) ? $_POST['mota'] : '';
        $sanpham->dongiacu = isset($_POST['dongiacu']) ? $_POST['dongiacu'] : '';
        $sanpham->dongiamoi = isset($_POST['dongiamoi']) ? $_POST['dongiamoi'] : '';
        $sanpham->enable = isset($_POST['enable']) ? $_POST['enable'] : 0;
        $sanpham->soluong = isset($_POST['soluong']) ? $_POST['soluong'] : '';
        $sanpham->diemnoibat = isset($_POST['diemnoibat']) ? $_POST['diemnoibat'] : '';
        $sanpham->dieukienchamsoc = isset($_POST['dieukienchamsoc']) ? $_POST['dieukienchamsoc'] : '';
        $sanpham->cachchamsoc = isset($_POST['cachchamsoc']) ? $_POST['cachchamsoc'] : '';
        $sanpham->xuatxu= isset($_POST['xuatxu']) ? $_POST['xuatxu'] : '';
        $sanpham->ngaydang = isset($_POST['ngaydang']) ? $_POST['ngaydang'] : '';
        $sanpham->kichthuoc = isset($_POST['kichthuoc']) ? $_POST['kichthuoc'] : '';
        $sanpham->nguoidang = isset($_POST['nguoidang']) ? $_POST['nguoidang'] : '';
        $sanpham->giongloai = isset($_POST['giongloai']) ? $_POST['giongloai'] : '';
        // $sanpham->tenanhcu = $row['img'];
        $sanpham->updatesanpham();
    }
    ?>
<!DOCTYPE html>
<html lang="en">


<body>

    <div class="container">
        <h2>Sửa sản Phẩm</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
            <label for="nhom_id">Nhóm Sản Phẩm:</label>
            <select class="form-control" id="nhom_id" name="nhom_id">
                <?php while ($row_nhom = mysqli_fetch_assoc($result_nhom)) { ?>
                    <option value="<?php echo $row_nhom["id"] ?>"><?php if($row_nhom["id"]==$row["nhom_id"])?>
                        <?php echo $row_nhom["tennhom"] ?>
                    </option>
                <?php } ?>
            </select>
                </div>
                <div class="form-group">
              
                <label for="masp">Mã Sản Phẩm</label>
                <input type="text" class="form-control" id="ma" name="ma"
                    value="<?php echo $row['masp'] ?>" disabled > <!--dùng dể trang trí cho đẹp cố định k cho sửa-->
                    <input type="hidden" class="form-control" id="masanpham" name="masanpham"
                     value="<?php echo $row['masp'] ?>" ><!-- // cho hidden để ẩn đi lấy biến truyền giá trị  -->
            </div>
            <div class="form-group">
                <label for="tensp">Tên sản Phẩm:</label>
                <input type="text" class="form-control" name="tensp" value="<?php echo $row["tensp"] ?> ">
            </div>
            <div class="form-group">
                <label for="mota">Mô Tả:</label>
                <textarea type="text" class="form-control"  rows="5" name="mota" ><?php echo $row["mota"] ?> </textarea>
            </div>
            <div class="form-group">
                <label for="dongia">Đơn giá Cũ:</label>
                <input type="number" value="<?php echo $row['dongiacu'];?>"class="form-control" name="dongiacu" >
            </div>
            <div class="form-group">
                <label for="dongia">Đơn giá Mới:</label>
                <input type="number" value="<?php echo $row['dongiamoi'];?>"class="form-control" name="dongiamoi" >
            </div>
            <div class="form-group">
                <label for="img">Ảnh 1:</label>
                <input type="file" class="form-control" name="img1" value="<?php echo $row['img1'] ?> ">
                <img src="./upload/<?php echo $row["img1"]?>"width="60px" height="80px">
            </div>
            <div class="form-group">
                <label for="img">Ảnh 2:</label>
                <input type="file" class="form-control" name="img2" value="<?php echo $row['img2'] ?> ">
                <img src="./upload/<?php echo $row["img2"]?>"width="60px" height="80px">
            </div>
            <div class="form-group">
                <label for="img">Ảnh 3:</label>
                <input type="file" class="form-control" name="img3" value="<?php echo $row['img3'] ?> ">
                <img src="./upload/<?php echo $row["img3"]?>"width="60px" height="80px">
            </div>
            <div class="form-group">
                <label for="img">Ảnh 4:</label>
                <input type="file" class="form-control" name="img4" value="<?php echo $row['img4'] ?> ">
                <img src="./upload/<?php echo $row["img4"]?>"width="60px" height="80px">
            </div>
            <div class="form-group">
                <label for="mota">Số Lượng:</label>
                <input type="number" value="<?php echo $row['soluong'];?>"class="form-control" name="soluong" >
            </div>
            <div class="form-group">
                <label for="mota">Điểm Nổi Bật:</label>
                <textarea  class="form-control"  rows="3" name="diemnoibat"><?php  echo $row['diemnoibat'] ?> </textarea>
            </div>
            <div class="form-group">
                <label for="mota">Điều Kiện Chăm Sóc:</label>
                <textarea  class="form-control"  rows="3" name="dieukienchamsoc"><?php  echo $row['dieukienchamsoc'] ?> </textarea>
            </div>
            <div class="form-group">
                <label for="mota">Cách Chăm Sóc:</label>
                <textarea  class="form-control"  rows="3" name="cachchamsoc"><?php  echo $row['cachchamsoc'] ?> </textarea>
            </div>
            <div class="form-group">
                <label for="tensp">Xuất Xứ:</label>
                <input type="text" class="form-control" name="xuatxu" value="<?php echo $row["xuatxu"] ?> ">
            </div>
            <div class="form-group">
                <label for="tensp">Ngày Đăng:</label>
                <input type="text" class="form-control" name="ngaydang" value="<?php echo $row["ngaydang"] ?> ">
            </div>
            <div class="form-group">
                <label for="tensp">Kích Thước:</label>
                <input type="text" class="form-control" name="kichthuoc" value="<?php echo $row["kichthuoc"] ?> ">
            </div>
            <div class="form-group">
                <label for="tensp">Người Đăng:</label>
                <input type="text" class="form-control" name="nguoidang" value="<?php echo $row["nguoidang"] ?> ">
            </div>
            <div class="form-group">
                <label for="tensp">Giống Loài:</label>
                <input type="text" class="form-control" name="giongloai" value="<?php echo $row["giongloai"] ?> ">
            </div>
            <div class="form-group form-check">s
                
                <input class="form-check-input" type="checkbox" name="enable" value="1" <?php if ($row['enable'] == 1)
                        echo "checked" ?> >Hiển Thị</label>
            </div>
            <button type="submit" class="btn btn-primary" name="ok">Cập nhật</button>
            <a href="sanpham.php" class="btn btn-primary">Trở lại</a>
        </form>
    </div>
</body>

</html>