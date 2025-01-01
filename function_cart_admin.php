<?php 
include "ketnoi.php";
class cart extends ketnoi{
    public $id;
    public $tensp;
    public $img;
    public $dongia;
    public $soluong;
    public $thanhtien;
    public $dbill;
    
  
    function hienthi(){
        $sql = "SELECT cart.*  FROM cart inner join bill on cart.idbill = bill.id ";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    
    }
    function hienthisanpham_cart($id){
        $sql = "SELECT * FROM cart WHERE id = '$id'" ;
        $result = mysqli_query($this->conn, $sql);
        return $result;

       
    }

    function hienthiidbill(){
        $sql = "SELECT * FROM bill";
        $result_nhom = mysqli_query($this->conn, $sql);
        return $result_nhom;
    
    }

    function delete_cart($id){
        // unlink("./upload/".$this->tenanh."");
    $sql = "DELETE FROM `cart` WHERE  id = '$id'";
    $result = mysqli_query($this->conn, $sql);

    if($result) {
        echo"<script>alert('xóa thành công')</script>";
        echo "<script>window.history.back()</script>";
    }
    else
    {
        echo" <script>alert('lỗi')</script>";
    
    }
    
    }
    }
?>
    