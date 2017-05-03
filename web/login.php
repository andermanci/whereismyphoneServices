<?php

		if( !(isset($_GET['email']) and isset($_GET['pass']))){
			echo "error";
			exit;
		}
		try{
				echo "a";
		$pdo = $app['pdo'];

		$email=($_GET['email']);
        		echo $email;

        		$pass=sha1.($_GET['pass']);
        		echo $pass;
        		$query = $pdo->prepare("Select * from users where email= '" . $email . "' and password= '" . $pass . "' ;" );
        		if($query->execute()){
        			    if ($row = $query->fetch(PDO::FETCH_ASSOC)){
        					echo $row['id'] ;
        				}
        				else{
        					echo "error";
        				}
        		}
        		else{
        			echo "error";
        		}
?>