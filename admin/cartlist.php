<?php 
include 'admin.php';
?>


<?php
	require_once('config.php');
	$conn = mysqli_connect($servername, $username, $password,$dbname)
		or die("Can not connect");


	$results = mysqli_query( $conn, "SELECT * FROM cart" )
		or die("Can not execute query");
        
?>
<div class="page-content p-5" id="content">
    <h1 class="display-sm text-white">Order-list</h1>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Customer</th>
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
</div>

<?php
	while( $rows = mysqli_fetch_array( $results ) ) {       //everytime i call fetch array it will call first
		extract( $rows );
		echo "<tr>";
		echo "<td> $Customer </td>";
		echo "<td> $Product </td>";
        echo "<td> $Quantity </td>";
		echo "</tr> \n";
	}

	echo "<div></table> </div>\n";
?>