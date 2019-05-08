<?php
session_start();
$f=0;
if(isset($_POST['submit']))
{
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "textile");

  if(isset($_SESSION["s1"]) && isset($_SESSION["s2"]))
  {

    $uname=$_SESSION["s1"];
    $pass=$_SESSION["s2"];
    // $res=mysqli_query($con,"SELECT * FROM `cart`");
    // $row2=mysqli_fetch_row($res);
    // $product_nam = $row2[1];
    $product_nam= $_POST['hidden_name'];
    $result1=mysqli_query($con,"select * FROM signup WHERE username='$uname'");
    $row=mysqli_fetch_array($result1);
    $userid=$row['userid'];
    $query1= "INSERT INTO `history`(`username`, `userid`, `inquiry`) VALUES ('$uname','$userid','$product_nam')";
    $result=mysqli_query($con,$query1);
      ?>
      <script type="text/javascript">alert("your requirement for <?php echo $product_nam; ?> cloth have been recorded.");</script>

    <?php
  }
  else {
     ?>

      <script type="text/javascript">
        alert("Please Login!!");
      </script>
      <?php
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C A T A L O G</title>
    <link rel="icon" href="index_images/favi.png" class="icon">
    <link rel="stylesheet" href="css/catalog.css">
    <!--Form icons on navigation bar-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src=" http://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">
    <script type="text/javascript">
      $(window).on('scroll',function () {
        if ($(window).scrollTop()) {
          $('nav').addClass('black');
        }
        else {
          $('nav').removeClass('black');
        }
      })
    </script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body style="  font-family: Quicksand;">
    <!-- Body wrapper -->
    <div class="wrapper">

      <!-- navigation bar -->
  <div class="navbar">
    <nav>
      <div class="logo"><img src="index_images/favi.png" height="25px" width="25px"> VR2D's</div>
      <ul>
        <li> <a href="index1.php" style="  text-decoration: none;"  ><i class="fa fa-fw fa-home" ></i>Home</a> </li>
        <li> <a href="catalog.php" style="  text-decoration: none;">Catalogs</a> </li>
        <li> <a href="leadership.php" style="  text-decoration: none;">Leadership</a> </li>
        <?php
          if(isset($_SESSION["s1"]))
          { ?>
              <li> <a href="destroy.php" class="text" id="log" style="  text-decoration: none;">Logout</a></li>
            <?php }
            else{?>

              <li> <a href="login.php"  onclick="javascript:login()" class="text" id="log" style="  text-decoration: none;">Login/SignUp</a></li>
            <?php }?>
        <li> <a href="contactus.php" style="  text-decoration: none;"><i class="fa fa-fw fa-envelope" ></i>Contact Us</a> </li>
      </ul>
    </nav>
  </div>


  <!-- slideshow class=slideshow -->
      <div class="slideshow">
          <img src="index_images/10.jpg" alt="Image not found" class="slides">
          <img src="index_images/20.jpg" alt="Image not found" class="slides">
          <img src="index_images/30.jpg" alt="Image not found" class="slides">
          <img src="index_images/40.jpg" alt="Image not found" class="slides">
          <img src="index_images/50.jpeg" alt="Image not found" class="slides">
          </div>


<!-- Product insertion -->
<div class="product" style="margin-top:70px;">
  <div class="product_title">
    <pre> <h4> P R O D U C T</h4></pre>
    <hr>
  </div>
  <div class="row">
  <?php
  $con = mysqli_connect("localhost", "root", "");
  mysqli_select_db($con, "textile");

    $q="SELECT * FROM cart";
    $qfire=mysqli_query($con,$q);
     $num=mysqli_num_rows($qfire);
     if ($num > 0){
       while ($product=mysqli_fetch_array($qfire)) {
        ?>
          <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" style="margin-right:30px;margin-left:30px;margin-top:30px;">
              <form method="post">
                <div class="card">
                  <h5 class="card-title bg-info text-white p-2"> <?php echo $product['name']; ?> </h5>
                  <div class="card-body">
                      <img src="<?php echo $product['image']; ?>" alt="Image not found" class="img-fluid mb-3">
                      <h6><?php echo $product['description']; ?></h6>
                      <h6> &#8377;<?php echo $product['price']; ?></h6>
                      <input type="hidden" name="hidden_name" value="<?php echo $product['name']; ?>">
                  </div>
                  <div class="">
                    <form  method="post">
                      <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-success mb-2" name="submit" style="float:right;margin-right:10px;">
                    </form>
                    </div>
                </div>
              </form>
          </div>
        <?php
        // header('Location:catalog1.php');
       }
     }
    ?>
</div>
</div>


                <footer class="footer">
                  <section class="base">
                    <article class="same">
                      <h6>INFORMATION</h6>
                      <ul>
                        <li><i class="right"></i> <a href="index1.php" class="text">Home</a></li>
                        <li><i class="right"></i> <a href="catalog.php" class="text">Catalogs</a></li>
                        <li><i class="right"></i> <a href="leadership.php" class="text">Leadership</a></li>
                        <li><i class="right"></i> <a href="contactus.php" class="text">Contact Us</a></li>

                      </ul>
                    </article>
                    <article class="same">
                      <h6>ADDRESS</h6>
                    <p>VR2D's <br>
                      Dr, R K Desai Marg, <br>
                      Opp. Mission Hospital,<br>
                      Athwalines, Athwa,<br>
                      Surat, Gujarat 395001 <br>
                    </p>
                      </article>
                      <article class="same">
                        <h6>CONTACT</h6>
                        <p> <i class="fa fa-fw fa-mobile" ></i> +91-9723321000 </p>
                        <p> <i class="fa fa-fw fa-mobile" style="margin-top:5px;"></i> +91-9426131900 </p>
                        <p> <i class="fa fa-fw fa-envelope" style="margin-top:5px;"></i> rijiyadarshil@gmail.com </p>
                        </article>
                    </section>
                </footer>

      <script type="text/javascript" src="javascript/index.js"></script>
      <script type="text/javascript" src="javascript/catalog.js"></script>
            <script  type="text/javascript" src="javascript/inquiry.js"></script>
  </body>
</html>
