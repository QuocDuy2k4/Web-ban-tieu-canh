<?php
  include "thuvien.php";
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
        ORDER BY RAND()
        LIMIT 10";
    //Bước 3
    $result = mysqli_query($conn, $sql);

 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Name Is Chóa Pắc</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/scss/style.scss">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="cart/css/base.css">
    <link rel="stylesheet" href="cart/css/grid.css">
    <link rel="stylesheet" href="cart/css/main.css">
    <link rel="stylesheet" href="cart/css/responsive.css">
    <link rel="shortcut icon" href="cart/img/iconweb.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<style>
    .container-product__items {
        border: 1px solid #ccc;
        position: relative;
        transition: box-shadow ease-in .2s;
    }

.container-product__items:hover {
    box-shadow: rgb(210, 199, 199) 0px 0px 10px;
}
    .container-product__items-img{
        border-bottom: 1px solid #ccc;
        height: 100%;
    }
    .container-product__item-links {
        position: relative;
    }
    .product__items-wrap {
        position: relative;
    }
    .product__items-cart {
        text-decoration: none;
        color: #fff;
        font-size: 1.4rem;
        font-weight: 300;
        position: absolute;
        bottom: 0;
        width: 100%;
        display:flex;
        align-items: center;
        justify-content: center;
        padding: 10px 5px;
        background-color: #5960676e;
        cursor: pointer;
        transition: background-color ease-in .2s;
        display: none;
        animation: fade linear .3s;
        border-radius:unset;
    }
    @keyframes fade {
        from {
            opacity: 0;
        }
        to {
            opacity :1;
        }
    }

    .product__items-cart:hover {
        background-color: orange;
    }

    .product__items-more-cart {
        color:#fff;
        padding-left: 14px;
        border: none;
        background-color: transparent;
        cursor: pointer;
    }

    .product__items-links {
        margin: 10px 0;
    }

    .container-product__items:hover .product__items-cart {
        display: flex;
    }
    .product_items-wrap {
        height:212px;
    }
    
.mySlides img {
    position: relative;
    width: 100%;
    height: 550px !important;
    animation: fade ease-in .4s;
}
h2{
    color: yellow !important;
}
.mySlides-info__text{
    color: white !important;
}
</style>
</head>
        <div class="container">
            <div class="grid wide">
                <!-- slides -->
                <div class="slideshow-container">

                    <div class="mySlides">
                      <img src="upload/de1.jpg">
                      <div class="mySlides-info">
                        <span class="mySlides-info__text">Welcome to North Shop</span>
                        <h2 class="mySlides-info__title"><span class="mySlides-info__title-color">DIVERSITY</span> PLANT AND TREE <br> FOR YOU</h2>
                        <a href="fullsp.php" class="mySlides-info__link">Xem Ngay</a>
                      </div>

                    </div>
                    
                    <div class="mySlides">
                      <img src="upload/de2.jpg">
                      <div class="mySlides-info">
                        <span class="mySlides-info__text">Welcome to North Shop</span>
                        <h2 class="mySlides-info__title"><span class="mySlides-info__title-color">DIVERSITY</span>PLANT AND TREE  <br> FOR YOU</h2>
                        <a href="fullsp.php" class="mySlides-info__link">Xem Ngay</a>
                      </div>
                    </div>
                    
                    <div class="mySlides">
                      <img src="upload/de5.jpg">
                      <div class="mySlides-info">
                        <span class="mySlides-info__text">Welcome to North Shop</span>
                        <h2 class="mySlides-info__title"><span class="mySlides-info__title-color">DIVERSITY</span> PLANT AND TREE <br> FOR YOU</h2>
                        <a href="fullsp.php" class="mySlides-info__link">Xem Ngay</a>
                      </div>
                    </div>
                    
                    </div>
                    <br>
                    
                    <div style="text-align:center">
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                    </div>
                    <script>
                        let slideIndex = 0;
                        showSlides();

                        function showSlides() {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("dot");
                        
                        // Ẩn tất cả các slides
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        
                        // Xóa lớp active khỏi tất cả các dots
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1;
                        }
                        
                        // Hiển thị slide hiện tại và thêm lớp active cho dot tương ứng
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        
                        // Hiển thị .mySlides-info của slide hiện tại
                        let currentSlideInfo = slides[slideIndex - 1].getElementsByClassName("mySlides-info")[0];
                        currentSlideInfo.style.display = "block";
                        
                        setTimeout(showSlides, 3000); // Thay đổi thời gian ở đấy nhóe Pắc (2000 -> 2 giây)
                        }
                        </script>
                <!-- ------ -->
                <div class="container-product">
                    <h3 class="container-product__heading">Sản Phẩm Gợi Ý Hôm Nay</h3>
                    <div class="container-product__heading-border"></div>
                    <div class="row"> 
                    <?php
                        $limit = 10; // Số lượng sản phẩm muốn hiển thị
                        $count = 0; // Biến đếm
                        while ($row= mysqli_fetch_assoc($result)) { 
                            if ($count >= $limit) {
                                break; // Dừng vòng lặp sau khi hiển thị đủ số lượng sản phẩm
                            }
                        ?>
                        <div class="col l-2-4">
                       
                            <div class="container-product__items">
                                
                                <div class="product_items-wrap">
                                    <a href="chitiet.php?masp=<?php echo $row["masp"] ?>" class="container-product__item-links">
                                        <img  src="upload/<?php echo $row["img1"] ?>" alt="" class="container-product__items-img" >
                                    </a> 
    <form action="cart.php" method="post" class="product__items-cart">
    <i class="product__items-cart-icon fa-solid fa-cart-plus"></i>
    <input type="submit" value="Thêm vào giỏ hàng" name="addcart" class="product__items-more-cart">
    <input type="hidden" name="soluong" value="1">
    <input type="hidden" name="tensp" value="<?php echo $row["tensp"] ?>">
    <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"] ?> 000 VNĐ">
    <input type="hidden" name="img1" value="<?php echo $row["img1"] ?>">
</form>





                                </div>
                                <!-- Cart and search -->
                                <!-- <div class="container-product__cart-search">
                                    <a href="" class="container-product__cart-icon">
                                        <i class="fa-solid fa-cart-arrow-down"></i>
                                    </a>
                                    <a href="" class="container-product__search-icon">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </div> -->
                                <div class="product__items-links">
                                    <a class="container-product__item-text" onclick="window.location.href='chitiet.php?masp=<?php echo $row["masp"] ?>';"><?php echo $row["tensp"] ?></a>
                                </div>
                                <div class="container-product__item-price">
                                    <p class="container-product__price-old"><?php echo $row["dongiacu"] ?> 000 đ</p>
                                    <p class="container-product__price-new"><?php echo $row["dongiamoi"] ?> 000 đ</p>
                                </div>    
                            </div>
                           
                        </div>
                        
 <?php  $count++;
} ?>
                    </div>
                </div>
                <div class="container-top">
                    <div class="l-12">
                        <div class="row">
                            <div class="col l-7-2">
                                <div class="container-top__left">
                                    <h3 class="container-top__left-heading">Top Những Thỏi Son 3CE Được Yêu Thích Nhất</h3>
                                    <p class="container-top__left-text">Hãy đi tìm đến chúng tôi để thấy giá trị vẻ đẹp của bạn </p>
                                    <a href="fullsp.php" class="container-top__left-btn">Khám phá ngay</a>
                                </div>
                            </div>
                           
                            <div class="col l-4-9">
                                <div class="container-top__right">
                                    <img src="upload/de1.jpg" alt="" class="container-top__right-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               