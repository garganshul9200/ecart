<?php
	$con=mysqli_connect("localhost:3306","root","","ekart") or die($mysqli_error($con));
	if(isset($_POST['click']))
	{
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		$email=$_POST['email'];
		
		if($pass1==$pass2)
		{
			$sql = "Update UserTable Set Password = '".$pass2."' Where Email = '".$email."'";
		
			$val = mysqli_query($con,$sql);
		
			if($val)
			{
				echo "Password Changed";
				header('location:MainPage.php');
			}
			else
			{
				header('location:forget.php');
			}
		}
		else
		{
			echo "Password Mismatch";
		}
	}
	
?>

<html>
	<head>
		<title> Forget Password </title>
	</head>

	<body background = "http://localhost/ekart/images/PicShop.png" alt="" style = "background size:auto"> <br/> <br/>
		<h1 align = "center"> ::: Forgot Password ::: </h1> <br/> <br/>
		<br/> <br/> 
		<form method="POST">
			<center> <table border="1">
				<tr>
					<td> Email Id </td>
					<td> <input type = "email" name="email"> </td>
				</tr>
				<tr>
					<td> Password </td>
					<td> <input type = "password" name="pass1"> </td>
				</tr>
				<tr>
					<td> Confirm Password </td>
					<td> <input type = "password" name="pass2"> </td>
				</tr>
				<tr>
					<td> <input type = "Submit" value = "Check" style = "width: 100px" name="click"> </td>
					<td> <input type = "Submit" value = "Clear" style = "width: 100px"> </td>
				</tr>
			</table> </center>
		</form>
	</body>
</html>