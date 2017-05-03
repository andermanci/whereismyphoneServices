<?php

		if( !(isset($_GET['email']) and isset($_GET['pass']))){
			echo "error";
			exit;
		}


		$dbh = new PDO("pgsql:dbname=d32n963hbr8ngb;host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;port=5432", "ofwsfkgedzztju", "fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98");


		$email=($_GET['email']);
       // echo $email;

        $pass=sha1($_GET['pass']);
       // echo $pass;


        //$solution = $pdo->query("Select * from users where email= '" . $email . "' and password= '" . $pass . "'" );
      //   $solution = $pdo->query("Select * from users " );
        echo "error1";

       // if($solution){
       // echo "erro2";
        //	while($row = $solution->fetch())
          //          {
            //            echo $row['id'] . "\n";
              //      }

       // }
        //else{
        //	echo "error";
        //}


         $sql = "Select * from users where email= '" . $email . "' and password= '" . $pass . "' ";
         $users=$dbh->query($sql);
         if(!$users){
            echo "error";
            exit;
         }
            foreach ($users as $row) {
                echo $row['id'];
            }
?>