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
    //B2:
        $sql = "SELECT * 
        FROM sanpham1  
        Order by rand()
        limit 6";
    //Bước 3
    $result = mysqli_query($conn, $sql);
    ?>
<div class="news__category-gr">
                                <h3 class="news__category-heading">Sản Phẩm Hot</h3>
                                <ul class="news__category-list"> 
                                     <?php while ($row= mysqli_fetch_assoc($result)) { ?>
                                    <li class="news__category-post">
                                    <a href="chitiet.php?masp=<?php echo $row["masp"] ?>" >
                                        <img src="upload/<?php echo $row["img1"] ?>" alt="" class="news__category-post-img">
                                        <div class="news__category-post-info">
                                        <a class="container-product__item-text" onclick="window.location.href='chitiet.php?masp=<?php echo $row["masp"] ?>';"><?php echo $row["tensp"] ?></a>
                                            <p class="news__category-post-month">Ngày đăng : <?php echo $row["ngaydang"] ?></p>
                                        </div>
                                     </a>
                                    </li>
                                  
                                </ul>

                                  <?php } ?>
                            </div>
                            <!-- <div class="news__category-footer">
                                <a href="#!" class="news__category-footer-link">Xem thêm</a>
                            </div> -->
                        </div>
                
                                
                                
                                    