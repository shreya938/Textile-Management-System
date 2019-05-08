<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "textile");
if (isset($_POST['sub']))
{
  $name=$_POST['product'];
  print_r($name);
  mysqli_query($con,"delete from cart where name='$name'");
  echo "<h1>Product DELETED from Cart</h1>";

}?>
