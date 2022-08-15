<?php

	session_start();
 	if(!$_SESSION['login'])
  	{
    header("Location: http://localhost/ekart/admin");
	} 
    session_destroy();
     header("Location: http://localhost/ekart/admin");

?>