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
    $sql_nhom = "SELECT * FROM `sanpham_nhom` ";
   ;
    //Bước 3
    $result_nhom = mysqli_query($conn, $sql_nhom);
    ?>	
        <div class="news">
            <div class="grid wide">
                <div class="news__items">
                    <div class="row">
                    <div class="col l-3">
                        <div class="news__category">
                            <div class="news__category-gr">
                                <h3 class="news__category-heading">Danh Mục Sản Phẩm</h3>
                                <ul class="news__category-list">
                               
                                    <?php while ($row_nhom = mysqli_fetch_assoc($result_nhom)) { ?>
                    <li><a class="news__category-items" href=" cat.php?nhom_id=<?php echo $row_nhom["id"]?>"><?php echo  $row_nhom["tennhom"] ?></a></li>
                        
                <?php } ?>
                                </ul>
                            </div>
                        </div>