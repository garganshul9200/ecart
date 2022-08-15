<?php
	$con=mysqli_connect("localhost:3306","root","","ekart") or die($mysqli_error($con));
	if(isset($_POST['click']))
	{
		$name=$_POST['name'];
		$uname=$_POST['uname'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$mob=$_POST['mob'];
		
		$sql = "Insert Into UserTable VALUES ('".$name."' , '".$uname."' , '".$email."' , '".$pass."' , '".$mob."')";
		
		$val = mysqli_query($con,$sql);
		
		if($val)
		{
			header('location:MainPage.php');
		}
		else
		{
			header('location:New.php');
		}
	}
?>


<html>
	<head>
		<title> New User </title>
	</head>

	<body background = "http://localhost/ekart/images/PicShop.png" alt="" style = "background size:auto"> <br/> <br/>
		<center> <h1> ::: New User Registration ::: </h1> </center> <br/>
		<br/> <br/> 
		<form method="POST">
			<table border="2" align="center">
				<tr>
					<td> Name </td>
					<td> <input type = "text" name="name"> </td>
				</tr>
				<tr>
					<td> Username </td>
					<td> <input type = "text" name="uname"> </td>
				</tr>
				<tr>
					<td> Email Id </td>
					<td> <input type = "email" name="email"> </td>
				</tr>
				<tr>
					<td> Password </td>
					<td> <input type = "password" name="pass"> </td>
				</tr>
				<tr>
					<td> Mobile </td>
					<td> <input type = "text" name="mob"> </td>
				</tr>
				<tr>
					<td> <input type = "Submit" value="Save" style="width: 100px" name="click"> </td>
					<td> <input type = "Reset" value="Clear" style="width: 100px"> </td>
				</tr>
			</table>
		</form>
	</body>
</html>