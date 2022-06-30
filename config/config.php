<?php
	session_start();

	$server   = "localhost"; $username = "root"; $password = ""; $database = "imail";
	//$server   = "p3nlmysql7plsk.secureserver.net:3306"; $username = "iMail"; $password = "#Rb6ct27"; $database = "imail";
	$conn = mysqli_connect($server,$username,$password,$database);
	if(!$conn)
	  die("<H2>Unable to Connect</H2>");

	function isLoggedin(){		
		if(isset($_session["user"]))
			return true;
		else
			return false;
	}
?>