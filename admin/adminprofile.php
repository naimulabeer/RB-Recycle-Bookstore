<?php 
include 'admin.php';
?>

<?php
	require_once('config.php');
	$conn = mysqli_connect($servername, $username, $password,$dbname)
		or die("Can not connect");


	$results = mysqli_query( $conn, "SELECT * FROM admin" )
		or die("Can not execute query");    

	echo "<div> <table border> </div> \n";
	echo "<div><th>Admin</th> <th>Email</th> <th>Password</th> <th>Number</th> </div>";

	while( $rows = mysqli_fetch_array( $results ) ) {       //everytime i call fetch array it will call first
		extract( $rows );
		echo "<tr>";
		echo "<td> $username </td>";
		echo "<td> $email </td>";
        echo "<td> $password </td>";
        echo "<td> $number </td>";
		echo "</tr> \n";
	}

	echo "<div></table> </div>\n";
?>