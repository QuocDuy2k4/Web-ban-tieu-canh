<?php 	  session_start();
//   if(isset($_SESSION)){

//   }
 
 
 ?>
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
   
    $addToCartClicked = isset($_POST['addcart']);

    if ($addToCartClicked && !isset($_SESSION['user'])) {
        // Người dùng chưa đăng nhập và đã nhấn nút "Thêm vào giỏ hàng"
        // Chuyển hướng đến trang login.php
        header("Location: login.php");
        exit();
    }

   
    ?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán Hoa Lá cành Của Pắc</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/scss/style.scss">
    <link rel="stylesheet" href="assets/css/responsive.css">
    

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<style>
    .container-product__items-img{
        border-bottom: 1px solid #ccc;
    }
    .nav-bottom__items-product {
        padding-left: 0;
    }
    .nav-bottom__items-product-menu {
        border-bottom: 1px solid #f5f5f5;
        transition: background-color ease-in .2s;
    }
    .nav-bottom__items-product-menu:last-child {
        border-bottom:none;
    }
    .nav-bottom__items-product-menu:hover {
        background-color: #f1f1f1;
    }
    .contact__form-link {
        transition: background-color ease-in .2s;
    }
    .contact__form-link:hover {
        background-color: red;
    }
    .container-product__cart-search {
   
    background-color:greenyellow !important;
    

}
.container-product__cart-icon:hover,
.container-product__search-icon:hover {
    background-color:white !important;
    color: black !important;
}

/* TIN TỨC */
.news__category-list li {
    padding: 15px 10px 15px 10px
}

.news__category-post:nth-child(1){
    padding-top: 16px;
}

.news__category-post + .news__category-post{
    margin-top: 16px;
}

.news__category-heading {
    margin:0;
}

.news__category-list {
    list-style: none;
    padding-left: 0;
    background-color: #f2f0f0;
    margin: 0;
}

.news__category-items {
    position: relative;
    font-size: 1.6rem;
    color: #363f4d;
    padding: 10px 14px;
    cursor: pointer;
    transition: right linear .4s;
    left: 0;
}
.news__category-items:hover {
    left: 6px;
}

.news__category-list-product {
    list-style: none;
    padding-left: 0;
    background-color: transparent;
    margin: 0;
}

.news__category-items::before {
    cursor: pointer;
    content: "";
    display: block;
    position: absolute;
    border-width: 4px 6px;
    border-style: solid;
    border-color: transparent transparent transparent #363f4d;
    left: 0px;
    top: 46%;
    transform: translateY(-50%);
    transition: border-left-color ease-in .2s;
}
.container-product__item-text {
    padding-left: 0;
}

</style>
</head>
<body>

    <div class="wrapper">

        <div class="header">
            <div class="grid wide">
                
                <div class="header-top">
                    <div class="nav-top__left">
                        <h4 class="nav-top__left-heading">Theo dõi:</h3>
                        <div class="nav-top__social">
                            <a href="" class="nav-top__social-links">
                                <i class="nav-top__social-icon fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="" class="nav-top__social-links">
                                <i class="nav-top__social-icon fa-brands fa-twitter"></i>
                            </a>
                            <a href="" class="nav-top__social-links">
                                <i class="nav-top__social-icon fa-brands fa-google-plus-g"></i>
                            </a>
                            <a href="" class="nav-top__social-links">
                                <i class="nav-top__social-icon fa-brands fa-pinterest-p"></i>
                            </a>
                    </div>
                    </div>
                    <div class="nav-top__right">
                    <?php if(isset($_SESSION['user'])){ ?>
                        <a href="xemdonhang_dadat.php" class="nav-top__right-login">
                            <i class="fa-solid fa-bag-shopping"></i>
                            Đơn Hàng
                        </a>
                        <a href="logout.php" class="nav-top__right-login">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            Đăng Xuất
                        </a>
                    
                        <a href="" class="nav-top__right-register">
                            <i class="fa-solid fa-circle-user"></i>
                            <?php echo $_SESSION['user']?></a>
                        </a>
                        <?php }
				else {?>
                 <a href="login.php" class="nav-top__right-login">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            Đăng nhập
                        </a>
                        <a href="dangki.php" class="nav-top__right-register">
                            <i class="fa-solid fa-user-plus"></i>
                            Đăng ký
                        </a>
                       
                        <?php } ?>
                    </div>
                </div>

                <div class="header-center">
                    <a href="index.php" class="nav-center__logo">
                        <img src="upload/lgh.png" alt="Logo web" class="nav-center__logo-img">
                    </a>
                    <div class="nav-center__search">
                        <form action="timkiemsp.php" method="GET" >
                        <input type="text" class="nav-center__search-input" placeholder="Tìm kiếm..." name="timkiem"
                        value="<?php if(isset($_GET['timkiem'])) 
                        {
                            echo $_GET['timkiem'];}
                        ?>">
                        </form>
                        <i class="nav-center__search-icon fa-solid fa-magnifying-glass"></i>
                        
                    </div>
                    <div class="nav-center__opera">
                        <div class="nav-center__hotline">
                            <img src="upload/24h.jpg" alt="" class="nav-center__hotline-img">
                            <div class="nav-center__hotline-info">
                                <span class="nav-center__hotline-info-title">Hotline</span>
                                <span class="nav-center__hotline-info-num">0123 456 789</span>
                            </div>
                        </div>
                  
                        <?php if(isset($_SESSION['user'])){ ?>
                            <a href="cart.php" class="nav-center__cart">
                            <i class="nav-center__cart-icon fa-solid fa-cart-arrow-down"></i>
                        <span class="nav-center__cart-num"><?php echo isset($_SESSION['giohang']) ? count($_SESSION['giohang']) : 0; ?></span>
                            <?php }
				else {?>
                 <a href="login.php" class="nav-center__cart">
                 <i class="nav-center__cart-icon fa-solid fa-cart-arrow-down"></i>
                            <span class="nav-center__cart-num">0</span>
                             <?php } ?>
                        </a>
                    </div>
                </div>
            </div>
                <div class="header-bottom">
                    <div class="grid wide">
                        <ul class="nav-bottom-list">
                            <li class="nav-bottom-items"><a href="index.php" class="nav-bottom-items__links">Trang chủ</a></li>
                            <li class="nav-bottom-items">
                                <a href="" class="nav-bottom-items__links">Danh Mục Sản Phẩm</a> 
                                <i class="nav-bottom-items-icon fa-solid fa-chevron-right"></i>
                                <!-- Product item -->
                                <div class="nav-bottom__items-product">
                                    
                                    <?php while ($row_nhom = mysqli_fetch_assoc($result_nhom)) { ?>
                   <a class="nav-bottom__items-product-menu" href=" cat.php?nhom_id=<?php echo $row_nhom["id"]?>"><?php echo  $row_nhom["tennhom"] ?></a>
                        
                <?php } ?>
                                </div>
                            </li>
                            <li class="nav-bottom-items"><a href="tintuc.php" class="nav-bottom-items__links">Tin tức</a> </li>
                            <li class="nav-bottom-items"><a href="lienhe.php" class="nav-bottom-items__links">Liên hệ</a> </li>
                        </ul>
                    </div>
                </div>

            
        </div>
