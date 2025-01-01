
<?php
   include "headerquantri.php";
    include "function_sanpham.php";
    $sanpham = new sanpham();
    $result = $sanpham->hienthi();
    $count= mysqli_num_rows($result);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
 <style>
.container{
    background-color: sandybrown;
    padding-bottom: 10px;
}
.container th,.container tr,.container h2,.container  td{
    color: black;
    border-color: black;
}
.container th{
    text-align: center;
    background-color: yellowgreen;
    border-color: black !important;
}
.container h2{
    text-align: center;
    width: 100%;
    padding-top: 10px;
    font-weight: 700;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 20px;
}
.container td{
    background-color: white;
}
.container button:hover{
   background-color: yellow;
   color: black;

}
.container button{
     border-radius: 7px; 
   
     margin-left: 25px;
     margin-top: 10px;
}
.example{
padding: 0px 10px 0px 10px;
}
.table{
    padding: 0px 20px 0px 20px;
}

 </style>
</head>

<body>

    
    <div class="example">
        <div class="container">
            <div class="row">
                <h2>Quản Lý Sản Phẩm </h2>
                <table class="table table-bordered">
                    <thead>
                        <tr> 
                            <th> </th>
                            <th>Mã sản phẩm</th>
                            <th>Nhóm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Mô Tả</th>
                            <th>Đơn Giá Cũ</th>
                            <th> Đơn Giá Mới </th>
                            <th> Ảnh 1 </th>
                            <th> Ảnh 2</th>
                            <th>Ảnh 3</th>
                            <th>Ảnh 4</th>
                            <th>Enable</th>
                            <th>Số Lượng</th>
                            <th>Điểm Nổi Bật</th>
                            <th> Điều Kiện Chăm Sóc </th>
                            <th>Cách Chăm Sóc</th>
                            <th> Xuất Xứ</th>
                            <th>Ngày Đăng</th>
                            <th>Kích Thước</th>
                            <th>Người Đăng</th>
                            <th>Giống Loài</th>
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($count > 0){
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                            <td>
                                    <a href="suasanpham.php?masp=<?PHP echo $row["masp"] ?>" style="text-decoration: none">Sửa</a>
                                    <a href="xoasanpham.php?masp=<?PHP echo $row["masp"] ?>" style="text-decoration: none">Xóa</a>
                                </td>
                                <td>
                                    <?PHP echo $row["masp"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["tennhom"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["tensp"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["mota"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["dongiacu"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["dongiamoi"] ?>
                                </td>
                                <td>
                                   <img src="./upload/<?php echo $row['img1']?>"alt="" width="50">

                                </td>
                                <td>
                                   <img src="./upload/<?php echo $row['img2']?>"alt="" width="50">

                                </td>
                                <td>
                                   <img src="./upload/<?php echo $row['img3']?>"alt="" width="50">

                                </td>
                                <td>
                                   <img src="./upload/<?php echo $row['img4']?>"alt="" width="50">

                                </td>
                                <td>
                                    <?PHP echo ($row["enable"]) ?>
                                </td>
                                 <td>
                                    <?PHP echo $row["soluong"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["diemnoibat"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["dieukienchamsoc"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["cachchamsoc"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["xuatxu"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["ngaydang"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["kichthuoc"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["nguoidang"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["giongloai"] ?>
                                </td>
                               

                            </tr>
                           
                        <?PHP }
                         }   ?> 
                    </tbody>
                </table>
              <button>  <a href="formsanpham.php" style="text-decoration: none; color: black; ">Thêm Sản Phẩm</a></button>
            </div>
        </div>

    </div>
</body>
</html>