
<?php include "headerquantri.php";?>
<?php
   
   include "function_cart_admin.php";
$cart = new cart();
$result = $cart->hienthi();
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

.container td{
    background-color: white;
}
.container button:hover{
   background-color: yellow;
   color: black;

}
.container button{
     border-radius: 7px; 
   
     margin-left: 2000px !important;
     margin-top: 10px;
     font-size: 15px;
}

.example{
padding: 0px 20px 0px 20px;
}
.table {
    padding: 0px 150px 0px 380px !important;
    font-size: 22px;
}
th,td{
   padding: 10px !important;
}


 </style>
</head>

<body>

    <div class="example">
        <div class="container">
            <div class="row">
                <h2>Quản Lý Đặt Hàng</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên SP</th>
                            <th>IMG</th>
                            <th>Đơn GIá</th>
                            <th>Số Lượng</th>
                            <th>Thành Tiền</th>
                            <th>ID Bill</th>
                            <!-- <th> </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($count > 0){
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td>
                                    <?PHP echo $row["id"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["tensp"] ?>
                                </td>
                                <td>
                                <img src="upload/<?php echo $row['img']?>"alt="" width="50">
                                </td>
                                <td>
                                    <?PHP echo $row["dongia"]*1000 ?>
                                </td>
                                <td>
                                    <?PHP echo $row["soluong"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["dongia"]*$row["soluong"]*1000 ?>
                                </td>
                                <td>
                                    <?PHP echo $row["idbill"] ?>
                                </td>
                                <!-- <td>
                                   <a href="xoacart.php?id=<?PHP echo $row["id"] ?>" style="text-decoration: none">Xóa</a>
                                </td> -->
                               
                            </tr>
                           
                        <?PHP
                    }
                     } ?> 
                    </tbody>
                </table>
              
            </div>
        </div>

    </div>
</body>

</html>