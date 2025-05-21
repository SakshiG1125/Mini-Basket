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

 $sql="SELECT * FROM user WHERE id = '".$_SESSION['id']."'";
    
    $result=$conn->query($sql);
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
                    <h2>Order Details</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Order Details</li>
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
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                 
                                        if(isset($_SESSION['id']))
                                        {
                                     $sqlw="SELECT * from order_item where rid='".$_SESSION['id']."'";

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
                                         $sql_cart="SELECT * from `order` where delete_status='0' and id='".$row['o_id']."'";
                                      $result_cart=$conn->query($sql_cart);
                                        $row_cart1 = $result_cart->fetch_assoc();

                                        
                                        ?>
                                        <!-- <h1 style="text-align:center;">Order Details</h1>
                                        <div class="form-row" style="height:100px;width:900px;font-size:20px;text-align:center;">
                                    <div class="form-group col-md-6">
                                     <p>User Name: <?php echo $rowo['fname']." ".$rowo['lname'];?></p>
                                     </div>
                                     <div class="form-group col-md-6">
                                         <p>Phone No: <?php echo $rowo['mobile'];?></p>
                                     </div>
                                     <div class="form-group col-md-6">
                                         <p>Order Date: <?php echo $rowo['date'];?></p>
                                     </div>
                                      <div class="form-group col-md-6">
                                         <p>Email ID: <?php echo $rowo['email'];?></p>
                                     </div>
                                   </div> -->
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
                                        <p>Rs.<?php echo $row['prize'];?></p>
                                    </td>
                                    <td class="quantity-box">
                                        <p><?php echo $row['quantity'];?></p>
                                    </td>
                                    <td class="add-pr">
                                        <p>Rs.<?php echo $row['total'];?></p>
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
                <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <?php 
                                          
                                            if(isset($_SESSION['id']))
                                            {
                                            $sql="SELECT sum(total) as total1 from order_item where rid='".$_SESSION['id']."'";
                                            $result=$conn->query($sql);
                                            $row=$result->fetch_assoc();

                                           }
                                           ?>
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold" id="cBalance"> 
                             Rs.<?php if(isset($_SESSION['id'])){echo $row['total1']; }?> </div>
                        </div>
                        <div class="d-flex">
                            <h4>Delivery Charges</h4>
                            <div class="ml-auto font-weight-bold">Rs.40 </div>
                        </div>
                   
                     <!--    <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div> -->
                        <hr>
                        <div class="d-flex gr-total">
                              <?php 
                             $Delivery=40;
                             $grand=$row['total1'] +  $Delivery            
                                ?>            
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"><?php echo $grand;?>   </div>
                        </div>
                        <hr> </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Wishlist -->
 <?php
include("footer.php");
?>