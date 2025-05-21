<?php
include("header.php");
include("connect.php");
if(!isset($_SESSION['id']))
{
?>
<script type="text/javascript">
  window.location = 'login.php';
</script>
<?php  
  //header("location: login.php");
}


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
                    <h2>Wishlist</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Wishlist  -->
    <div class="wishlist-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Unit Price </th>
                                    <th>Stock</th>
                                    <th>Add Item</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                        if(isset($_SESSION['id']))
                                        {
                                    $sqlw="SELECT * from wishlist where  rid='".  $_SESSION['id']."'";

                                  $resultw=$conn->query($sqlw);
                                 
                                    if ($resultw->num_rows > 0) {
                                    
                                    while($row = $resultw->fetch_assoc()) 
                                    { 
                                      //echo"<pre>";print_r($row);exit;
                                       // print_r($row);exit;
                                        //echo $row[' total'];exit;
                                     $sql_cart="SELECT * from product where delete_status='0' and id='".$row['pid']."'";
                                      $result_cart=$conn->query($sql_cart);
                                        $row_cart = $result_cart->fetch_assoc();
                                       //echo"<pre>";print_r($row_cart);exit;
                                        ?>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="admin/image/<?php echo $row_cart['profile'];?>" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									<?php echo $row_cart['pname'];?>
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>Rs.<?php echo $row['price'];?></p>
                                    </td>
                                    <td class="quantity-box"><?php if($row_cart['status']==0)
                            {
                                echo"In Stock";
                            }else
                            {
                              echo"Out of Stock";
                            }
                            ?></td>
                                    <td class="add-pr">
                                        <a class="btn hvr-hover" href="view1.php?id=<?php echo $row_cart['id'];?>">Add to Cart</a>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="deletew.php?id=<?php echo $row['id'];?>">
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                </tr>
                               <?php   
}
}
}

                                        ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist -->
 <?php
include("footer.php");
?>