<DOCTYPE HTML!>
<html>
	<head>
		<title>Check Activation Status</title>
	</head>
	<body>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mi_analytics";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		//$q = "SELECT count(main) FROM activationdata ";//WHERE main=860848030000963";//or `COL 4`=860848030000773;
		//$r = $conn->query($q)
		
		$q="SELECT count(main) FROM activationdata where main=860848030000963";
		$r = mysqli_real_query($conn,$q);
		//print mysqli_use_result;
		

		
		//if ($r!=0){
		//echo "activated";}
		//else{
		//echo "NOTFOUND";}
		
		//echo "Database Connected";
		//mysqli_close();
		?>
</html>