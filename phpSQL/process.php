<?PHP 		
		session_start();
	
		if(isset($_POST['submit'])){
	//connect to database
		include("test/database.php");
		//if cannot connect return error
		$dbconn=pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD)
				or die('Could not connect: ' . pg_last_error());
			$username = $_POST['username'];
			$password = $_POST['password'];

			$result = pg_prepare($dbconn, "auth", 'SELECT * FROM DDL.Login WHERE username = $1' );
			$result = pg_execute($dbconn, "auth", array($username));
			
			$row = pg_fetch_array($result);
			//echo "$row[salt]";
			$pass= ($password.$row[salt]);
			
	//concatenates the salt with the password 
			$passhash = sha1($pass); 
				
	//checks to see if the correct password was entered
			if($passhash == $row[password_hash]){
				$action= "login";
				$ip = $_SERVER['REMOTE_ADDR'];
				
				$result = pg_prepare($dbconn, "ipinsert", 'INSERT INTO DDL.log( username, ip_address, action ) VALUES ( $1, $2, $3 )');
               	$result = pg_execute($dbconn, "ipinsert", array($username, $ip, $action)) or die('Query failed: '. pg_last_error());

	//set session to username		
               	$_SESSION['username'] = $username;
               	$query="SELECT P.sso FROM DDL.Person P WHERE P.username = '".$username."';";
               	// echo $query;
               	$user = pg_query($query)or die('Query failed: '. pg_last_error());
               	$line=pg_fetch_assoc($user);
               	// echo "user: ".$line['sso']."<br>";
               	//check if user is not a faculty
               	pg_prepare($dbconn,"applicant",'SELECT iaf.sso, iaf.admin FROM DDL.is_a_faculty iaf WHERE iaf.sso = $1')or die('Query failed: '. pg_last_error());
               	$result = pg_execute($dbconn,"applicant",array($line['sso']));
               	$line=pg_fetch_assoc($result);
               	// echo $line['iaf.sso'];
               	//user was found in faculty table
       			pg_close($dbconn);

               	if($line["sso"]>=0){
               		//if faculty is the admin
               		if($line["admin"]=='y')
               			header("Location: adminpage.php");
               		else
               			header("Location: facultypage.php");
               	}
               	//if logined in user is not a faculty
               	else
               		header("Location: home.php");
			}
	
	//checks statement
		else{
			echo "<br><div id='invalid'><b>Wrong username or password<b></div>";
		}
		pg_close($dbconn);
	}


?>	
