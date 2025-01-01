<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Trị</title>
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
    
    /* Manager */

    .manager {
        background-color: var(--green-color);
        height: 60px;
    }
    .manager-form {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .manager-logo {
        width: 25%;
        height: 100%;
        text-align: center;
    }
    .manager-logo__img {
        width: 70%;
        height: 60px;
    }
    .manager-form__wrap {
        position: relative;
        cursor: pointer;
        width: 25%;
        text-align: center;
        line-height: 5.8rem;
        transition: background-color ease-in .2s;
        }
    .manager-form__menu-heading {
        color:var(--white-color);
        font-size: 1.9rem;
        font-weight: 500;
        text-transform: uppercase;
        cursor: pointer;
        margin: 0;
    }
    .manager-form__menu {
        position: absolute;
        bottom: -82px;
        width: 300px;
        background-color: var(--white-color);
        box-shadow: 0 0 10px 0 rgba(0,0,0,0.15);
        border-radius: 2px;
        display: none;
        animation: fade ease-in .2s;
        }
    .manager-form__menu-nav {
        position: absolute;
        bottom: -122px;
        width: 300px;
        background-color: var(--white-color);
        box-shadow: 0 0 10px 0 rgba(0,0,0,0.15);
        border-radius: 2px;
        display: none !important;
        animation: fade ease-in .2s;
    }
    .manager-form__menu-list {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .manager-form__menu-items {
        border-bottom:1px solid #f4f4f4;
        transition: background-color ease-in .2s;
    }
    .manager-form__menu-items-link {
        padding-left: 5px;
        display: block;
        text-decoration: none;
        color: var(--black-color);
        font-size: 1.4rem;
        line-height: 4.0rem;
    }
    .manager-form__menu::before {
        content: "";
        display: block;
        position: absolute;
        bottom:80px;
        width: 110px;
        height: 20px;
        cursor: pointer;
        background-color: transparent;
    }
    .manager-form__menu-items:last-child {
        border:none;
    }
    .manager-form__wrap:hover {
        background-color: #6bc56e;
    }
    .manager-form__wrap:hover .manager-form__menu {
        display: block;
    }
    .manager-form__wrap:hover .manager-form__menu-nav {
        display: block !important;
    }
    .manager-form__menu-items:hover {
        background-color: #f2f2f2;
  }
  .manager-form__wrap a{
    text-decoration: none;
  }
    </style>
</head>
<body>
    <div class="wrapper">

        <div class="manager">
            <div class="grid wide">
                <div class="manager-form">
                    <a href="#!" class="manager-logo">
                        <img src="upload/lghh.png" alt="ảnh" class="manager-logo__img">
                    </a>
                    
                    <div class="manager-form__wrap">
                      <a href="taikhoan.php">  <h3 class="manager-form__menu-heading">Tài Khoản <i class="fa-solid fa-circle-chevron-down"></i></h3></a>
                        <div class="manager-form__menu">
                            <ul class="manager-form__menu-list">
                                <li class="manager-form__menu-items">
                                    <a href="taikhoan.php" class="manager-form__menu-items-link">Các Tài Khoản</a>
                                    </li>
                                <li class="manager-form__menu-items">
                                    <a href="lienhe1.php" class="manager-form__menu-items-link">Liên Hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="manager-form__wrap">
                      <a href="sanpham.php">  <h3 class="manager-form__menu-heading">Sản Phẩm <i class="fa-solid fa-circle-chevron-down"></i></h3><a>
                        <div class="manager-form__menu-nav">
                            <ul class="manager-form__menu-list">
                                <li class="manager-form__menu-items">
                                    <a href="sanpham.php" class="manager-form__menu-items-link">Các Sản Phẩm</a>
                                    </li>
                                    <li class="manager-form__menu-items">
                                    <a href="cart_admin.php" class="manager-form__menu-items-link">Quản Lý Đơn Đã Đặt Hàng</a>
                                    </li>
                                    <li class="manager-form__menu-items">
                                    <a href="bill_admin.php" class="manager-form__menu-items-link">Quản Lý Thông Tin Đơn Đặt Hàng</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="manager-form__wrap">
                       <a href="sanpham_nhom.php"> <h3 class="manager-form__menu-heading">NHÓM Sản Phẩm <i class="fa-solid fa-circle-chevron-down"></i></h3></a>
                        <div class="manager-form__menu">
                            <ul class="manager-form__menu-list">
                                <li class="manager-form__menu-items">
                                    <a href="sanpham_nhom.php" class="manager-form__menu-items-link">Các Nhóm Sản Phẩm</a>
                                    </li>
                                <li class="manager-form__menu-items">
                                    <a href="formsanpham_nhom.php" class="manager-form__menu-items-link">Thêm Nhóm Sản Phẩm</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                      
                    
                </div>
            </div>
        </div>

    </div>

 
