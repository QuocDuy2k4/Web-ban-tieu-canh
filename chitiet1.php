
<?php
   include "thuvien.php";
//Lấy thông tin bản ghi cần sửa
$masp = isset($_GET['masp']) ? $_GET['masp'] : '';
$sql = "SELECT * FROM `sanpham1`WHERE masp='$masp' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
 	

<style>
    .row_cat {
        height: 80px !important;
    }
    .content-product__left img{
        height: 400px;
        width: 350px;
    }
    .content__describe-footer img{
        height: 450px;
        width:500px;
    }
    .container-product__items-img {
        height:100%;
    }
/*1*/

.content-product__right-updown {
    margin-left: 10px;
    height: 40px;
    max-width: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}

.content-product__right-updown span {
    font-size: 1.4rem;
    font-weight: 600;
    width: 115px;
    text-align: center;
    cursor: pointer;
    outline: none;
}


.content-product__right-updown span.num {
    font-size: 1.4rem;
    border-left: 2px solid rgba(0,0,0,0.2);
    border-right: 2px solid rgba(0,0,0,0.2);
    pointer-events: none;
}

.content-product__select-cart { /*2*/
    text-decoration: none;
    color: #35a746;
    border: 1px solid #35a746;
    background-color: #eaf0eb;
    font-size: 1.5rem;
    font-weight: 500;
    min-width: 130px;
    padding: 16px;
    text-align: center;
    border-radius: 5px;
    text-transform: uppercase;
    transition: background-color ease-in .2s;
}

.content-product__select-cart:hover {
    background-color: #f3f3f3;
}
.content-product__select-btn {
min-width: 140px;
}
.content-product__right-quantity {
    display: flex;
    align-items: center;
}

.content-product__right-text {
    font-size: 1.4rem;
}
.content-product__right-select {
    margin-top: 12px;
    display: flex;
    padding-bottom: 32px;
    border-bottom: 1px dashed #79c57c;
}


/* Cat slide */

.cat__slides {
    position: relative;
    width: 100%;
  }
  
  /* Hide the images by default */
  .mySlides_cat {
    display: none;
    position: relative;
    top: 4px;
  }
  
  /* Add a pointer when hovering over the thumbnail images */
  .cursor {
    cursor: pointer;
  }
  
  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 40%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* Container for image text */

  .row_cat {
    margin-top: 5px;
    display: flex;

  }
  
  .row_cat:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Three columns side by side */
  .column + .column {
    margin-left:2.5px ;
  }

  .column {
    width: 100%;
  }
  
  /* Add a transparency effect for thumbnail images */
  .demo {
    opacity: 0.6;
  }
  
  .active,
  .demo:hover {
    opacity: 1;
  }
  .detail-items__quantity-text{
    color: black;
    font-size: 20px;
  }
.detail-items__quantity-num{
    font-size: 20PX;
}
/* Button */
.content-product__select-cart {
    text-decoration: none;
    color: #35a746;
    border: none;
    background: transparent;
    font-size: 1.5rem;
    font-weight: 500;
    min-width: 130px;
    padding: 16px;
    text-align: center;
    text-transform: uppercase;
    transition: background-color ease-in .2s;
    padding-left: 6px;
    cursor: pointer;
}
.content-product__right-more {
    background-color: #eaf0eb;
    border: 1px solid #35a746;
    border-radius: 5px;
    cursor: pointer;
}
.content-product__select-icon {
    padding-right: 0;
    padding-left: 15px !important;
    cursor: pointer;
}
.content-product__select-btn{
    border:none; 
    cursor:poiter; 
}
</style>
        <div class="content">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-9">
                        <div class="content-introduce__info">
                            <h3 class="content__heading"><?php echo $row["tensp"] ?></h3>
                            <div class="content__evaluate">
                                <div class="content__evaluate-star">
                                    <i class="content__evaluate-star-icon fa-solid fa-star"></i>
                                    <i class="content__evaluate-star-icon fa-solid fa-star"></i>
                                    <i class="content__evaluate-star-icon fa-solid fa-star"></i>
                                    <i class="content__evaluate-star-icon fa-solid fa-star"></i>
                                    <i class="content__evaluate-star-icon fa-solid fa-star-half"></i>
                                </div>
                                <span class="content__evaluate-comment">Được đánh giá là sản phẩm tốt</span>
                            </div>
                        </div>
                        
                        <div class="content-product__info">
                            <div class="row">
                                <div class="col l-5">
                                <div class="cat__slides">
                                        <div class="mySlides_cat">
                                        <img src="upload/<?php echo $row['img1'] ?>" style="width:100%;height: 380px;" >      </div>
                                      
                                        <div class="mySlides_cat">
                                          <img src="upload/<?php echo $row['img2'] ?>" style="width:100%;height: 380px;">
                                        </div>
                                      
                                        <div class="mySlides_cat">
                                          <img src="upload/<?php echo $row['img3'] ?>" style="width:100%;height: 380px;">
                                        </div>

                                        <div class="mySlides_cat">
                                            <img src="upload/<?php echo $row['img4'] ?>" style="width:100%;height: 380px;">
                                        </div>
                                          
                                      
                                        <div class="row_cat">
                                          <div class="column">
                                          <img src="upload/<?php echo $row['img1'] ?>" alt=""  class="container-product__items-img" style="width:100%;height: 80px;" onclick="currentSlide(1)" alt="Cinque Terre">         </div>
                                          <div class="column">
                                            <img class="demo cursor" src="upload/<?php echo $row['img2'] ?>" style="width:100%;height: 80px;" onclick="currentSlide(2)" alt="Cinque Terre">
                                          </div>
                                          <div class="column">
                                            <img class="demo cursor" src="upload/<?php echo $row['img3'] ?>" style="width:100%;height: 80px;" onclick="currentSlide(3)" alt="Mountains and fjords">
                                          </div>
                                          <div class="column">
<img class="demo cursor" src="upload/<?php echo $row['img4'] ?>" style="width:100%;height: 80px;" onclick="currentSlide(4)" alt="Mountains and fjords">
                                          </div>

                                        </div>
                                      </div>

                                      <script>
                                        let slideIndex = 1;
                                        showSlides(slideIndex);
                                        
                                        function plusSlides(n) {
                                          showSlides(slideIndex += n);
                                        }
                                        
                                        function currentSlide(n) {
                                          showSlides(slideIndex = n);
                                        }
                                        
                                        function showSlides(n) {
                                          let i;
                                          let slides = document.getElementsByClassName("mySlides_cat");
                                          let dots = document.getElementsByClassName("demo");
                                          let captionText = document.getElementById("caption");
                                          if (n > slides.length) {slideIndex = 1}
                                          if (n < 1) {slideIndex = slides.length}
                                          for (i = 0; i < slides.length; i++) {
                                            slides[i].style.display = "none";
                                          }
                                          for (i = 0; i < dots.length; i++) {
                                            dots[i].className = dots[i].className.replace(" active", "");
                                          }
                                          slides[slideIndex-1].style.display = "block";
                                          dots[slideIndex-1].className += " active";
                                          captionText.innerHTML = dots[slideIndex-1].alt;
                                        }
                                        </script>
                                </div>
                                <div class="col l-7">
                                    <div class="content-product__right">
                                        <span class="content-product__right-money"><?php echo $row["dongiamoi"] ?> 000 VNĐ</span>
                                        <div class="content-product__right-code">
                                            <span class="content-product__code-letter">Xuất Xứ:</span>
                                            <span class="content-product__code-num"><?php echo $row["xuatxu"] ?></span>
                                        </div>
                                        <p class="content-product__right-msg" >Mô tả:
                                        <?php echo $row["mota"] ?>   Bạn cho giá thể đã xử lý nấm bệnh vào chậu cao cách miệng 5cm. Trồng cây sao cho cây phân bố xung quanh chậu, không trồng cây quá sát thành chậu. Nên trồng cây vào buổi chiều, sau khi tưới nước đẫm cây. </p>
                                        <form action="cart.php" method="post" class="detail-items__quantity">
                                            <div class="content-product-left-select">
                                                <p class="detail-items__quantity-text">Số lượng:</p>
                                                <input class="detail-items__quantity-num" type="number" name="soluong" min="1" MAX="100" value="1">
                                                <input type="hidden" name="tensp" value="<?php echo $row["tensp"] ?>">
                                                <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"] ?> 000 VNĐ">
                                                <input type="hidden" name="img1" value="<?php echo $row["img1"] ?>">
                                               
                                            </div>
                                             
                                            <!-- <div class="detail-items__quantity-updown">
                                                <span class="minus">-</span>
                                                <span class="num">01</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <script src="assets/js/main.js"></script> -->
                                        
                                           <div class="content-product__right-select">
                                          
                                           
                                            <span class="content-product__right-more">
                                                <i class="content-product__select-icon fa-solid fa-cart-arrow-down"></i>
                                                <input type="submit" value="Thêm vào giỏ hàng" name="addcart" class="content-product__select-cart">
                                            </span>
                                            <span>
                                            <input type="submit" value="Mua Ngay" name="addcart" class="content-product__select-btn">
                                            <!-- <a href="cart.php" class="content-product__select-btn">
                                           Mua Ngay
                                            </a>  -->
                                            </span>
                                        </div>
                                        </form>
                                        <div class="content-product__right-call">
                                            <span class="content-product__call-text">Gọi để được tư vấn:</span>
                                            <span class="content-product__call-num">0123 456 789</span>
                                        </div>
                                        <div class="content-product__right-pay">
                                            <span class="content-product__pay-accept">Chấp nhận thanh toán bằng:</span>
                                            <span class="content-product__pay-list">
                                                <a href="" class="content-product__bank">
                                                    <img src="upload/visa.png" alt="Visa" class="content-product__bank-icon">
                                                </a>
                                                <a href="" class="content-product__bank">
                                                    <img src="upload/paypal.png" alt="Paypal" class="content-product__bank-icon">
                                                </a>
                                                <a href="" class="content-product__bank">
                                                    <img src="upload/americanexpress.png" alt="Ameriacan Express" class="content-product__bank-icon">
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3">
                        <div class="row">
                            <div class="col l-12">
                                <div class="container-support__items">
                                    <img src="upload/sp1.png" alt="" class="container-support__items-img">
                                    <div class="container-support__items-info">
                                        <span class="container-support__info-title">Miễn phí vận chuyển</span>
                                        <span class="container-support__info-msg">Cho các đơn hàng > 5tr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-12">
                                <div class="container-support__items">
                                    <img src="upload/sp2.png" alt="" class="container-support__items-img">
                                    <div class="container-support__items-info">
                                        <span class="container-support__info-title">Hỗ trợ 24/7</span>
                                        <span class="container-support__info-msg">Liên hệ hỗ trợ 24h/ngày</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-12">
                                <div class="container-support__items">
                                    <img src="upload/sp3.png" alt="" class="container-support__items-img">
                                    <div class="container-support__items-info">
                                        <span class="container-support__info-title">Hoàn tiền 100%</span>
                                        <span class="container-support__info-msg">Nếu các sản phẩm bị lỗi, hư hỏng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-12">
                                <div class="container-support__items">
                                    <img src="upload/sp4.png" alt="" class="container-support__items-img">
                                    <div class="container-support__items-info">
                                        <span class="container-support__info-title">Thanh toán</span>
                                        <span class="container-support__info-msg">Được bảo mật 100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid wide">
                <div class="content__describe">
                    <h3 class="content__describe-title">Mô Tả</h3>
                    <div class="content__describe-info">
                        <p class="content__describe-msg">
                            <b>Tên cây:</b> <?php echo $row["tensp"] ?> <br>
                            <b>Kích thước:</b>  <?php echo $row["kichthuoc"] ?> <br>
                            <b>Giá trên bao gồm:</b> Cây, chậu, đĩa lót, sỏi. Chưa bao gồm phí vận chuyển. <br>
                        </p>
                        <p class="content__describe-msg">
                        <b>Mô Tả:</b>  <?php echo $row["mota"] ?>
                        </p>
                        <p class="content__describe-msg">
                            <b>Chế độ chăm sóc:</b>  <?php echo $row["dieukienchamsoc"] ?>
                        </p>
                        <p class="content__describe-msg">
                            <b>Đặc điểm:</b>  <?php echo $row["diemnoibat"] ?>
                        </p>
                        <p class="content__describe-msg">
                            <b>Cách chăm sóc:</b>  <?php echo $row["cachchamsoc"] ?>
                        </p>
                        <p class="content__describe-msg">
                        <b>Giống Loài:</b>  <?php echo $row["giongloai"] ?>
                        </p>
                        <p class="content__describe-msg">
                        <b>Xuất Xứ:</b>  <?php echo $row["xuatxu"] ?>
                        </p>
                    </div>
                    <div class="content__describe-footer">
                        <img src="upload/<?php echo $row["img1"] ?>" alt="" class="content__describe-img">     
                    </div>
                </div>
        