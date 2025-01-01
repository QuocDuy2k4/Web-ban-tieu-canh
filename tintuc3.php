
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "2200007388_TruongQuocDuy";

    //B1: Create connetion
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    
    if (!$conn) {
        die("connection failer" . mysqli_connect_error());
    }
    //B2:
        $sql = "SELECT * 
        FROM sanpham1 
        Order by rand()
        limit 4";
    //Bước 3
    $result = mysqli_query($conn, $sql);
    ?>
    <style>
        .news__detail-heading-border {
    margin-top: 5px;
}
.news__detail-heading {
    margin-bottom:0 ;
}
    </style>
<div class="col l-9">
                        <h2 class="news__detail-heading">
                           Tin Tức Gần Đây
                        </h2>
                        <div class="container-product__heading-border news__detail-heading-border"></div>
                        <?php while ($row= mysqli_fetch_assoc($result)) { ?>
                        <div class="news__detail-post">
                        <a href="chitiettintuc.php?masp=<?php echo $row["masp"] ?>">
                            <img src="upload/<?php echo $row["img1"] ?>" alt="" class="news__detail-img">
                            <div class="news__detail-info">
                                <a href="chitiettintuc.php?masp=<?php echo $row["masp"] ?>" class="news__detail-title"><?php echo $row["tensp"] ?></h2>
                                <span class="news__detail-per"><p>
                                    <i class="fa-solid fa-user"></i> <?php echo $row["nguoidang"] ?>
                                    <span class="news__detail-datesub">
                                        <i class="fa-solid fa-calendar-days"></i> <?php echo $row["ngaydang"] ?>
                                    </span>
                                </span>
                                <p class="news__details-msg"><?php echo $row["mota"] ?>Bạn cho giá thể đã xử lý nấm bệnh vào chậu cao cách miệng 5cm. Trồng cây sao cho cây phân bố xung quanh chậu, không trồng cây quá sát thành chậu. Nên trồng cây vào buổi chiều, sau khi tưới nước đẫm cây.</p>
                            </div>
                        </a>
                        </div>

                        <?php } ?>  
        </div>
                        </div>
                        </div>
                        </div>
                    

   