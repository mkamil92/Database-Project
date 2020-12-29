
<?php
include('connection.php');
include('header.php');
include('categories.php');

if (isset($_POST['add'])) 
{
	
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $brand = $_POST['brand'];
    $photo = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));

    $specification = $_POST['specification'];
    $description = $_POST['description'];
    
    $query = "SELECT id FROM mwclothes";
	$result = $connection->query($query);
	if ($result->num_rows > 0) 
	{
	  // output data of each row
	  while($row = $result->fetch_assoc()) 
	  {
	    if($id == $row["id"])
	    {
	    	echo"<script>alert('Record Already exists Please Re-Enter...');location='menwomen.php'</script>";
	    	break;
	    }
	  }
	
	}
		$sql = "INSERT INTO mwclothes (id,name,price,color, photo, brand, specification,description) VALUES ('$id', '$name', '$price', '$color', '$photo' ,'$brand', '$specification', '$description')";
			$query_run = mysqli_query($connection, $sql);
			if($query_run)
			{
				echo"<script>alert('Record Added...');location='upload.php'</script>";
			}
			else
			{
				echo"<script>alert('Record Not Added...');location='menwomen.php'</script>";	
			}

}

mysqli_close($connection);
?>


<h3 style="text-align: center;color: red; background-color: white;">Men & Women</h3>
<h3>Enter the Data of Product</h3>
<div class="main-div">
<form action="" method="post"  enctype="multipart/form-data">	
		<table>
			<th style="padding-left: 58px;">ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Color</th>
			<th>Brand</th>
		</table>
		<div>
			<input type = "number" name="id" size="12" required/>
			<input type = "text" name="name" size="18" required/>
			<input type = "text" name="price" size="17" required/>
			<input type = "text" name="color" size="18" required/>
			<input type = "text" name="brand" size="18" required/>
		</div>
			<h3 style="color:red; font-weight: bold">Add Image</h3>
		<!-- <div class="image-upload-wrap"> -->
			<!-- <input class="file-upload-input" type="file" name="photo" onchange="readURL(this);" accept="image/**" required> -->
			<input type="file" name="photo" class='form-control'/>
	   <!--  </div> -->
	   
	    <div>
			<h3 style="color:red; font-weight: bold">Add Specification</h3>
			<textarea name="specification" rows="4" cols="100" required></textarea>
			<h3 style="color:red; font-weight: bold">Add Description</h3>
			<textarea name="description" rows="4" cols="100" required></textarea>
		</div>	
		<div>
			<input type="submit" value="Submit" name="add" style="background-color: black;font-size: 25px;" />
		</div>
</form>
</div>
<?php
('footer.php');
?>
	


