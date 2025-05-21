<?php
include("header.php");
include("connect.php");
$sql="select * from product";
$result=$conn->query($sql);
$row=$result->fetch_all();



$sqlv="select * from product where id='".$_GET['id']."'";
 $resultv=$conn->query($sqlv);
 $rowv=$resultv->fetch_assoc();
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
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="admin/image/<?php echo $rowv['profile'];?>" alt="First slide"> </div>
                            
                        </div>
                      
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2><?php echo $rowv['pname'];?></h2>
                        <h5>Rs.<?php echo $rowv['prize'];?></h5>
                        <!-- <p class="available-stock"><span> More than 20 available / <a href="home.php">8 sold </a></span><p> -->
						<h4>Short Description:</h4>
						<p><?php echo $rowv['description'];?> </p>
                        <table>
                                                       
                                                        <tr>
                                                                <td><span class="icon-imbalanced pro-icon">
                                                                        </span><strong class="des-heading">Weight/Size:
                                                                        </strong></td>
                                                                <td>(+)  <?php echo $rowv['unit'];?> </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                                <td><span class="icon-package8 pro-icon"> </span><strong
                                                                                class="des-heading">Packing Size
                                                                                :</strong></td>
                                                                <td> 250 | 500 | 1000 gm </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                                <td><strong>Availability:</strong> </td>
                                                                <td style="color:red;"><?php if($rowv['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></td>
                                                        </tr>
                                                       
                                                </table>
                                                <form method="post" action="view1.php?id=<?php echo $_GET['id'];?>" class="cart">
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Quantity</label>
									 <input type="number" class="input-text qty text" title="Qty"  name="quantity" min="1" step="1" value='1'>
                                             
								</div>
							</li>
						</ul>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
								
								
                                <button style="color:white;"class="btn hvr-hover" data-fancybox-close="" name="btn" type="submit" <?php if ($rowv['status']== '1'){ ?> disabled <?php   } ?> onclick="addtocart(<?php echo $rowv["id"]?>)">Add to cart</button>
                                <a class="btn hvr-hover" href="wish.php?id=<?php echo $rowv['id'];?>"><i class="fas fa-heart"></i> Add to wishlist</a>
							</div>
						</div>

						<div class="add-to-btn">
							<!-- <div class="add-comp">
								<a class="btn hvr-hover" href="wish.php?id=<?php echo $rowv['id'];?>"><i class="fas fa-heart"></i> Add to wishlist</a>
								
							</div> -->
                            </form>
							
						</div>
                    </div>
                </div>
            </div>
			
			
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                        <p>All Product</p>
                    </div>
                     
                    <div class="featured-products-box owl-carousel owl-theme">
                      <?php

               
               foreach($result as $row)
                //print_r($row);exit;
                {
                ?>
                        <div class="item">
                            
                            <div class="products-single fix">
                                
                                <div class="box-img-hover">
                                    <img  src="admin/image/<?php echo $row['profile'];?>" class="img-fluid" alt="Image" style="width:410px;height:370px;">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="shopdetails.php?id=<?php echo $row['id'];?>" data-toggle="tooltip" data-placement="right" title="View" ><i class="fas fa-eye"></i></a></li>
                                           
                                            <li><a href="wish.php?id=<?php echo $row['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="view1.php?id=<?php echo $row['id'];?>">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4><?php echo $row['pname'];?>/<?php echo $row['unit'];?></h4>
                            <h5>Rs.<?php echo $row['prize'];?></h5>
                                </div>
                            </div>

                        </div>
                         <?php
}
?>
                    </div>
                     
                </div>
                
            </div>
      

        </div>
    </div>
    <!-- End Cart -->
    <?php
include("footer.php");
?>
<script type="text/javascript">
function addtocart(prod_qty){
    var quantity=parseInt(prod_qty);
    if (quantity == 0){
         document.getElementById("addtocartButton").disabled = true;   
    }

}

</script> 