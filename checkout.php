<?php
include("header.php");
include("connect.php");
$sql="select * from product";
$result=$conn->query($sql);
$row=$result->fetch_all();

$sql1="select * from user where id='".$_SESSION['id']."'";
    $result1=$conn->query($sql1);
    $row1=$result1->fetch_assoc();
if(isset($_POST['btn1']))
{
    //$d=date("Y/m/d");
//echo "Created date is " . date("Y-m-d h:i:sa", $d);
// $date= date("Y-m-d h:i:sa");

$subtotal = 0;
$result_cart = $conn->query("SELECT total FROM cart_item WHERE rid = '{$_SESSION['id']}'");
while ($row = $result_cart->fetch_assoc()) {
    $subtotal += $row['total'];
}

   $date1 = date("Y-m-d H:i:s"); // 24-hour format without am/pm
  $sql = "INSERT INTO `orders`(uid,fname,lname,date,address,address2,pcode,state,country,email,mobile,payment_method,subtotal)
   VALUES ('".$_SESSION['id']."','".$_POST['fname']."','".$_POST['lname']."','".$date1."','".$_POST['address']."','".$_POST['address2']."','".$_POST['pcode']."','".$_POST['state']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['payment_method']."','{$subtotal}',1)" ;


if($conn->query($sql) === TRUE)
{   
    $o_id = mysqli_insert_id($conn);

  //echo  $o_id;exit;

     $sql0="SELECT * from cart_item where rid='".$_SESSION['id']."'";
     
     $result0=$conn->query($sql0);
    
   $row0=$result0->fetch_assoc();
  
  $total=($row0['prize'] * 1);


       $sql7 = "INSERT INTO order_item(pid,rid,quantity,prize,total,o_id)
           VALUES ('".$row0['pid']."','".$_SESSION['id']."','".$row0['quantity']."','".$row0['prize']."','".$total."','".$o_id."')";

           

            if($conn->query($sql7) === TRUE)
              {

                     
                     
              }
               else 
               {
             
              }
              echo "<script> window.location.href = 'cart.php';</script>";
   
if(isset($_POST['btn1']))
{
$sql4 = "DELETE FROM cart_item WHERE rid='".$_SESSION['id']."'";
if($result4=$conn->query($sql4))
{
    echo"Record Delete";
}
else
{
    echo"Not Delete";
}
}

}//if1
 //exit;  
}

?>
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
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            
            <div class="row">
                
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        <form class="needs-validation" novalidate method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $row1['fname'];?>" name="fname" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $row1['lname'];?>" name="lname" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Username *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" placeholder="" value="<?php echo $row1['email'];?>" name="username" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address *</label>
                                <input type="email" class="form-control" id="email" placeholder="" name="email"
                                value="<?php echo $row1['email'];?>">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" id="address" placeholder="" name="address" >
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="address2">Address 2 *</label>
                                <input type="text" class="form-control" id="address2" placeholder="" name="address2"> 
                            </div>
                            
                                 <div class="mb-3">
                                <label for="address">Mobile *</label>
                                <input type="text" class="form-control" id="mobile" placeholder="" name="mobile"value="<?php echo $row1['mobile'];?>" required>
                                <div class="invalid-feedback"> Please enter your Mobile No. </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-4 mb-3">
                                    <label for="state">State *</label>
                                    <select class="wide w-100" id="state" name="state">
                                    <option data-display="Select">Choose State...</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                                    
                                </select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label for="country">Distric *</label>
                                    <select class="wide w-100" id="country" name="dist">
                                    <option value="Choose..." data-display="Select">Choose District...</option>
                                    <option value="India">Nashik</option>
                                                        
                                </select>
                                    <div class="invalid-feedback"> Please select a valid District. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip *</label>
                                    <!-- <input type="text" class="form-control" id="zip" placeholder="" name="pcode" required> -->
                                     <select class="wide w-100" id="state" name="pcode">
                                    <option data-display="Select">Choose Zip Code...</option>
                                    
                                                    <option value="422001">422001</option>
                                                    <option value="422002">422002</option>
                                                    <option value="422003">422003</option>
                                                    <option value="422004">422004</option>
                                                    <option value="422005">422005</option>
                                                    <option value="422006">422006</option>
                                                    <option value="422007">422007</option>
                                                    <option value="422008">422008</option>
                                                    <option value="422009">422009</option>
                                                    <option value="422010">422010</option>
                                                    <option value="422011">422011</option>
                                                    <option value="422012">422012</option>
                                                    <option value="422013">422013</option>
                                                    <option value="422101">422101</option>
                                                    <option value="422102">422102</option>
                                                    <option value="422401">422401</option>
                                                    <option value="422501">422501</option>
                                                    <option value="422502">422502</option>
                                </select>
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
                            </div>
                         
                          <hr class="mb-4">
                            <div class="title"> <span>Payment</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="paypal"  type="radio" class="custom-control-input" value="cash" 
                                    name="payment_method" required>
                                    <label class="custom-control-label" for="paypal">Cash On Delivery</label>
                                </div>
                            </div>
                              <hr class="mb-4"> 
                           
                
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                    
                        <div class="col-md-12 col-lg-12">
                            
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                     <?php 
                                        if(isset($_SESSION['id']))
                                        {

                                    $sql="SELECT * from cart_item where delete_status='0' and rid='".  $_SESSION['id']."'";

                                  $result=$conn->query($sql);
                                 
                                    if ($result->num_rows > 0) {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    { 
                                      //echo"<pre>";print_r($row);exit;
                                       //print_r($row);exit;
                                        //echo $row[' total'];exit;
                                     $sql_cart="SELECT * from product where delete_status='0' and id='".$row['pid']."'";
                                      $result_cart=$conn->query($sql_cart);
                                        $row_cart = $result_cart->fetch_assoc();
                                       //echo"<pre>";print_r($row_cart);exit;
                                        ?>
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"> <?php echo $row_cart['pname'];?></a>
                                            <div class="small text-muted">Price: Rs.<?php echo $row['prize'];?><span class="mx-2">|</span> Qty:<?php echo $row['quantity'];?><span class="mx-2">|</span> Subtotal:<?php echo $row['total'];?></div>
                                        </div>
                                    </div>
                                   <?php   
}
}
}
  ?>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <?php 
                                          
                                            if(isset($_SESSION['id']))
                                            {
                                            $sql="SELECT sum(total) as total1 from cart_item where rid='".$_SESSION['id']."'";
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

                        <div class="col-12 d-flex shopping-box"> 
                       <input type="submit" data-value="Place order"  id="place_order" name="btn1" class="ml-auto btn hvr-hover">  </div>

                    </div>
                
                </div>

            </div>
</form>
        </div>
    </div>
    <!-- End Cart -->
<?php
include("footer.php");
?>