<DOCTYPE HTML!>
<html>
	<head>
		<title>Check IMEI</title>
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
		echo "Database Connected";

		// SQL query
		/*$sql = "Select * from table 1";
		$result = $conn->query($sql);
		$num=mysqli_num_rows($resul*/t);


		mysqli_close();?>
</html>

