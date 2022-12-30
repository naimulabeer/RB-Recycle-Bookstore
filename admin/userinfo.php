<?php 
include 'admin.php';
?>

<?php
	require_once('config.php');
	$conn = mysqli_connect($servername, $username, $password,$dbname)
		or die("Can not connect");


	$results = mysqli_query( $conn, "SELECT * FROM userinfo" )
		or die("Can not execute query");    
?>

<div class="page-content p-5" id="content">
    <h1 class="display-xs text-white" style="font-size: large;">User Information</h1>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Age</th>
      <th scope="col">Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
</div>

<?php
	while( $rows = mysqli_fetch_array( $results ) ) {       //everytime i call fetch array it will call first
		extract( $rows );
		echo "<tr>";
		echo "<td> $firstname </td>";
		echo "<td> $lastname </td>";
        echo "<td> $email </td>";
        echo "<td> $password </td>";
        echo "<td> $age </td>";
        echo "<td> $pnumber </td>";
        echo "<td> $address </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
?>