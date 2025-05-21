
<?php
include("header.php");
include("connect.php");
$sql1="select * from product where delete_status=0 and catid='2'";
//echo $sql1;exit;
 $result1=$conn->query($sql1);
 $row1=$result1->fetch_all();
?>
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Gallery</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-12" >
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group" >
                            <!-- <button class="active" data-filter="*">All</button> -->
                            <button data-filter=".bulbs">vegetables</button>
                            <button data-filter=".fruits">Fruits</button>
							<button data-filter=".podded-vegetables"> Dry Fruits</button>
							<button data-filter=".root-and-tuberous">Milk Product</button>
                            <button data-filter=".root-and-tuberous1">Bakery Product</button>
                  
                            <button data-filter=".root-and-tuberous2">Flowers</button>
                            <button data-filter=".root-and-tuberous4">Grocery</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                
                
 
  <?php 
                                   $sql1="SELECT * from product  where delete_status='0' and catid='1'";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    ?>
               <div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image"style="width:410px;height:325px;">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>                                
                            </div>

                        </div>
                        <div class="why-text">
                            <h4><?php echo $row1['pname'];?>/<?php echo $row1['unit'];?></h4>
                            <h5>Rs.<?php echo $row1['prize'];?></h5>
                            <h6 style="color:red;"><b><?php if($row1['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></b></h6>
                        </div>
                    </div>
                </div>
<?php
}
?>
<?php 
                                   $sql1="SELECT * from product  where delete_status='0' and catid='2'";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    ?>
                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">                            
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image"style="width:410px;height:325px;" >
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>                                
                            </div>
                        </div>                        
                        <div class="why-text">
                            <h4><?php echo $row1['pname'];?>/<?php echo $row1['unit'];?></h4>
                            <h5>Rs.<?php echo $row1['prize'];?></h5>
                            <h6 style="color:red;"><b><?php if($row1['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></b></h6>
                        </div>
                    </div>
                </div>
                <?php
}
?>

                
<?php 
                                   $sql1="SELECT * from product  where delete_status='0' and catid='3'";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    ?>
                <div class="col-lg-3 col-md-6 special-grid podded-vegetables">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image"style="width:410px;height:325px;">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $row1['pname'];?>/<?php echo $row1['unit'];?></h4>
                            <h5>Rs.<?php echo $row1['prize'];?></h5>
                            <h6 style="color:red;"><b><?php if($row1['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></b></h6>
                        </div>
                    </div>
                </div>
<?php
}
?>
<?php 
                                   $sql1="SELECT * from product  where delete_status='0' and catid='4'";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    ?>
                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous">
                    <div class="products-single fix">
                        <div class="box-img-hover">                            
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image" style="width:410px;height:325px;">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $row1['pname'];?>/<?php echo $row1['unit'];?></h4>
                            <h5>Rs.<?php echo $row1['prize'];?></h5>
                            <h6 style="color:red;"><b><?php if($row1['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></b></h6>
                        </div>                        
                    </div>
                </div>
				<?php
}
?>
<?php 
                                   $sql1="SELECT * from product  where delete_status='0' and catid='5'";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    ?>
				<div class="col-lg-3 col-md-6 special-grid root-and-tuberous1">
                    <div class="products-single fix">
                        <div class="box-img-hover">                            
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image" style="width:410px;height:325px;">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                   
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $row1['pname'];?>/<?php echo $row1['unit'];?></h4>
                            <h5>Rs.<?php echo $row1['prize'];?></h5>
                            <h6 style="color:red;"><b><?php if($row1['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></b></h6>
                        </div>
                    </div>
                </div>
                <?php
}
?>
<?php 
                                   $sql1="SELECT * from product  where delete_status='0' and catid='7'";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    ?>
                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous3">
                    <div class="products-single fix">
                        <div class="box-img-hover">                            
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image" style="width:410px;height:325px;">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                   
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $row1['pname'];?>/<?php echo $row1['unit'];?></h4>
                            <h5>Rs.<?php echo $row1['prize'];?></h5>
                            <h6 style="color:red;"><b><?php if($row1['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></b></h6>
                        </div>
                    </div>
                </div>
                <?php
}
?>

               <?php 
                                   $sql1="SELECT * from product  where delete_status='0' and catid='6'";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    ?> 
                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous">
                    <div class="products-single fix">
                        <div class="box-img-hover">                           
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image" style="width:410px;height:325px;">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>                                
                            </div>

                        </div>
                        <div class="why-text">
                            <h4><?php echo $row1['pname'];?>/<?php echo $row1['unit'];?></h4>
                            <h5> Rs.<?php echo $row1['prize'];?></h5>
                            <h6 style="color:red;"><b><?php if($row1['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></b></h6>
                        </div>
                    </div>
                </div>
<?php
}
?>
<?php 
                                   $sql1="SELECT * from product  where delete_status='0' and catid='8'";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    ?>
                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous4">
                    <div class="products-single fix">
                        <div class="box-img-hover">                            
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image" style="width:410px;height:325px;">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                   
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $row1['pname'];?>/<?php echo $row1['unit'];?></h4>
                            <h5>Rs.<?php echo $row1['prize'];?></h5>
                            <h6 style="color:red;"><b><?php if($row1['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></b></h6>
                        </div>
                    </div>
                </div>
                <?php
}
?>
               
            </div>
        </div>
    </div>
    <!-- End Gallery  -->
    


    <!-- Start Footer  -->
   <!-- End Products  -->
    <?php
include("footer.php");
?>