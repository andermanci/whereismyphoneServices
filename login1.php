<?php

		if( !(isset($_GET['email']) and isset($_GET['pass']))){
			echo "error";
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