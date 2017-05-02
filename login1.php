<?php

		if( !(isset($_GET['email']) and isset($_GET['pass']))){
			echo "error";
			exit;
		}


		$email=($_GET['email']);
		echo $email;

		$pass=sha1($_GET['pass']);
		echo $pass;

        echo "a";
        $DataBase ="pgsql:host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;dbname=d32n963hbr8ngb;user=ofwsfkgedzztju;port=5432;sslmode=require;password=fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98;";
        echo $DataBase;
        $db = new PDO($DataBase);
        echo &query;

         $query="Select * from users where email= '" . $email . "' and password= '" . $pass . "' ;" ;
                $result = $db->query($query);
                $row = $result->fetch(PDO::FETCH_ASSOC)
                 if($row){
                    echo $row["id"];
                }
                else{
                     echo "error1";
                }
                $result->closeCursor();
 ?>

