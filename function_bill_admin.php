<?php 

include "ketnoi.php";

class bill extends ketnoi{
    public $id;
    public $name;
    public $address;
    public $tel;
    public $email;
    public $total;
    public $pttt;
    
    function hienthi(){
        $sql = "SELECT * FROM `bill` ";
        $result = mysqli_query($this->conn,$sql);
        return $result;
    }
    function hienthi_bill($id){
        $sql = "SELECT * FROM bill    WHERE id = '$id'";
        $result = mysqli_query($this->conn,$sql);
        return $result;
    
    }
    function delete_bill($id){
        $sql = "DELETE FROM `bill` WHERE id = '$id'";
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