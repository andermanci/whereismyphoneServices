<?php

		if( !(isset($_GET['email']) and isset($_GET['pass']))){
			echo "error";
			exit;
		}
		try{
				echo "a";
				$app->register(new Herrera\Pdo\PdoServiceProvider(),
							   array(
								   'pdo.dsn' => 'pgsql:dbname=d32n963hbr8ngb;host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;port=5432',
								   'pdo.username' => "ofwsfkgedzztju",
								   'pdo.password' =>"fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98"
							   )
				);
				echo "b";
		}   
		catch (PDOException $e) {
			echo "error";
			exit;
		 }

		
?>