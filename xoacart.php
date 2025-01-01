<?php include "headerquantri.php";?>
<?php
  include "function_cart_admin.php";

  $cart = new cart();
  $id = $_GET['id'];

  $result = $cart->hienthisanpham_cart($id);
  $row = mysqli_fetch_array($result);
  

  $cart->delete_cart($id);
  ?>