<?php include "headerquantri.php";?>
<?php
  include "function_lienhe.php";

  $lienhe = new lienhe();
  $sdt = $_GET['sdt'];
  $result = $lienhe->hienthisdt($sdt);
  $row = mysqli_fetch_array($result);
  

  $lienhe->delete($sdt);
  ?>

