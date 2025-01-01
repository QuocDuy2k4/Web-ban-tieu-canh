<?php include "headerquantri.php";?>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "vuthibacdk12cntt2";
  //B1: Create connetion
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  //check connection
  
  if (!$conn) {
      die("connection failer" . mysqli_connect_error());
  }
//lấy thông tin cần xóa
$tendangnhap=$_GET['tendangnhap'];
$sql="DELETE FROM  `taikhoan` WHERE tendangnhap='$tendangnhap' ";
$result=mysqli_query($conn,$sql);


//thông báo
if($result) {
    echo"<script>alert('xóa thành công')</script>";
    echo "<script>window.history.back()</script>";
}
else
{
    echo" <script>alert('lỗi')</script>";

}
?>