<?php
include('header.php');
include('connection.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<!--/.row-->
	
		<br><br>
<div>
	<h3>Update Products</h3>
	<div class="topnav">
		<a href="updatemw.php">Men & Women Clothes</a>
		<a href="updatekb.php">Kids & Babies Clothes</a>
		<a href="updatef.php">Fashion & Beauty</a>
		<a href="updateg.php">Gadgets & Acc.</a>
		<a href="updatee.php">Electronics & Acc.</a>
	</div>
</div>

<h3 style="text-align: center;color: red; background-color: white;">Fashion & Beauty</h3>
<br>
  <hr style="border:3px dashed red;" />
  <h3 style="color: red;">Enter the id of product for Updation</h4>
  <!-- <form action="" method="post"> -->
    <!-- <input type="text" name="updatecheckinput" required/> -->
    <!-- <input type="submit" value="Enter" name="updatecheckbutton" required/> -->
  <!-- </form> -->
</div>
<br><br>


<?php
if (isset($_POST['add'])) 
{

    // echo $_POST['check'];
   // echo"<script>alert('checked');</script>"; 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $photo = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
    $specification = $_POST['specification'];
    $description = $_POST['description'];
    
    $query = "SELECT id FROM fashion";
    $result = $connection->query($query);
    $idcheck = $_POST['check'];


  $sql = "SELECT id FROM fashion";
  $result = $connection->query($sql);

  if ($result->num_rows > 0) 
  {
    while($row = $result->fetch_assoc()) 
    {
      if($idcheck == $row["id"])
       {
          $query = "UPDATE fashion SET id='$id', name='$name', price='$price', brand='$brand', description='$description', specification='$specification', photo='$photo' WHERE id = '$idcheck'";
          $query_run = mysqli_query($connection, $query);
          if($query_run)
          {
            echo"<script>alert('Record Updated...');location='updatef.php'</script>";
            break;  
          }
         
        }
    }
  }
         echo"<script>alert('Record Not Updated...');location='updatef.php'</script>";  

}
?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="main-div">
      
<form action="" method="post"  enctype="multipart/form-data"> 
    <input type="text" name="check" required/>

      <br>
      <hr style="border:3px dashed red;" />
      <br>
      <h3 style="color: red;">Enter the data of product for Updation and Submit</h4><br>
    <table>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Brand</th>
    </table>
    <br>
    <div>
      <input type = "number" name="id" size="15" required/>
      <input type = "text" name="name" size="18" required/>
      <input type = "text" name="price" size="17" required/>
      <input type = "text" name="brand" size="18" required/>
    </div>
      <h3 style="color:red; font-weight: bold">Add Image</h3>
    <!-- <div class="image-upload-wrap"> -->
      <!-- <input class="file-upload-input" type="file" name="photo" onchange="readURL(this);" accept="image/**" required> -->
      <input type="file" name="photo" class='form-control'/>
     <!--  </div> -->
      <div class="file-upload-content">
          <img class="file-upload-image" src="#"/>
          <div class="image-title-wrap">
          </div>
      </div>
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
include('footer.php');
?>


