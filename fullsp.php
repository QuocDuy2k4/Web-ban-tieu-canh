<?php include"headernguoidung.php";?>

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
        FROM sanpham1 ";
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
        background-color: #596067;
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
        position: relative;
    }

</style>
</head>
        <div class="container">
            <div class="grid wide">
                <!-- slides -->

                <div class="container-product">
                <h3 class="container-product__heading">Tất Cả Sản Phẩm</h3>
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
        </div>
  
               
<?php include"footernguoidung.php";?>