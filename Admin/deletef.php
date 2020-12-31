<?php
include('header.php');
include('connection.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<!--/.row-->
	
		<br><br>
<div>
	<h3 style="color: red;font-weight: bold;">Delete Products</h3>
	<div class="topnav">
		<a href="deletemw.php">Men & Women Clothes</a>
		<a href="deletekb.php">Kids & Babies Clothes</a>
		<a href="deletef.php">Fashion & Beauty</a>
		<a href="deleteg.php">Gadgets & Acc.</a>
		<a href="deletee.php">Electronics & Acc.</a>
	</div>
  <h3 style="text-align: center;color: red; background-color: white;">Fashion & Beauty</h3>
  <h3 style="color: red;">Enter the id of product for Deletion</h4>
  <form action="" method="post">
    <input type="number" name="delete" required/>
    <input type="submit" value="Delete" name="submitdelete" required/>
  </form>
</div>
<br><br>


<?php
if (isset($_POST['submitdelete'])) 
{
  $id = $_POST['delete'];
  echo $id;
  $sql = "SELECT id FROM fashion";
  $result = $connection->query($sql);

  if ($result->num_rows > 0) 
  {
    while($row = $result->fetch_assoc()) 
    {
    	if($id == $row["id"])
      {
        $query = "DELETE FROM fashion WHERE id = '$id'";
        if ($connection->query($query) === TRUE)
        {
          echo"<script>alert('Record DELETED...');location='deletef.php'</script>";
          break;
        }
      }
    }
  }
         echo"<script>alert('Record Not Deleted...');location='deletef.php'</script>";  

}
?>

<?php
include('footer.php');
?>