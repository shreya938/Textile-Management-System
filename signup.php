<?php
$fl=0;

if(isset($_POST['submit1']))
{

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "textile");

$u_name=$_POST['user'];
$business=$_POST['business'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$mail=$_POST['mail'];
$contact=$_POST['contact'];
$flag=0;

$result = mysqli_query($con, "SELECT * FROM signup WHERE username like '$u_name'");

if ($u_name == "" || $business =="" || $password == ""|| $cpassword == "" || $mail=="" || $contact=="")
{
	$fl=2;

		 // name.focus();
		 // password.focus();
		 // cpassword.focus();
		 // email.focus();
		 // contact.focus();
}
else if(mysqli_num_rows($result)>0)
{
	$fl=1;
}else {
	$result=mysqli_query($con,"insert into signup VALUES('$u_name','$business','$password','$mail','$contact',NULL)");
	header("Location: ./login.php");
}
}
?>


<!-- <!DOCTYPE html> -->
<html lang="en" dir="ltr">
	<head>
		<title>S I G N  U P</title>
		<link rel="stylesheet" href="css/login-box.css">
		<link rel="icon" href="index_images/favi.png">
		<script type="text/javascript">
			function trial()
			{

				var name = document.forms["vv"]["user"];;
 				var password = document.forms["vv"]["password"];
				var cpassword = document.forms["vv"]["cpassword"];
				var email = document.forms["vv"]["mail"];
				var contact = document.forms["vv"]["contact"];

		    if (name == "" || password == ""|| cpassword == ""|| email == ""|| contact == "")
		    {
		        alert("Please enter your details.");
		        name.focus();
						password.focus();
						cpassword.focus();
						email.focus();
						contact.focus();
		    }

				 if(contact.length < 10 || contact.length >10 )
				{
					window.alert("Please enter your valid telephone number.");
					contact.focus();
				}

			 if(password.value !=cpassword.value)
				{
					window.alert("password not same");
					password.focus();
					cpassword.focus();
				}
			}
	</script>
		<title>
		</title>
	</head>
	<body onload="Load()">
<script type="text/javascript">
function Load() {
	console.log("test");
	document.getElementById('myModal').style.display="block";
	document.getElementById('myModal1').style.display="none";
}
// When the user clicks the button, open the modal
function signup()
{
document.getElementById('myModal1').style.display="block";
document.getElementById('myModal').style.display="none";
}

</script>
		<!-- <a href="#popup2"> login pop</a> -->
	<!--	<div class="body"></div>

		<!--		<div class="header">
					<div>TEAM <span>VR2D's</span></div>
				</div>
				<br> !-->

		<div id="myModal1" class="overlay">
			<center>
				<div class="login" id="sign1">
         <p class="sign" align="center">Sign Up</p>
						<form name="vv"  method="post" action ="" onsubmit="trial()">
							<input class="un " type="text" align="center" placeholder="Name" name="user">
											<input class="un " type="text" align="center" placeholder="Business Name" name="business">
											<input class="pass" type="password" align="center" placeholder="Password" name="password">
											<input class="pass" type="password" align="center" placeholder=" Confirm Password" name="cpassword">
											<input class="un " type="mail" align="center" placeholder="E-mail" name="mail">
											<input class="un " type="text" align="center" placeholder="Contact no." name="contact" id="contact">
										<center>	<input type="submit" name="submit1" class="submit"align = "center" value="Sign Up"</center>
<!--
						username:<br>
						<input type="text" placeholder="username" name="user"><br>
						business name:<br>
						<input type="text" placeholder="business name" name="business"><br>
						password:<br>
						<input type="password" placeholder="password" name="password"><br>
						confirm password:<br>
						<input type="password" placeholder="confirm password" name="cpassword"><br>
						mail:<br>
						<input type="email" placeholder="email" name="mail"><br>
						contact:<br>
						<input type="text" placeholder="contact number" name="contact" id="contact"><br>
						<input type="submit" name="submit1" value="Login" > -->
						<br>
						<?php if($fl==1){echo "Username already exists";}
						else if($fl==2){echo "Fill the details	";}
						?>
						</form>
				</div>
		</center>
		</div>

		<!-- <script type="text/javascript" src="javascript/index.js"></script> -->
	</body>
</html>
