<?php
	$con=mysqli_connect("localhost:3306","root","","ekart") or die($mysqli_error($con));
	if(isset($_POST['click']))
	{
		$email=$_POST['email'];
		$mob=$_POST['mob'];
		
		$sql = "Select * From UserTable Where Email = '".$email."' And Mobile = '".$mob."'";
		
		$val = mysqli_query($con,$sql);
		
		if(mysqli_num_rows($val)>0)
		{
			header('location:changepass.php');
		}
		else
		{
			header('location:forget.php');
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
					<td> Mobile </td>
					<td> <input type = "text" name="mob"> </td>
				</tr>
				<tr>
					<td> <input type = "Submit" value = "Check" style = "width: 100px" name="click"> </td>
					<td> <input type = "Submit" value = "Clear" style = "width: 100px"> </td>
				</tr>
			</table> </center>
		</form>
	</body>
</html>