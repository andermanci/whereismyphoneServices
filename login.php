<?php

		if( !(isset($_GET['email']) and isset($_GET['pass']))){
			echo "error";
			exit;
		}
		try{
				$dbopts = parse_url(getenv('postgres://ofwsfkgedzztju:fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98@ec2-79-125-125-97.eu-west-1.compute.amazonaws.com:5432/d32n963hbr8ngb'));
				echo "a";
				$app->register(new Herrera\Pdo\PdoServiceProvider(),
							   array(
								   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
								   'pdo.username' => $dbopts["user"],
								   'pdo.password' => $dbopts["pass"]
							   )
				);
				echo "b";
		}   
		catch (PDOException $e) {
			echo "error";
			exit;
		 }
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