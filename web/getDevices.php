<?php

		if( !(isset($_GET['id']))){
			echo "error";
			exit;
		}


		$dbh = new PDO("pgsql:dbname=d32n963hbr8ngb;host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;port=5432", "ofwsfkgedzztju", "fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98");


		$Userid=($_GET['id']);
       $id=($_GET['devID']);

        $sql = "Select * from devices where user_id= '" . $Userid . "' and id= '" . $id . "' ";
        $devices=$dbh->query($sql);
         $i=0;
            foreach ($devices as $row) {
            $i=$i + 1;
                echo $row['token'];
            }
            if($i==0){
                echo "error";
            	exit;
            }
         //$statement=$dbh->prepare("SELECT * FROM devices where user_id = ? ");
         //$statement->execute(array($id));
         //$results=$statement->fetchAll(PDO::FETCH_ASSOC);
         //$json=json_encode($results);
         //echo $json;

?>