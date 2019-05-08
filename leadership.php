 <?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"Textile");
 ?>
<html>
<title>L E A D E R S H I P</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/leadership.css">
<link rel="icon" href="index_images/favi.png">

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
	<div class="navbar">
	  <nav>
	    <div class="logo"><img src="index_images/favi.png" height="25px" width="25px"> VR2D's</div>
	    <ul>
	      <li> <a href="index1.php" class="active"><i class="fa fa-fw fa-home"></i>Home</a> </li>
	      <li> <a href="catalog.php">Catalogs</a> </li>
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
<div class="images">
	<img src="index_images/L-1.jpg" height="400px" width="100%" style="margin-top:80px;">
</div>
<table align="center">
<tr>
<td>
<br>
<br>
<pre class="leader"><strong>L  E  A  D  E  R  S  H  I  P</strong></pre>
<br>
<br>
</td>
</td>
</tr>
<tr>
<td>
<div class="container">
	<img class="image" src="index_images/1.jpg" alt="image not found">
	<div class="middle">
		<div class="text">
		<pre align="center">
DARSHIL RIJIYA
160420107045
WEB DEVELOPER
COMPUTER DEPARTMENT
SCET
SURAT
		</pre>
		</div>
	</div>
</div>
</td>

<td>
<div class="container">
	<img class="image" src="index_images/divyesh.jpeg" alt="image not found">
	<div class="middle">
		<div class="text">
		<pre align="center">
DIVYESH SAVANI
160420107049
WEB DEVELOPER
COMPUTER DEPARTMENT
SCET
SURAT
		</pre>
		</div>
	</div>
</div>
</td>

<td>
<div class="container">
	<img class="image" src="index_images/dhruvi.jpeg" alt="image not found">
	<div class="middle">
		<div class="text">
		<pre align="center">
DHRUVI SHAH
160420107050
WEB DEVELOPER
COMPUTER DEPARTMENT
SCET
SURAT
		</pre>
		</div>
	</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="container">
	<img class="image" src="index_images/shreya.jpg" alt="image not found">
	<div class="middle">
		<div class="text">
		<pre align="center">
SHREYA BOHRA
160420107054
WEB DEVELOPER
COMPUTER DEPARTMENT
SCET
SURAT
		</pre>
		</div>
	</div>
</div>
</td>
<td>
<div class="container">
	<img class="image" src="index_images/vivek.jpeg" alt="image not found">
	<div class="middle">
		<div class="text">
		<pre align="center">
VIVEK SANEPARA
160420107061
WEB DEVELOPER
COMPUTER DEPARTMENT
SCET
SURAT
		</pre>
		</div>
	</div>
</div>
</td>
</tr>
</table>

<footer>
  <section class="base">
    <article class="same">
      <h4>INFORMATION</h4>
      <ul>
        <li><i class="right"></i> <a href="index1.php" class="text">Home</a></li>
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

<script src="javascript/index.js" type="text/javascript"></script>
</body>
</html>
