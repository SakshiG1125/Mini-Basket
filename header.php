 <?php  
 session_start();
include("connect.php");
if(isset($_SESSION['id']))
{

$sql3="select sum(total) as amt,count(id) as id1 from cart_item where rid='".$_SESSION['id']."'";
      $result3=$conn->query($sql3);
    $row3=$result3->fetch_assoc();

    $sql3="select count(id) as id1 from wishlist where rid='".$_SESSION['id']."'";
      $result3=$conn->query($sql3);
    $row4=$result3->fetch_assoc();
    
 }   

?> 
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>MiniBasket</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front_assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="front_assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="front_assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="front_assets/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					
                    <div class="our-link">
                        <ul>
                             <?php if(isset($_SESSION['id'])){?><li><a href="myorder.php"><i class="fa fa-user"></i> My Order</a></li><?php }?>
                        <li><a href="register.php"><i class="fa fa-user s_color"></i> Register Here</a></li> 
                          <?php if(!isset($_SESSION['id'])){?><li><a href="login.php"><i class="fas fa-location-arrow"></i> Sign In</a></li><?php }?>
                            <?php if(isset($_SESSION['id'])){?><li><a href="logout.php"><i class="fas fa-headset"></i> Logout</a></li> <?php }?>
                        </ul>
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box" style="color:white;">
							<?php if(isset($_SESSION['id']))
                            {
                                $sql="SELECT * FROM user WHERE id = '".$_SESSION['id']."'";
                                $result=$conn->query($sql);
                                $row = $result->fetch_assoc();
                                ?>
                              
                                <?php echo $row['fname']." ".$row['lname']?>
                            <?php }?>
                           
						</select> 
					</div>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.php">Sidebar Shop</a></li>
								<!-- <li><a href="shopdetails.php">Shop Detail</a></li> -->
                                <li><a href="cart.php">Cart</a></li>
                                 <?php if(isset($_SESSION['id'])){?><li><a href="checkout.php">Checkout</a></li><?php }?>
                               <?php if(isset($_SESSION['id'])){?> <li><a href="my-account.php">My Account</a></li><?php }?>
                                <li><a href="wishlist.php">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Category</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge"><?php if(isset($_SESSION['id']))
{ echo $row3['id1'];}else{ echo'0';}?></span>
								<p>My Cart</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

            
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
               
                <li class="cart-box">
                    
                    <ul class="cart-list">
<?php 
                                        if(isset($_SESSION['id']))
                                        {
                                    $sql="SELECT * from cart_item where delete_status='0' and rid='".  $_SESSION['id']."'";

                                  $result=$conn->query($sql);
                                 
                                    if ($result->num_rows > 0) {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    { 
                                      //echo"<pre>";print_r($row);exit;
                                       // print_r($row);exit;
                                        //echo $row[' total'];exit;
                                     $sql_cart="SELECT * from product where delete_status='0' and id='".$row['pid']."'";
                                      $result_cart=$conn->query($sql_cart);
                                        $row_cart = $result_cart->fetch_assoc();
                                       //echo"<pre>";print_r($row_cart);exit;
                                        ?>
                        <li>
                           
 <a href="#" class="photo"><img src="admin/image/<?php echo $row_cart['profile'];?>" class="cart-thumb" alt="" /></a>
                            <h6><a href="#"><?php echo $row_cart['pname'];?></a></h6>
                            <p>Qty:<?php echo $row['quantity'];?><br><span class="price">Rs.<?php echo $row['prize'];?></span></p>
                            
                           
                            
                           
                        </li>
                       <?php   
}
}
}

                                        ?> 
                                        <?php 
                                          
                                            if(isset($_SESSION['id']))
                                            {
                                            $sql="SELECT sum(total) as total1 from cart_item where rid='".$_SESSION['id']."'";
                                            $result=$conn->query($sql);
                                            $row=$result->fetch_assoc();
                                           }
                                           ?>
                        <li class="total">
                            <a href="cart.php" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: Rs.<?php if(isset($_SESSION['id'])){echo $row['total1']; }?></span>
                        </li>
                    </ul>
                    
                </li>
                
            </div>
            <!-- End Side Menu -->
           
                                        
                    </ul>
                    
                </li>
                
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

