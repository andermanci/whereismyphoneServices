<?php

		if( !(isset($_GET['email']) and isset($_GET['pass']))){
			echo "error";
			exit;
		}



		$email=($_GET['email']);
		echo $email;

		$pass=sha1($_GET['pass']);
		echo $pass;


        
		
?>