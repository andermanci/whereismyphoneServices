<?php

		if( !(isset($_GET['id'])) and !(isset($_GET['token'])) ){
			echo "error";
			exit;
		}


		$dbh = new PDO("pgsql:dbname=d32n963hbr8ngb;host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;port=5432", "ofwsfkgedzztju", "fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98");


		$id=($_GET['id']);
		$token=($_GET['token']);
         echo $id;
         echo $token;

        $sql1 = "UPDATE devices set token= '". $token . "' where id= '" . $id . "' )";
        echo $sql1;
        $insert=$dbh->query($sql1);
         if($insert){
            echo "ongi";
         }
         else{
            echo "error";
         }

         //$statement=$dbh->prepare("SELECT * FROM devices where user_id = ? ");
         //$statement->execute(array($id));
         //$results=$statement->fetchAll(PDO::FETCH_ASSOC);
         //$json=json_encode($results);
         //echo $json;

?>