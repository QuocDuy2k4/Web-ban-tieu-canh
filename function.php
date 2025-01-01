<?php 
include "ketnoi.php";

    function checklogin($tendn,$mk){
        global $conn;
        $mkMD5=md5($mk);
            $sql = "SELECT * FROM `taikhoan` Where
             (`tendangnhap`='$tendn' )and ( `matkhau`='$mkMD5')";
            $result = mysqli_query($conn,$sql);
            $numrow=mysqli_num_rows($result);
            if ($numrow!=0) {
               return true;
            }
            else
            {
                return false;
            }
            }
?>