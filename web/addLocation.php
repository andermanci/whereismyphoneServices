<?php

		if( !(isset($_GET['id'])) and !(isset($_GET['long'])) and !(isset($_GET['lat']))){
			echo "error";
			exit;
		}


		$dbh = new PDO("pgsql:dbname=d32n963hbr8ngb;host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;port=5432", "ofwsfkgedzztju", "fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98");


		$id=($_GET['id']);
		$long=($_GET['long']);
		$lat=($_GET['lat']);

        $sql = "SELECT MAX(id) + 1 FROM locations";
        $statement = $dbh->prepare($sql);
        $statement->execute(); // no need to add `$sql` here, you can take that out
        $loc_id = $statement->fetchColumn();
        echo $loc_id;
        $sql1 = "INSERT into locations values ('" . $loc_id . "' , '" . $id . "' , '" . $long . "' , '" . $lat . "' CURRENT_TIMESTAMP, CURRENT_TIMESTAMP )";
        $insert=$dbh->query($sql1);
         if($insert){
            echo $loc_id;
         }
         else{
            echo "error2";
            echo $insert;
         }

         //$statement=$dbh->prepare("SELECT * FROM devices where user_id = ? ");
         //$statement->execute(array($id));
         //$results=$statement->fetchAll(PDO::FETCH_ASSOC);
         //$json=json_encode($results);
         //echo $json;

?>