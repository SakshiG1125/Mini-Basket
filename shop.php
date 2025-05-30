<?php
include("header.php");
include("connect.php");
$sql="select * from product";
$result=$conn->query($sql);
$row=$result->fetch_all();

$sql1="select * from category";
$result1=$conn->query($sql1);
$row1=$result1->fetch_all();
?>
<div class="top-search">
        <div class="container">
            <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-search"></i></span>
                 
            <input id="myInput" type="text" placeholder="Search..">
                  
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
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                             <div class="col-12 col-sm-8 text-center text-sm-left">
                               
                                <p>Showing all 4 results</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                               
                             
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        
                                         <?php 

                                         
    
                                     $sqla="SELECT * from product ORDER BY pname DESC ";
                                     $resulta=$conn->query($sqla);


                                    if ($resulta->num_rows > 0)
                                     {
                                    
                                        while($rowa = $resulta->fetch_assoc())
                                        {
                                           
                         ?>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                     <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="admin/image/<?php echo $rowa['profile'];?>" class="img-fluid" alt="Image" style="width:370px;height:350px;">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="shopdetails.php?id=<?php echo $rowa['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            
                                                            <li><a href="wish.php?id=<?php echo $rowa['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="view1.php?id=<?php echo $rowa['id'];?>">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4><?php echo $rowa['pname'];?></h4>
                                                    <h5> Rs.<?php echo $rowa['prize'];?></h5>
                                                    <h6 style="color:red;"><b><?php if($rowa['status']==0)
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
                                }
                                    ?>
                                    </div>
                                </div>







                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="list-view-box">
                                        <div class="row">
                                            <?php 
                                     $sqla="SELECT * from product ORDER BY pname DESC LIMIT 4 ";
                                     $resulta=$conn->query($sqla);


                                    if ($resulta->num_rows > 0)
                                     {
                                    
                                        while($rowa = $resulta->fetch_assoc())
                                        {
                                           
                         ?>
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="new">New</p>
                                                        </div>
                                                        <img src="admin/image/<?php echo $rowa['profile'];?>" class="img-fluid" alt="Image" style="width:370px;height:350px;">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="shopdetails.php?id=<?php echo $rowa['id'];?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                
                                                                <li><a href="wish.php?id=<?php echo $row1['id'];?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4><?php echo $rowa['pname'];?></h4>
                                                    <h5> <del>$ 60.00</del><?php echo $rowa['prize'];?></h5>
                                                    <p><?php echo $rowa['description'];?> </p>
                        <table>
                                                       
                                                         <tr>
                                                                <td><span class="icon-imbalanced pro-icon">
                                                                        </span><strong class="des-heading">Weight/Size:
                                                                        </strong></td>
                                                                <td>(+)  <?php echo $rowa['unit'];?> </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                                <td><span class="icon-package8 pro-icon"> </span><strong
                                                                                class="des-heading">Packing Size
                                                                                :</strong></td>
                                                                <td> 250 | 500 | 1000 gm </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                                <td><strong>Availability:</strong> </td>
                                                                <td style="color:red;"> <?php if($rowa['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></td>
                                                        </tr>
                                                       
                                                </table>

                                                    <a class="btn hvr-hover" href="view1.php?id=<?php echo $rowa['id'];?>">Add to Cart</a>
                                                </div>
                                            </div>
                                            <?php
                                    }
                                }
                                    ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                             <?php 
                                   $sql1="SELECT * from category  ORDER BY name DESC";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    


                                           
                         ?>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="shop1.php?catid=<?php echo $row1['id'];?>"><?php echo $row1['name']?><small class="text-muted"><b>
                                </a>
                                 
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
    <!-- End Shop Page -->
     <?php
include("footer.php");
?>
