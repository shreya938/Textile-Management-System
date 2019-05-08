<?php
session_start();
$f=0;
if(isset($_POST['submit']))
{
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "textile");

$emailadder = $_POST['user'];
$password = $_POST['password'];
$flag=0;
$result = mysqli_query($con, 'SELECT * FROM signup');
while ($row = mysqli_fetch_array($result)) {
		$email = $row['username'];
		$pass = $row['password'];

		if ($emailadder == $email && $password == $pass) {
			$_SESSION["s1"]=$row['username'];
			$_SESSION["s2"]=$row['password'];
			header("Location: ./index1.php");
		} else if ($password != $pass || $emailadder != $email) {
			$f=1;
			//header("Location: ./login1.html");
		}
		else {
			if ($emailadder=="" || $password == "")
			{
				$fl=2;

					 //name.focus();
					 //password.focus();
					 //cpassword.focus();
					 //email.focus();
					 //contact.focus();
			}

		}
}
}
?>

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

		 //name.focus();
		 //password.focus();
		 //cpassword.focus();
		 //email.focus();
		 //contact.focus();
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
		<title>L O G I N</title>
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
		<div id="myModal" class="overlay">
			<center>
				<div class="login">
          <p class="sign" align="center">Sign in</p>
					<form class="form1" method="post">
		<input class="un " type="text"name="user" align="center" placeholder="Username">
		<input class="pass" type="password"name="password" align="center" placeholder="Password">
		<input type="submit" class="submit" align="center" name="submit" value="Login" ><br>
		<a href="signup.php"> Sign Up</p>



<?php if($f==1)
{echo "invalid user";}?>
						</form>
				</div>
		</center>
		</div>

		<div id="myModal1" class="overlay">
			<center>
				<div class="login" id="sign1">
         <p class="sign" align="center">Sign Up</p>
						<form name="vv"  method="post" action ="">
							<input class="un " type="text" align="center" placeholder="Name" name="user">
											<input class="un " type="text" align="center" placeholder="Business Name" name="business">
											<input class="pass" type="password" align="center" placeholder="Password" name="password">
											<input class="pass" type="password" align="center" placeholder=" Confirm Password" name="cpassword">
											<input class="un " type="mail" align="center" placeholder="E-mail" name="mail">
											<input class="un " type="text" align="center" placeholder="Contact no." name="contact" id="contact">
											<input type="submit" name="submit1" class="submit" align="center" value="Sign Up">

						<?php if($fl==1)
						{
							echo "Username already exists";
						}
						 if($fl==2){echo"Please Fill the details";}
						?>
						</form>
				</div>
		</center>
		</div>

		<!-- <script type="text/javascript" src="javascript/index.js"></script> -->
	</body>
</html>
