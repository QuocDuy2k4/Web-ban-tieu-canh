<?php 
include "ketnoi.php";
class sanpham extends ketnoi{
    public $masanpham;
    public $nhomid;
    public $tensanpham;
    public $mota;
    public $dongiacu;
    public $dongiamoi;
    public $img1;
    public $img2;
    public $img3;
    public $img4;
    public $enable;
    public $soluong;
    public $diemnoibat;
    public $dieukienchamsoc;
    public $cachchamsoc;
    public $xuatxu;
    public $ngaydang;
    public $kichthuoc;
    public $nguoidang;
    public $giongloai;

    public $tenanhcu;
    public $tenanh;
    function hienthi(){
        $sql = "SELECT sanpham1.*, sanpham_nhom.tennhom FROM sanpham1, sanpham_nhom WHERE sanpham1.nhom_id = sanpham_nhom.id ";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    
    }
    function hienthisanpham($masp){
        $sql = "SELECT * FROM sanpham1 WHERE masp = '$masp'" ;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    
    }
    function hienthinhom(){
        $sql = "SELECT * FROM sanpham_nhom";
        $result_nhom = mysqli_query($this->conn, $sql);
        return $result_nhom;
    
    }
    function themsanpham(){
        $sql = "INSERT INTO `sanpham1`(`masp`, `nhom_id`, `tensp`, `mota`, `dongiacu`, `dongiamoi`,  `enable`, `soluong`, `diemnoibat`, `dieukienchamsoc`, `cachchamsoc`, `xuatxu`, `ngaydang`, `kichthuoc`, `nguoidang`, `giongloai`)
    VALUES ('".$this->masanpham."','".$this->nhomid."','".$this->tensanpham."','".$this->mota."','".$this->dongiacu."','".$this->dongiamoi."', '".$this->enable."','".$this->soluong."','".$this->diemnoibat."', '".$this->dieukienchamsoc."','".$this->cachchamsoc."','".$this->xuatxu."', '".$this->ngaydang."','".$this->kichthuoc."','".$this->nguoidang."', '".$this->giongloai."')";
    $result = mysqli_query($this->conn, $sql);
   
    $target_dir1 = "upload/";
$filename1 = basename($_FILES["img1"]["name"]);
$targer_file1 = $target_dir1.$filename1;
if(move_uploaded_file($_FILES["img1"]["tmp_name"], $targer_file1)){
    $sql = "UPDATE `sanpham1` SET `img1` = '$filename1' WHERE `masp` = '".$this->masanpham."'";
   $result = mysqli_query($this->conn, $sql);
}

   $target_dir2 = "upload/";
   $filename2 = basename($_FILES["img2"]["name"]);
   $targer_file2 = $target_dir2.$filename2;
   if(move_uploaded_file($_FILES["img2"]["tmp_name"], $targer_file2)){
       $sql = "UPDATE `sanpham1` SET `img2` = '$filename2' WHERE `masp` = '".$this->masanpham."'";
      $result = mysqli_query($this->conn, $sql);

   }

      $target_dir3 = "upload/";
      $filename3 = basename($_FILES["img3"]["name"]);
      $targer_file3 = $target_dir3.$filename3;
      if(move_uploaded_file($_FILES["img3"]["tmp_name"], $targer_file3)){
          $sql = "UPDATE `sanpham1` SET `img3` = '$filename3' WHERE `masp` = '".$this->masanpham."'";
         $result = mysqli_query($this->conn, $sql);

      }

         $target_dir4 = "upload/";
         $filename4 = basename($_FILES["img4"]["name"]);
         $targer_file4 = $target_dir4.$filename4;
         if(move_uploaded_file($_FILES["img4"]["tmp_name"], $targer_file4)){
             $sql = "UPDATE `sanpham1` SET `img4` = '$filename4' WHERE `masp` = '".$this->masanpham."'";
            $result = mysqli_query($this->conn, $sql);
}
    
  
     
    
    if($result){
             echo "<script>alert('Thêm thành công')</script>";
             echo "<script> window.location ='sanpham.php' </script>";
    }
    else{
        echo "<script> alert('Lỗi')</script>";
    }
    
    }
    function updatesanpham(){
        $sql = "UPDATE `sanpham1` SET
        `nhom_id`='".$this->nhomid."',
        `tensp`='".$this->tensanpham."',
        `mota`='".$this->mota."',
        `dongiacu`='".$this->dongiacu."',
        `dongiamoi`='".$this->dongiamoi."',
        `enable`='".$this->enable."',
        `soluong`='".$this->soluong."' ,
        `diemnoibat`='".$this->diemnoibat."',
        `dieukienchamsoc`='".$this->dieukienchamsoc."',
        `cachchamsoc`='".$this->cachchamsoc."',
        `xuatxu`='".$this->xuatxu."',
        `ngaydang`='".$this->ngaydang."',
        `kichthuoc`='".$this->kichthuoc."',
        `nguoidang`='".$this->nguoidang."',
        `giongloai`='".$this->giongloai."'
        WHERE masp = '".$this->masanpham."'";
        $result = mysqli_query($this->conn, $sql);


        $target_dir = "upload/";
        $filename = basename($_FILES["img1"]["name"]);
        $targer_file = $target_dir.$filename;
        if(move_uploaded_file($_FILES["img1"]["tmp_name"], $targer_file)){
            $sql = "UPDATE `sanpham1` SET `img1`='$filename' WHERE masp = '".$this->masanpham."'";
            mysqli_query($this->conn, $sql);
            // unlink("./anh/".$this->tenanhcu);
        }


         
        $target_dir2 = "upload/";
        $filename2 = basename($_FILES["img2"]["name"]);
        $targer_file2 = $target_dir2.$filename2;
        if(move_uploaded_file($_FILES["img2"]["tmp_name"], $targer_file2)){
            $sql = "UPDATE `sanpham1` SET `img2`='$filename2' WHERE masp = '".$this->masanpham."'";
            mysqli_query($this->conn, $sql);
            // unlink("./anh/".$this->tenanhcu);
        }

         
        $target_dir3 = "upload/";
        $filename3 = basename($_FILES["img3"]["name"]);
        $targer_file3 = $target_dir3.$filename3;
        if(move_uploaded_file($_FILES["img3"]["tmp_name"], $targer_file3)){
            $sql = "UPDATE `sanpham1` SET `img3`='$filename3' WHERE masp = '".$this->masanpham."'";
            mysqli_query($this->conn, $sql);
            // unlink("./anh/".$this->tenanhcu);
        }

         
        $target_dir4 = "upload/";
        $filename4 = basename($_FILES["img4"]["name"]);
        $targer_file4 = $target_dir4.$filename4;
        if(move_uploaded_file($_FILES["img4"]["tmp_name"], $targer_file4)){
            $sql = "UPDATE `sanpham1` SET `img4`='$filename' WHERE masp = '".$this->masanpham."'";
            mysqli_query($this->conn, $sql);
            // unlink("./anh/".$this->tenanhcu);
        }


        if($result){
                 echo "<script>alert('Sửa thành công')</script>";
                 echo "<script> window.location ='sanpham.php' </script>";
        }
        else{
            echo "<script> alert('Lỗi')</script>";
        }
    
    }
    function deletesanpham($masp){
        // unlink("./upload/".$this->tenanh."");
    $sql = "DELETE FROM `sanpham1` WHERE masp = '$masp'";
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