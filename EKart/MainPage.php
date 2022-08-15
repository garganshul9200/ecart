<?php
	$con=mysqli_connect("localhost:3306","root","","ekart") or die($mysqli_error($con));
	if(isset($_POST['click']))
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		
		$sql = "Select * From UserTable Where UserName = '".$uname."' And Password = '".$pass."'";
		
		$val = mysqli_query($con,$sql);
		
		if(mysqli_num_rows($val)>0)
		{
			header('location:index.php');
		}
	}
	
?>

<!DOCTYPE html>
<html>
  <head>
      <center> <title> Online Shopping </title> </center>
  </head>
  <body background = "http://localhost/ekart/images/PicShop.png" alt="" style = "background size:auto">
	<br/> <br/> <h1 align = "Center"> Online Shopping </h1>
	<br/> <br/>
	<form method="POST">
			<center> Username: <input type="text" name="uname"> </center> <br/>
			<center> Password: <input type="password" name="pass"> </center> <br/>
			<center> <input type="Submit" value="Login" name="click"> &ensp;&ensp;&ensp;&ensp; <input type="Reset" value="Clear"> </center> <br/>
			<center> <a href="Forget.php" target="_blank"> Forgot Password ? </a> &ensp;&ensp;&ensp;&ensp; <a href="New.php" target="_blank"> New User ? </a>  </center> <br/>
	</form>
  </body>
</html>