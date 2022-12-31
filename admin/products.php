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

<div class="page-content p-5" id="content">
    <h1 class="display-xs text-white" style="font-size: large;">Product List</h1>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">PID</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Price</th>
      <th scope="col">Available</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
</div>
<?php
	while( $rows = mysqli_fetch_array( $results ) ) {       //everytime i call fetch array it will call first
		extract( $rows );
		echo "<tr>";
		echo "<td> $PID </td>";
		echo "<td> $Title </td>";
        echo "<td> $Author </td>";
        echo "<td> $Price </td>";
        echo "<td> $Available </td>";
        echo "<td> $Category </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
?>
<div class="page-content p-4" id="content">


<a href=addproduct.php style="color: #231942;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
<button class="button-69" role="button">Add New Product</button></a>"
</div>
