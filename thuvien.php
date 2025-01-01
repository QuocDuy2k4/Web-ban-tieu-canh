<?php

function taogiohang($tensp, $img, $dongia,$soluong,$thanhtien,$idbill){
    $conn=ketnoidb();
        $sql = "INSERT INTO cart (tensp, img, dongia, soluong, thanhtien, idbill)
        VALUES ('$tensp', '$img', '$dongia', '$soluong', '$thanhtien', '$idbill')";
        // use exec() because no results are returned
        $conn->exec($sql);
        $conn = null; 
}

function taodonhang($name, $address, $tel,$email,$total,$pttt){
    $conn=ketnoidb();
        $sql = "INSERT INTO bill (name, address, tel, email, total, pttt)
        VALUES ('$name', '$address', '$tel', '$email', '$total', '$pttt')";
        // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        $conn = null; 
        return $last_id;
}

function ketnoidb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vuthibacdk12cntt2";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function tongdonhang(){
    $tong=0;
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        // Nếu giỏ hàng lớn hơn 0 thì in ra phần này còn <= 0 thì in ra giỏ hảng trống 
        if(sizeof($_SESSION['giohang'])>0){
        
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            $tt = intval($_SESSION['giohang'][$i][2]) * intval($_SESSION['giohang'][$i][3]);
            $tong+=$tt;
        }
            
        }
    }
    return $tong;
}

// Mỗi number trong phần td tương ứng với vị trí trong mảng $sp
function showgiohang(){
    $ttgh="";
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        // Nếu giỏ hàng lớn hơn 0 thì in ra phần này còn <= 0 thì in ra giỏ hảng trống 
        if(sizeof($_SESSION['giohang'])>0){
        $tong=0;
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            $tt = intval($_SESSION['giohang'][$i][2]) * intval($_SESSION['giohang'][$i][3])*1000;
            $tong+=$tt;
            $ttgh.= '<tr>
                    <td>'.($i+1).'</td>
                    <td><img src="upload/'.$_SESSION['giohang'][$i][0].'" alt="áo đó" class="cart__table-img"></td>
                    
                    <td>'.$_SESSION['giohang'][$i][1].'</td> 
                    <td>'.$_SESSION['giohang'][$i][2].'</td>
                    <td>'.$_SESSION['giohang'][$i][3].'</td>
                    <td>'.$tt.'</td>
                    <td>
                        <a href="cart.php?delid='.$i.'">Xóa</a>
                    </td>
                </tr>';
        }
            $ttgh.= '
                <tr class="cart__table-money">
                    <th class="cart__table-money-text" colspan="5">
                        Tổng đơn hàng 
                    </th>
                    <th colspan="2">
                        '.$tong.'
                    </th>
                </tr>';
        }
    }
    return $ttgh;
}


function showgiohang1(){
    $ttgh="";
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        // Nếu giỏ hàng lớn hơn 0 thì in ra phần này còn <= 0 thì in ra giỏ hảng trống 
        if(sizeof($_SESSION['giohang'])>0){
        $tong=0;
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            $tt = intval($_SESSION['giohang'][$i][2]) * intval($_SESSION['giohang'][$i][3])*1000;
            $tong+=$tt;
            $ttgh.= '<tr>
                    <td>'.($i+1).'</td>
                    <td><img src="upload/'.$_SESSION['giohang'][$i][0].'" alt="áo đó" class="cart__table-img"></td>
                    
                    <td>'.$_SESSION['giohang'][$i][1].'</td> 
                    <td>'.$_SESSION['giohang'][$i][2].'</td>
                    <td>'.$_SESSION['giohang'][$i][3].'</td>
                    <td>'.$tt.'</td>
                    
                </tr>';
        }
            $ttgh.= '
                <tr class="cart__table-money">
                    <th class="cart__table-money-text" colspan="5">
                        Tổng đơn hàng 
                    </th>
                    <th colspan="2">
                        '.$tong.'
                    </th>
                </tr>';
        }
    }
    return $ttgh;
}

function getOrdersByUser($user){
    $conn = ketnoidb();
    $sql = "SELECT * FROM bill WHERE name = :user";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;
    return $result;
}



function getOrderDetails($orderId){
    $conn = ketnoidb();
    $sql = "SELECT * FROM cart WHERE idbill = :orderId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':orderId', $orderId, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;

    return $result;
}

// Thêm hàm huyDonHang vào thuvien.php
function huyDonHang($orderId) {
    $conn = ketnoidb();

    // Xóa dữ liệu đơn hàng từ bảng cart
    $sqlDeleteCart = "DELETE FROM cart WHERE idbill = :orderId";
    $stmtDeleteCart = $conn->prepare($sqlDeleteCart);
    $stmtDeleteCart->bindParam(':orderId', $orderId, PDO::PARAM_INT);
    $stmtDeleteCart->execute();

    // Xóa dữ liệu đơn hàng từ bảng bill
    $sqlDeleteBill = "DELETE FROM bill WHERE id = :orderId";
    $stmtDeleteBill = $conn->prepare($sqlDeleteBill);
    $stmtDeleteBill->bindParam(':orderId', $orderId, PDO::PARAM_INT);
    $stmtDeleteBill->execute();

    // Đặt biến session để hiển thị thông báo đặt hàng thành công
    $_SESSION['order_cancel_success'] = true;

    $conn = null;
}

?>