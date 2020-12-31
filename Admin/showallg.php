<?php
include('header.php');
include('connection.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<!--/.row-->
	
		<br><br>
<div>
	<h3>Show All Products</h3>
	<div class="topnav">
		<a href="showallmw.php">Men & Women Clothes</a>
		<a href="showallkb.php">Kids & Babies Clothes</a>
		<a href="showallf.php">Fashion & Beauty</a>
		<a href="showallg.php">Gadgets & Acc.</a>
		<a href="showalle.php">Electronics & Acc.</a>
	</div>
</div>

<h3 style="text-align: center;color: red; background-color: white;">Gadgets & Acc.</h3>
<br><br>
<?php
$sql = "SELECT id, name, price,brand, specification, description, photo FROM gadgets";
$result = $connection->query($sql);

if ($result->num_rows > 0) 
{
  echo "<table style><tr><th>ID</th><th>Name</th><th>Price</th><th>Brand</th><th>Specification</th><th>Description</th><th>Photo</th></tr>";
  // output data of each row
  //header('Content-Type: image/jpeg');
  while($row = $result->fetch_assoc()) 
  {
  	$id = $row['id'];
  	$name = $row['name'];
  	$price = $row['price'];
  	$brand = $row['brand'];
  	$specification = $row['specification'];
  	$description = $row['description'];

  	$photo  ='<img src="data:image/jpeg;base64,'.base64_encode( $row['photo'] ).'" />';


     echo "<tr><td>$id</td><td>$name</td><td>$price</td><td>$brand</td><td>$specification</td><td>$description</td><td>$photo</td></tr>";

     
     // echo $photo;
  }
  echo "</table>";
} else {
  echo "0 results";
}

?>


<?php
include('footer.php');
?>