<?php 
include 'admin.php';
?>

<link rel="stylesheet" href="product.css">

<?php
	require_once('config.php');
	$conn = mysqli_connect($servername, $username, $password,$dbname)
		or die("Can not connect");


	$results = mysqli_query( $conn, "SELECT * FROM products" )
		or die("Can not execute query");    
?>


