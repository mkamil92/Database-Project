<?php
$connection = new mysqli("localhost", "root", "", "dbms");
 
// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
if (isset($_POST['submit'])) {
    
    $sql = "INSERT INTO useraccount (first_name, last_name, email, phone, password)
        VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["email"]."', 
        '".$_POST["phone"]."', '".$_POST["password"]."')";
    if($connection->query($sql)==false){
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    } 
}

else if (isset($_POST['login'])) 
{
    $username   = $_POST['email1'];
    $password   = $_POST['password1'];
    $sql = "select * from useraccount where email = '$username' AND password = '$password'";

    $resultSet  = mysqli_query($connection, $sql);
    if(mysqli_num_rows($resultSet) > 0)
    {
        $row = mysqli_fetch_assoc($resultSet);
        if($row['email'] == $username && $row['password'] == $password)
        {
            $_SESSION["email1"]=$username;
            $_SESSION["password1"]=$password;
            header('Location:index.php');
        }
        
    }  

    
}
// else
// {
//     echo'<script>alert("Email or Password is wrong");</script>';
// } 

        


mysqli_close($connection);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
    	
        <!-- Top bar Start -->
        
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                                <img src="img/logo.png" alt="Logo">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
       
        <!-- Breadcrumb End -->
        
        <!-- Login Start -->

        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="loginwrite">Log in</h3>
                         <form action="login.php" method="post">
                        <div class="login-form">
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" name=
                                    "email1" placeholder="E-mail" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" name="password1" type="password" placeholder="Password" required>
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="newaccount">
                                        <label class="custom-control-label" for="newaccount">Keep me signed in</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Submit" name="login" class="btn"/>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">  
                        <h3 class="loginwrite">Create Account</h3>  
                        <form action="login.php" method="post">
                        <div class="register-form">
                            <div class="row">
                            
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="first_name" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name"</label>
                                    <input class="form-control" type="text" name="last_name" placeholder="Last Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text" name="phone" placeholder="Mobile No" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="text" name="password" placeholder="Password" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Retype Password</label>
                                    <input class="form-control" type="text" name="retype" placeholder="Password" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="submit" value="Submit" class="btn"/>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Login End -->
        
        <!-- Footer Start -->
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">Sukkur IBA University</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">Sukkur IBA University</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

