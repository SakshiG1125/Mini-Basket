<?php
include("header.php");
include("connect.php");
$sql="select * from product";
$result=$conn->query($sql);
$row=$result->fetch_all();
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

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Mini-Basket</strong></h1>
                           
                            <p><a class="btn hvr-hover" href="index.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br>Mini-Basket</strong></h1>
                       
                            <p><a class="btn hvr-hover" href="index.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/dryfruiits.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Mini-Basket</strong></h1>
                            
                            <p><a class="btn hvr-hover" href="index.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Product</h1>
                        <p></p>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                          <!-- <button class="active" data-filter="*">All</button> -->
                            <button data-filter=".bulbs">vegetables</button>
                            <button data-filter=".fruits">Fruits</button>
                            <button data-filter=".podded-vegetables"> Dry Fruits</button>
                            <button data-filter=".root-and-tuberous">Milk Product</button>
                            <button data-filter=".root-and-tuberous1">Bakery Product</button>
                            <button data-filter=".root-and-tuberous3">Non-Veg</button>
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
                            <a href="shopdetails.php?id=<?php echo $row1['id'];?>">
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image"style="width:410px;height:325px;"></a>
                           <!--  <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>                                
                            </div>
 -->
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
                        <a href="shopdetails.php?id=<?php echo $row1['id'];?>">                           
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image"style="width:410px;height:325px;"></a>
                          <!--   <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>                                
                            </div> -->
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
                            <a href="shopdetails.php?id=<?php echo $row1['id'];?>">
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image"style="width:410px;height:325px;"></a>
                               <!-- <div class="mask-icon">
                             <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> -->
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
                        <a href="shopdetails.php?id=<?php echo $row1['id'];?>">                           
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image" style="width:410px;height:325px;"></a>
                           <!--  <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> -->
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
                        <a href="shopdetails.php?id=<?php echo $row1['id'];?>">                            
                            <img src="admin/image/<?php echo $row1['profile'];?>" class="img-fluid" alt="Image" style="width:410px;height:325px;"></a>
                           <!--  <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                   
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> -->
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
                                     foreach ($result1 as $rown ) {
                                    ?>
                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous3">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                        <a href="shopdetails.php?id=<?php echo $row1['id'];?>">                            
                            <img src="admin/image/<?php echo $rown['profile']?>" class="img-fluid" alt="Image" style="width:410px;height:325px;"></a>
                            <!-- <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $rown['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                   
                                    <li><a href="wish.php?id=<?php echo $rown['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="why-text">
                            <h4><?php echo $rown['pname'];?>/<?php echo $rown['unit'];?></h4>
                            <h5>Rs.<?php echo $rown['prize'];?></h5>
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
                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous2">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                        <a href="shopdetails.php?id=<?php echo $row1['id'];?>">                           
                            <img src="admin/image/<?php echo $row1['profile']?>" class="img-fluid" alt="Image" style="width:410px;height:325px;"></a>
                           <!--  <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>                                
                            </div> -->

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
                        <a href="shopdetails.php?id=<?php echo $row1['id'];?>">                           
                            <img src="admin/image/<?php echo $row1['profile']?>" class="img-fluid" alt="Image" style="width:410px;height:325px;"></a>
                           <!--  <div class="mask-icon">
                                <ul>
                                    <li><a href="shopdetails.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                    <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>                                
                            </div> -->

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
               
            </div>

	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
                 <?php 
                $sql1="SELECT * from category  ORDER BY name DESC";
                $result1=$conn->query($sql1);
            foreach ($result1 as $row1 ) {
                                    


                                           
                         ?>
				 <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="shop1.php?catid=<?php echo $row1['id'];?>"> <i class="fa fa-gift"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4><?php echo $row1['name']?></h4>
                                    <!-- <p>Track, return, or buy things again</p> -->
                                </div>
                            </div>
                        </div>
                        </div>
                 <?php
                    }
                    ?>   
				
			</div>
		</div>
	</div>

    <!-- Start Products  -->

        </div>
    </div>
  
        </div>
    </div>
    <!-- End Products  -->
    <?php
include("footer.php");
?>