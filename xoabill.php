

<?php include "headerquantri.php";?>
<?php
  include "function_bill_admin.php";

  $bill= new bill();
  $id = $_GET['id'];
  $result = $bill->hienthi_bill($id);
  $row = mysqli_fetch_array($result);

  $bill->delete_bill($id);
  ?>