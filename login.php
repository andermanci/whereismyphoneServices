<?php

		if( !(isset($_GET['email']) and isset($_GET['pass']))){
			echo "error";
			exit;
		}
		try{
				$dbopts = parse_url(getenv('DATABASE_URL'));
				$app->register(new Herrera\Pdo\PdoServiceProvider(),
							   array(
								   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
								   'pdo.username' => $dbopts["user"],
								   'pdo.password' => $dbopts["pass"]
							   )
				);
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