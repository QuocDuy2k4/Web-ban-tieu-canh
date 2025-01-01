<?php 
include "ketnoi.php";
 class nhomsanpham extends ketnoi{
    public $id;
    public $tennhom;
    public $ghichu;
    function insert(){
        $sql = "INSERT INTO `sanpham_nhom`(`id`, `tennhom`, `ghichu`)
        VALUES ('".$this->id."','".$this->tennhom."','".$this->ghichu."')";
        $result = mysqli_query($this->conn, $sql);
        if($result){
           echo "<script>alert('Thêm thành công')</script>";
           echo "<script>window.location = 'sanpham_nhom.php'</script>";
        }
        else{
           echo "<script>alert('Lỗi')</script>";
        }
    }
    function hienthinhom(){
        $sql = "SELECT * FROM sanpham_nhom";
        $result_nhom = mysqli_query($this->conn, $sql);
        return $result_nhom;
    
    }
    function hienthiid($id){
        $sql = "SELECT * FROM `sanpham_nhom` WHERE id = '$id'" ;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function update(){
        $sql = "UPDATE `sanpham_nhom` SET
        `id`='".$this->id."',
        `tennhom`='".$this->tennhom."',
        `ghichu`='".$this->ghichu."' 
        WHERE id = '".$this->id."'";
        $result = mysqli_query($this->conn, $sql);
        if($result){
                 echo "<script>alert('Sửa thành công')</script>";
                 echo "<script> window.location ='sanpham_nhom.php' </script>";
        }
        else{
            echo "<script> alert('Lỗi')</script>";
        }
    }
    function delete($id){
        $sql = "DELETE  FROM `sanpham_nhom` WHERE id='$id'";
        $result = mysqli_query($this->conn, $sql);
        if($result){
            echo "<script> alert('Xóa thành công') </script>";
            echo "<script> window.location = 'sanpham_nhom.php' </script>";
        
        }
        else{
            echo "<script> alert('Lỗi') </script>";
        
        }
    
    
    }
    }
?>