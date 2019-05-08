<html>
	<head>
		<title>Profile Information</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link href="css/profile.css" rel="stylesheet">
	</head>
	<body>
	<?php
	session_start();
	$flag=0;
	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "textile");
	if($flag==0)
	{
		if(isset($_SESSION["s1"]))
		{
			$uname = $_SESSION['s1'];
			$res = mysqli_query($con, "select * from signup where username ='$uname'");
		}

		while($row=mysqli_fetch_array($res))
		{
			$uname1 = $row['username'];
			$business = $row['business_name'];
			$pass = $row['password'];
			$email = $row['email'];
			$contact = $row['contact'];
		}
	}



if(isset($_POST['submit']))
{
		$uname = $_SESSION['s1'];

		$u_name = $_POST['username'];
		$u_email=$_POST['email'];
		$b_name=$_POST['business'];
		$u_con=$_POST['contact'];
		$result=mysqli_query($con,"update signup set business_name='$b_name', email='$u_email', contact='$u_con'  where username='$u_name'");
		$flag=1;
		if($flag==1)
		{
			$res1 = mysqli_query($con, "select * from signup where username ='$uname'");

			while($row=mysqli_fetch_array($res1))
			{
				$name1 = $row['username'];
				$business1 = $row['business_name'];
				$email1 = $row['email'];
				$contact1 = $row['contact'];
			}
		}
	}


	if(isset($_POST['redirect']))
	{
		header('Location: index1.php');
	}
	if(isset($_POST['delete']))
	{
		$uname = $_SESSION['s1'];
		$result=mysqli_query($con,"delete from signup where username='$uname'");
		session_destroy();
		header('Location: index1.php');
	}
?>
<div class="sidenav">
         <div class="login-main-text">
            <h2>VR2D'S<br> Profile Page</h2>
            <p>Access Yourself from here.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
		<form action="" method="post">
			<div class="form-group">
				<label>Name : </label>
				<input type="text" name="username" class="form-control"  value="<?php if($flag==0){echo($uname1);}else{echo($name1);} ?>"/>
			</div>
			<div class="form-group">
				<label>Email : </label>
				<input type="text" name="email" class="form-control" value="<?php if($flag==0){echo($email);}else{echo($email1);} ?>"/>
			</div>
			<div class="form-group">
				<label>Business name: </label>
				<input type="text" name="business" class="form-control" value="<?php if($flag==0){echo($business);}else{echo($business1);} ?>"/></label>
			</div>
			<div class="form-group">
				<label>Contact: </label>
				<input type="text" name="contact" class="form-control" value="<?php if($flag==0){echo($contact);}else{echo($contact1);} ?>"/>
			</div>

			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-black">Update Details</button>
			</div>
				<button type="submit" name="redirect" class="btn btn-black">Back to Homepage</button>
				<button type="submit" name="delete" class="btn btn-black">Deactivate Account</button>
			</form>
		</div>
		</div>
		</div>
	</body>
</html>
