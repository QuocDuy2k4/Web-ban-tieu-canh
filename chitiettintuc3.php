
<?php

//Lấy thông tin bản ghi cần sửa
$masp = isset($_GET['masp']) ? $_GET['masp'] : '';
$sql = "SELECT * FROM `sanpham1`WHERE masp='$masp' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
 	
    
<style>
        .news__detail-heading-border {
    margin-top: 5px;
}
.news__detail-heading {
    margin-bottom:0 ;
}
.news__detail-info :hover{
    color: black;
 
}
.news__detail-title {
    font-size: 35px !important;
    color: forestgreen;
}
h4{
    font-size: 20px;

}
.news__details-msg{
    font-size: 15px;

}
    </style>
<div class="col l-9">
                        <h2 class="news__detail-heading">
                           Tin Tức 
                        </h2>
                        <div class="container-product__heading-border news__detail-heading-border"></div>
                      
                        <div class="news__detail-post">
                       
                            <img src="upload/<?php echo $row["img1"] ?>" alt="" class="news__detail-img">
                            <div class="news__detail-info"> 
                          <h1>      <a href="chitiet.php?masp=<?php echo $row["masp"] ?>" class="news__detail-title"><?php echo $row["tensp"] ?></a></h1>
                               <h4>Điểm Nổi Bật: </h4>
                               <p class="news__details-msg">+ <?php echo  $row["mota"] ?></p>
                               <p class="news__details-msg">+ <?php echo  $row["mota"] ?></p>
                                </span>
                                <h4>Điều Kiện Chăm Sóc: </h4>
                                <p class="news__details-msg">+ <?php echo  $row["mota"] ?></p>
                                <p class="news__details-msg">+ <?php echo  $row["mota"] ?></p>
                                <h4>Cách Chăm Sóc : </h4>
                                <p class="news__details-msg">+ <?php echo  $row["mota"] ?></p>
                                <p class="news__details-msg">+ <?php echo  $row["mota"] ?></p>
                                <h4> Xuất Xứ </h4>
                                <p class="news__details-msg">+ <?php echo  $row["mota"] ?></p>
                                <p class="news__details-msg">+ <?php echo  $row["mota"] ?></p>
                            </div>

                            
</div>
                        </div>

                       
        </div>
                        </div>
                        </div>
                        </div>
                    

   