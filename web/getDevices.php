<?php

		if( !(isset($_GET['id']))){
			echo "error";
			exit;
		}


		$dbh = new PDO("pgsql:dbname=d32n963hbr8ngb;host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;port=5432", "ofwsfkgedzztju", "fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98");


		$id=($_GET['id']);
       echo "a";




         $sql = "Select * from device  ";
         echo "b";
         $sth=$dbh->prepare($sql);
         $sth->execute();
         $result = $sth->fetchAll(PDO::FETCH_ASSOC);
         print_r($result);
?>