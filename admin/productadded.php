<?php
include 'admin.php';
?>

<?php


	$PID = $_GET["PID"];

	$Title = $_GET["Title"];

    $Author = $_GET["Author"];

    $MRP = $_GET["MRP"];

    $Price = $_GET["Price"];

    $Discount = $_GET["Discount"];

    $Available = $_GET["Available"];

    $Description = $_GET["Description"];

    $Category = $_GET["Category"];



	require_once('config.php');

	$conn = mysqli_connect($servername, $username, $password,$dbname)

		or die("Can not connect");



	mysqli_query( $conn, "INSERT INTO products VALUES ( '$PID', '$Title', '$Author', '$MRP', '$Price', '$Discount', '$Available', '$Description', '$Category' )" )

		or die("Can not execute query");

?>

<div class="page-content p-5" id="content">

    <?php

	echo "Record inserted:<br> PID = $PID <br> Title = $Title <br> Author = $Author <br> MRP = $MRP <br> Price = $Price <br> Discount = $Discount <br> Available = $Available <br> Description = $Description <br> Category = $Category";



?>

<div class="page-content p-5" id="content">
    <p><a href=products.php>Book Section</a>
</div>

