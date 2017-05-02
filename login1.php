<?php

		if( !(isset($_GET['email']) and isset($_GET['pass']))){
			echo "error";
			exit;
		}


				echo "a";
                $DataBase = pg_connect("host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com port=5432 dbname=d32n963hbr8ngb user=ofwsfkgedzztju password=fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98");
				echo "b";

		if (!$DataBase) {
			echo "error1";
			exit;
		 }
		$email=($_GET['email']);
		echo $email;

		$pass=sha1.($_GET['pass']);
		echo $pass;
		$query="Select * from users where email= '" . $email . "' and password= '" . $pass . "' ;" ;
        $result=pg_query($DataBase, $query);
		if(!$result){
			$select =pg_fetch_array( $result );
			echo $select[0];
		}
		else{
			echo "error2";
		}
		pg_close($DataBase);
		}
		else{
			echo "error3";
		}
		
?>