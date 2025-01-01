
<link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet">
<?php include "headerquantri.php";
include "function_nhomsanpham.php";
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
   
     margin-left: 10px;

     font-size: 15px;
}

.example{
padding: 0px 20px 0px 20px;
}
.table{
    padding: 0px 80px 0px 150px;
    font-size: 22px;
}
th,td{
   padding: 10px;
}

 </style>
</head>

<body>
    <?php
   $sanphamnhom = new nhomsanpham();
   $result = $sanphamnhom->hienthinhom();
   $count= mysqli_num_rows($result);
    ?>
    <div class="example">
        <div class="container">
            <div class="row">
                <h2>Quản Lý Nhóm Sản Phẩm </h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                         
                            <th>Tên Nhóm sản Phẩm</th>
                    
                            <th> Ghi Chú</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td>
                                    <?PHP echo $row["id"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["tennhom"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["ghichu"] ?>
                                </td>
                              
                                <td>
                                <a href="suasanpham_nhom.php?id=<?php echo $row["id"]; ?>" style="text-decoration: none">Sửa</a>
                                <a href="xoasanpham_nhom.php?id=<?php echo $row["id"]; ?>" style="text-decoration: none">Xóa</a>
                            </td>

                            </tr>
                           
                        <?PHP } ?> 
                    </tbody>
                </table>
              <button>  <a href="formsanpham_nhom.php" style="text-decoration: none; color: black; ">Thêm Nhóm Sản Phẩm Sắc Đẹp</a></button>
            </div>
        </div>

    </div>
</body>

</html>