<?php
include 'admin.php';
?>

<?php

	$Title = $_GET["Title"];


	require_once('config.php');

	$conn = mysqli_connect( $servername, $username, $password,$dbname )

		or die("Can not connect");



	mysqli_query( $conn, "DELETE FROM products WHERE Title='$Title' ")

		or die("Can not execute query");




?>

<div class="page-content p-5" id="content">
    <p>Product Deleted</p>
    <p><a href=products.php style="color: #840032;">Show all products</a>
</div>