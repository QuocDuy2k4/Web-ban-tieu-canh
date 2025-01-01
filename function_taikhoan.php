<?php 
include "ketnoi.php";
class taikhoan extends ketnoi{
    public $tendangnhap;
    public $matkhau;
    public $hoten;
    public $email;
    public $enable;
function hienthi(){
    $sql = "SELECT * FROM `taikhoan`";
    $result = mysqli_query($this->conn,$sql);
    return $result;
}
function hienthiid($id){
    $sql = "SELECT * FROM taikhoan WHERE tendangnhap = '$id'";
    $result = mysqli_query($this->conn,$sql);
    return $result;

}
function delete($ten){
    $sql = "DELETE FROM `taikhoan` WHERE tendangnhap = '$ten'";
    $result = mysqli_query($this->conn, $sql);

   if($result) {
    echo"<script>alert('xóa thành công')</script>";
    echo "<script> window.location ='taikhoan.php' </script>";
}
else
{
    echo" <script>alert('lỗi')</script>";

}
}
function insert(){
    $sql = "INSERT INTO `taikhoan`(`tendangnhap`, `matkhau`, `hoten`, `email`,`enable`) 
    VALUES ('".$this->tendangnhap."','".$this->matkhau."','".$this->hoten."','".$this->email."','".$this->enable."')";
    $result = mysqli_query($this->conn,$sql);
       if($result){
        echo "<script>alert(' Bạn Đã Đăng Kí thành công')</script>";
        //trở về trang xem
        echo "<script> window.location ='login.php' </script>";
 
       }
       else{
           echo "<script>alert('lỗi')</script>";
       } 
    return $result;

}
function insert1(){
    $sql = "INSERT INTO `taikhoan`(`tendangnhap`, `matkhau`, `hoten`, `email`,`enable`) 
    VALUES ('".$this->tendangnhap."','".$this->matkhau."','".$this->hoten."','".$this->email."','".$this->enable."')";
    $result = mysqli_query($this->conn,$sql);
       if($result){
        echo "<script>alert('thành công')</script>";
        //trở về trang xem
        //header("locatin:takhoan.php");
        echo "<script> window.location ='taikhoan.php' </script>";
       }
       else{
           echo "<script>alert('lỗi')</script>";
       } 
    return $result;

}
function update(){

$sql = "UPDATE`taikhoan` SET
 `matkhau`='".$this->matkhau."',
 `hoten`='".$this->hoten."',
 `email`='".$this->email."',
 `enable`='".$this->enable."'
  WHERE `tendangnhap`='".$this->tendangnhap."'";
$result = mysqli_query($this->conn,$sql);

if ($result) {
    echo "<script>alert(' Sửa Thành công!')</script>";
    echo "<script> window.location ='taikhoan.php' </script>";
}
return $result;
}





};