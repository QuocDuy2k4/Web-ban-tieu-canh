<?php include "headernguoidung.php";?>
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

//lấy ds sản phẩm
$nhom_id=isset($_GET['nhom_id'])? $_GET['nhom_id'] :0;
$sql="SELECT * FRom sanpham1 where nhom_id='$nhom_id' LIMIT 10 ";
$result=mysqli_query($conn,$sql);

?>
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
        height:230px !important;
        position: relative;
    }
</style>
  <div class="grid wide">
  <div class="container-product">
                    <h3 class="container-product__heading">Sản Phẩm Bạn Quan Tâm</h3>
                    <div class="container-product__heading-border"></div>
                    <div class="row"> 
                    <?php while ($row= mysqli_fetch_assoc($result)) { ?>
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
                                    
                                   <a class="container-product__item-text" onclick="window.location.href='chitiet.php?masp=<?php echo $row["masp"] ?>';"><?php echo $row["tensp"] ?></a>
                                    <div class="container-product__item-price">
                                        <p class="container-product__price-old"><?php echo $row["dongiacu"] ?> 000 đ</p>
                                        <p class="container-product__price-new"><?php echo $row["dongiamoi"] ?> 000 đ</p>
                                    </div>    
                                </div>
                             </div>
                                <?php } ?>
                    </div>
                </div>
  </div>
<?php include "footernguoidung.php";?>