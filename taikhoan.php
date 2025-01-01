
<?php include "headerquantri.php";?>
<?php
   
   include "function_taikhoan.php";
$taikhoan = new taikhoan();
$result = $taikhoan->hienthi();
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
    font-size: 30px;
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
   
     margin-left: 250px;
     margin-top: 10px;
     font-size: 15px;
}

.example{
padding: 0px 20px 0px 20px;
}
.table{
    padding: 0px 150px 0px 250px;
    font-size: 22px;
}
th,td{
   padding: 10px;
}

 </style>
</head>

<body>

    <div class="example">
        <div class="container">
            <div class="row">
                <h2>Quản Lý Tài Khoản </h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tên Đăng Nhập</th>
                            <th>Mật Khẩu</th>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th>Enable</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($count > 0){
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td>
                                    <?PHP echo $row["tendangnhap"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["matkhau"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["hoten"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["email"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["enable"] ?>
                                </td>
                                <td>
                                    <a href="suataikhoan.php?tendangnhap=<?PHP echo $row["tendangnhap"] ?>" style="text-decoration: none">Sửa</a>
                                    <a href="xoaform.php?tendangnhap=<?PHP echo $row["tendangnhap"] ?>" style="text-decoration: none">Xóa</a>
                                </td>

                            </tr>
                           
                        <?PHP
                    }
                     } ?> 
                    </tbody>
                </table>
              <button>  <a href="form.php" style="text-decoration: none; color: black; ">Thêm Tài Khoản</a></button>
            </div>
        </div>

    </div>
</body>

</html>