<?php

		if( !(isset($_GET['id'])) and !(isset($_GET['name'])) and !(isset($_GET['info'])) and !(isset($_GET['token'])) ){
			echo "error";
			exit;
		}


		$dbh = new PDO("pgsql:dbname=d32n963hbr8ngb;host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;port=5432", "ofwsfkgedzztju", "fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98");


		$id=($_GET['id']);
		$name=($_GET['name']);
		$info=($_GET['info']);
		$token=($_GET['token']);

        $sql = "SELECT MAX(id) + 1 FROM devices";
        $statement = $dbh->prepare($sql);
        $statement->execute(); // no need to add `$sql` here, you can take that out
        $device_id = $statement->fetchColumn();

        $sql1 = "INSERT into devices values ('" . $device_id . "' , '" . $id . "' , '" . $token . "' , '" . $name . "' , '" . $info . "' )";
        $insert=$dbh->query($sql1);
         if($insert){
            echo $device_id;
         }
         else{
            echo "error";
            echo $insert;
         }

         //$statement=$dbh->prepare("SELECT * FROM devices where user_id = ? ");
         //$statement->execute(array($id));
         //$results=$statement->fetchAll(PDO::FETCH_ASSOC);
         //$json=json_encode($results);
         //echo $json;

?>