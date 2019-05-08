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
    $result1=mysqli_query($con,"select username,inquiry FROM history WHERE username='$uname'");
    while($row = mysqli_fetch_assoc($result1))
    {
      echo $row["username"].$row["inquiry"];
    }

  }
  else {
      echo ("login first");
  }
}
?>
<html>
<title>history</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/history.css">
<!--Form icons on navigation bar-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src=" http://code.jquery.com/jquery-3.3.1.js"></script>
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
<body>

<!-- Navigation Bar -->
  <div class="navbar">
	  <nav>
	    <div class="logo"><img src="index_images/favi.png" height="25px" width="25px"> VR2D's</div>
	    <ul>
	      <li> <a href="index.php" class="active"><i class="fa fa-fw fa-home"></i>Home</a> </li>
	      <li> <a href="catalog.php">Catalogs</a> </li>
	      <li> <a href="#"> History</a> </li>
	      <li> <a href="leadership.php">Leadership</a> </li>
				<?php
				  if(isset($_SESSION["s1"]))
				  { ?>
				      <li> <a href="destroy.php" class="text" id="log">Logout</a></li>
				    <?php }
				    else{?>

				      <li> <a href="login.php"  onclick="javascript:login()" class="text" id="log">Login/SignUp</a></li>
				    <?php }?>
	      <li> <a href="contactus.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a> </li>
	    </ul>
	  </nav>
	</div>

<div class="middle">

<img src="index_images/person.jpg" alt="Image not found" id="avatar">
    <form method="post" class="forms">
  <input type="submit" name="submit" value="submit">
    </form>
  </div>


<!-- Footer -->
  <footer>
    <section class="base">
      <article class="same">
        <h4>INFORMATION</h4>
        <ul>
          <li><i class="right"></i> <a href="index.php" class="text">Home</a></li>
          <li><i class="right"></i> <a href="catalog.php" class="text">Catalogs</a></li>
          <li><i class="right"></i> <a href="leadership.php" class="text">Leadership</a></li>
          <li><i class="right"></i> <a href="contactus.php" class="text">Contact Us</a></li>

        </ul>
      </article>
      <article class="same">
        <h4>ADDRESS</h4>
      <p>VR2D's <br>
        Dr, R K Desai Marg, <br>
        Opp. Mission Hospital,<br>
        Athwalines, Athwa,<br>
        Surat, Gujarat 395001 <br>
      </p>
        </article>
        <article class="same">
          <h4>CONTACT</h4>
          <p> <i class="fa fa-fw fa-mobile" ></i> +91-9723321000 </p>
          <p> <i class="fa fa-fw fa-mobile" style="margin-top:5px;"></i> +91-9426131900 </p>
          <p> <i class="fa fa-fw fa-envelope" style="margin-top:5px;"></i> rijiyadarshil@gmail.com </p>
          </article>
      </section>
  </footer>

  </body>
  </html>
