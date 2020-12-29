<?php
$connection = new mysqli("localhost", "root", "", "dbms");
 
// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();

if(!isset($_SESSION['email']))
{
    header('Location:login.php');
}
// else
// {
    $sql = "select * from mwclothes";

    $resultSet  = mysqli_query($connection, $sql);
    if(mysqli_num_rows($resultSet) > 0)
    {
        $row = mysqli_fetch_assoc($resultSet);
        
    }  

     $sql1 = "select * from kbclothes";

    $resultSet1  = mysqli_query($connection, $sql1);
    if(mysqli_num_rows($resultSet1) > 0)
    {
        $row1 = mysqli_fetch_assoc($resultSet1);
        
    }  
    $_SESSION['values']=[];

    if(isset($_POST["submitL"]))
   {
        session_unset();
        session_destroy(); 
        header('Location:login.php');
    }
    
// }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EStore</title>
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
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        akhlaqaliorakzai@gmail.com / kamilshaheen@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        03068502002 / 03025478961
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="product-list.html" class="nav-item nav-link">Products</a>
                            <a href="product-detail.html" class="nav-item nav-link">Product Detail</a>
                            <a href="cart.php" class="nav-item nav-link">Cart</a>
                            <a href="checkout.html" class="nav-item nav-link">Checkout</a>
                            <a href="my-account.html" class="nav-item nav-link">My Account</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                   <a href="login.php" class="dropdown-item">Login & Register</a>
                                    <a href="contact.html" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                 <form action="" method="post">
                                        <a href="login.php" class="dropdown-item">Log Out</a>
                                    </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html"><i class="fa fa-home"></i>Home</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="FashionBeauty.html"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="KidsClothes.html"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="MenWomenClothes.html"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="GadgetsAcc.html"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ElectronicsAcc.html"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="img/slider-1.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p><?php echo $row['name'];
                                         ?></p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i><?php array_push($_SESSION['values'],$row['name']); ?>Add to Cart</a>
                                </div>
                            </div>
                            <div class="header-slider-item"
                                <?php $row = mysqli_fetch_assoc($resultSet);
                                        if($row['id']=='2')
                                        {
                                             $val2 = $row['name'];
                                        }?>>
                                <img src="img/slider-2.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p><?php echo $val2;?></p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Add to Cart <?php array_push($_SESSION['values'],$val2);?></a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-3.jpg" alt="Slider Image" />
                                <div class="header-slider-caption"
                                    <?php $row = mysqli_fetch_assoc($resultSet);
                                        if($row['id']=='3')
                                        {
                                             $val3 = $row['name'];
                                        }?>>
                                    <p><?php echo $val3;  ?></p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i><?php array_push($_SESSION['values'],$val3)  ?>Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/category-1.jpg" />
                                <a class="img-text" href=""
                                    <?php $row = mysqli_fetch_assoc($resultSet);
                                        if($row['id']=='4')
                                        {
                                             $val4 = $row['name'];
                                        }
                                        ?>>
                                    <p><?php echo $val4; ?></p>
                                </a>
                            </div>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i><?php array_push($_SESSION['values'],$val4); ?> Add to Cart</a>
                            <div class="img-item">
                                <img src="img/category-2.jpg" />
                                <a class="img-text" href="">
                                    <p><?php echo $row1['name']; ?></p>
                                </a>
                            </div>

                        </div>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i><?php array_push($_SESSION['values'],$row1['name']); ?>Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        
        <h2 class = "Our-Brands">Our Brands</h2>
        <br>
        
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Secure Payment</h2>
                             <p>
                            	Your all payments are secured with us.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Worldwide Delivery</h2>
                            <p>
                            	We deliver to more than twenty countries Worldwide.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>90 Days Return</h2>
                             <p>
                            	We accept your products if you return to us within 90 days.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                             <p>
                            	We provide 24/7 services and you can get benifits anytime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-3.jpg" />
                            <a class="category-name" href=""
                                <?php $row = mysqli_fetch_assoc($resultSet);
                                        if($row['id']=='5')
                                        {
                                             $val5 = $row['name'];
                                        }
                                        ?>>
                                <p><?php echo $val5;  ?></p>
                            </a>

                        </div>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i><?php array_push($_SESSION['values'],$val5); ?>Add to Cart</a>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/category-4.jpg" />
                            <a class="category-name" href=""
                                <?php 
                                    $sql2 = "select * from fashion";

                                    $resultSet2  = mysqli_query($connection, $sql2);
                                    $row2 = mysqli_fetch_assoc($resultSet2);
                                        if($row2['id']=='1')
                                        {
                                             $val6 = $row2['name'];
                                        }
                                        ?>>
                                <p><?php echo $val6;  ?></p>
                            </a>
                        </div>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i><?php array_push($_SESSION['values'],$val6); ?>Add to Cart</a>
                        <div class="category-item ch-150">
                            <img src="img/category-5.jpg" />
                            <a class="category-name" href=""
                                <?php
                                    $sql3 = "select * from gadgets";

                                    $resultSet3  = mysqli_query($connection, $sql3);
                                    $row3 = mysqli_fetch_assoc($resultSet3);
                                        if($row3['id']=='1')
                                        {
                                             $val8 = $row3['name'];
                                        }
                                        ?>>
                                <p><?php echo $val8;  ?></p>
                            </a>
                        </div>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i><?php  array_push($_SESSION['values'],$val8); ?>Add to Cart</a>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/category-6.jpg" />
                            <a class="category-name" href=""
                                <?php $row2 = mysqli_fetch_assoc($resultSet2);
                                        if($row2['id']=='2')
                                        {
                                             $val7 = $row2['name'];
                                        }
                                        ?>>
                                <p><?php echo $val7;  ?></p>
                            </a>
                        </div>; ?>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"><?php array_push($_SESSION['values'],$val7); ?></i>Add to Cart</a>
                        <div class="category-item ch-250">
                            <img src="img/category-7.jpg" />
                            <a class="category-name" href=""
                                 <?php $row3 = mysqli_fetch_assoc($resultSet3);
                                        if($row3['id']=='2')
                                        {
                                             $val11 = $row3['name'];
                                        }
                                        ?>>
                                <p><?php echo $val11;  ?></p>
                            </a>
                        </div>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i><?php array_push($_SESSION['values'],$val11);?>Add to Cart</a>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-8.jpg" />
                            <a class="category-name" href=""
                                <?php $row = mysqli_fetch_assoc($resultSet);
                                        if($row['id']=='6')
                                        {
                                             $val6 = $row['name'];
                                        }
                                        ?>>
                                <p><?php echo $val6;  ?></p>
                            </a>
                        </div>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"><?php array_push($_SESSION['values'],$val6); ?></i>Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Call us for any Queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+923068502002</a>
                        <a href="tel:0123456789">+923016785982</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <!-- Featured Product End -->       
        
        
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        
        <!-- Review End -->        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>akhlaqaliorakzai@gmail.com</p>
                                <p><i class="fa fa-envelope"></i>kamilshaheen786@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+923068502002</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href="https://twitter.com/AkhlaqA90887014"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/akhlaqali.ali.9/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/akhlaq-ali-orakzai-482814183/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/akhlaqaliorakzai/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCFaGTGzHsHJnm5KZFHSXWAg"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="AboutUs.html">About Us</a></li>
                                <li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
                                <li><a href="TermsCondition.html">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="PaymentPolicy.html">Pyament & Return Policy</a></li>
                                <li><a href="ShippingPolicy.html">Shipping Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
