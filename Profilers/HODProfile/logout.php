<?php
	session_start();
		if(isset($_SESSION['husername'])){
			session_destroy();
	
	header("location: ../../Homepage/home.php");
			
		}
	?>