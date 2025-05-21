<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        

        <!-- Bootstrap Core CSS -->
       <link href="../admin_assets/css/bootstrap.min.css" rel="stylesheet">

    
        <link href="../admin_assets/css/metisMenu.min.css" rel="stylesheet">

        
        <link href="../admin_assets/css/timeline.css" rel="stylesheet">

        
        <link href="../admin_assets/css/startmin.css" rel="stylesheet">

        
        <link href="../admin_assets/css/morris.css" rel="stylesheet">

        
        <link href="../admin_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                

               <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->

                

                <ul class="nav navbar-right navbar-top-links">
    
                    <li class="dropdown">
                                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>
                              <?php
      if(isset ($_SESSION['email']))
      {
        echo $_SESSION['email'];

      }
      else
      {
        echo 'Admin';
      }

    ?>
  <b class="caret"></b>
                        </a>


                        <ul class="dropdown-menu dropdown-user">
                            <?php
                        if($_SESSION['role']=='admin'){


                    ?>
                      
                            <li><a href="profile.php"><i class="fa fa-user fa-fw"></i>  Profile</a>
                            </li>
                            <li><a href="changepass.php"><i class="fa fa-edit icon"></i> Change Password</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                            <?php
                           }else if($_SESSION['role']=='user'){
                            ?>
                           <li><a href="userprofile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                             <li><a href="userpassword.php"><i class="fa fa-edit icon"></i> Change Password</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="../user/userlogout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                            <?php
                           }
                           ?>  
                        </ul>
                    </li>
                </ul>
                

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                               <div class="input-group custom-search-form">
                                </span>
                                </div>
                                <!-- /input-group -->
                                
                            </li>
                            <li>
                                <a href="home.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            
                    <?php
                        if($_SESSION['role']=='admin'){


                    ?>
                            <li>
                                <a href="viewcategory.php"><i class="fa fa-table fa-fw"></i>Category</a>
                            </li>
                             
                            <li>
                            <a href="viewproduct.php"><i class="fa fa-table fa-fw"></i> Product</a>
                            </li>
                            <li>
                            <a href="viewuser.php"><i class="fa fa-table fa-fw"></i> User</a>
                            </li>
                            <li>
                            <a href="checkout.php"><i class="fa fa-table fa-fw"></i> Order Details</a>
                            </li>
                            <li>
                            <a href="orderdetail.php"><i class="fa fa-table fa-fw"></i> Complete Order</a>
                            </li>
                            <li>
                            <a href="pendingorderdetail.php"><i class="fa fa-table fa-fw"></i> Pending Order</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flag fa-fw"></i> Reports<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="proreport.php">Product Report</a>
                                    </li>
                                    <li>
                                        <a href="completereport.php">Complete Order Report</a>
                                    </li>
                                    <li>
                                        <a href="pendingreport.php">Pending Order Report</a>
                                    </li>
                                    
                                    
                                </ul>
                                                         </li>

                            
                            
                            
                           <?php
                           }else if($_SESSION['role']=='user'){
                            ?>
                            <li>
                                <a href="completeorder.php"><i class="fa fa-table fa-fw"></i> Complete Order</a>
                            </li>
                            <li>
                            <a href="pending.php"><i class="fa fa-table fa-fw"></i> Pending Order</a>
                            </li>
                            
                            <?php
                           }
                           ?>         
                        </ul>
                    </div>
                </div>

            </nav>

                               
       