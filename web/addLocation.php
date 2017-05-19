<?php

		//if( !(isset($_SERVER['id']))){
		//	echo "error";
		//	exit;
		//}


		$dbh = new PDO("pgsql:dbname=d32n963hbr8ngb;host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;port=5432", "ofwsfkgedzztju", "fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98");

        $value = json_decode(file_get_contents('php://input'));
        $array = (array) $value ;
		//$id=($_SERVER['id']);
		//$long=($_POST['longitude']);
		//$lat=($_POST['latitude']);

        $id=$_SERVER['HTTP_id'];
        $long=$array[0]->longitude;
		$lat=$array[0]->latitude;


        $sql = "SELECT MAX(id) + 1 FROM locations";
        $statement = $dbh->prepare($sql);
        $statement->execute(); // no need to add `$sql` here, you can take that out
        $loc_id = $statement->fetchColumn();

        $sql1 = "INSERT into locations values ('" . $loc_id . "' , '" . $id . "' , '" . $long . "' , '" . $lat . "', CURRENT_TIMESTAMP , CURRENT_TIMESTAMP )";
        $insert=$dbh->query($sql1);
         if($insert){
            echo $loc_id;
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