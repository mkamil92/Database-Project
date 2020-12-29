<?php
$connection = new mysqli("localhost", "root", "", "dbms");
 
// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 if (isset($_POST['login'])) {
    //echo"pressed...";
    $username   = $_POST['email'];
    $password   = $_POST['password'];
    // echo "$username $password";
    $sql = "select * from useraccount where email = '$username' AND password = '$password'";
    // $sql = "SELECT email , password from useraccount WHERE '".$_POST["email"]."'= email AND 
    //     '".$_POST["password"]."'=password";
   $resultSet  = mysqli_query($connection, $sql); //Syntax error: mysqli_query(connection,query);
    if(mysqli_num_rows($resultSet) > 0){
        $row = mysqli_fetch_assoc($resultSet);
        if($row['email'] == $username && $row['password'] == $password){ // if you are using encryption like md5 or anything else then you have to add in this line accordingly
            echo "Good, Logged In!";
            header('Location:index.php');
        }else{
            echo "Oh No, password not correct!";
        }
    }else{
        //echo "Wrong Email or Password!";
    }
}


// Attempt insert query execution

 
// Close connection
mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	
	<link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
	<!--[if lt IE 9]>
		<link href="css/styles.css" rel="stylesheet">
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" name="login" value="Login"/>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
