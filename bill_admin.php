
<?php include "headerquantri.php";?>
<?php
   include "thuvien.php";
   include "function_bill_admin.php";
$bill = new bill();
$result = $bill->hienthi();
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
    padding: 0px 150px 0px 270px !important;
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
                <h2>Quản Lý Thông Tin Đơn Đặt Hàng</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Thanh Toán</th>
                            <th></th>
                            <!-- <th></th> -->
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
                                    <?PHP echo $row["name"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["address"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["tel"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["email"] ?>
                                </td>
                                <td>
                                <?PHP echo $row["total"]*1000 ?>
                                </td>
                                <!-- <td>
                                   
                                </td> -->
                                <td>
                                   <a href="xoabill.php?id=<?PHP echo $row["id"] ?>" style="text-decoration: none">Hủy đơn</a>
                                </td>
                                <!-- <td>
                                   <a href="" style="text-decoration: none">Đã Vận Chuyển</a>
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