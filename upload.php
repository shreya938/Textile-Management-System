<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "textile");

 if (isset($_POST["submit"])) {
   $product_name=$_POST['product_name'];
   $files=$_FILES['image'];
   $product_description=$_POST['product_desc'];
   $product_price=$_POST['price'];
   // image settings
   $filename= $files['name'];
   $fileerror =$files['error'];
   $filetmp=$files['tmp_name'];
   $fileext=explode('.',$filename);
   $filecheck= strtolower(end($fileext));

   $fileextstored= array('png','jpg','jpeg' );
   if(in_array($filecheck,$fileextstored))
    {
      $destinationfile='cart_images/'.$filename;
      move_uploaded_file($filetmp,$destinationfile);
      $q="INSERT INTO `cart`(`name`, `image`, `description`, `price`) VALUES ('$product_name','$destinationfile','$product_description','$product_price')";
      $query=mysqli_query($con,$q);
      echo "<h1>Product Added to Cart</h1>";
    }
    else {
      echo "image is not of jpg png and jpeg ext";
    }
 }
?>
