 <?php
 
include("connect.php");


include("header.php");
if(!isset($_SESSION['id']))
{
?>
<script type="text/javascript">
  window.location = 'login.php';
</script>
<?php  
  //header("location: login.php");
}




if(isset($_POST['update_btn']))
{
  
 
         
    $sql="SELECT * from cart_item where delete_status='0' and rid='".  $_SESSION['id']."'";

    $result=$conn->query($sql);
                                 
    if ($result->num_rows > 0) 
    {
        $prizeList=array();
        while($row = $result->fetch_assoc()) 
        { 
               $sql_cart="SELECT * from product where delete_status='0' and id='".$row['pid']."' and status='0'";
                  $result_cart=$conn->query($sql_cart);
            $row_cart = $result_cart->fetch_assoc();
            array_push($prizeList,$row['prize']);

        }

        for($i=0;$i<sizeof($_POST['hidden_product_id']);$i++)
            {
        
                //print_r($_POST['hidden_product_id']);"<br>";
                $qty=$_POST['prod_quantity'][$i];
                $price=$prizeList[$i];
                //$total=$_POST['total_price'][$i];
                echo $qty;"<br>";
                //echo $price;exit;
                $total=($price * $qty);
                //echo $qty;exit;
                $sql="UPDATE cart_item set quantity='$qty',total='$total' WHERE pid='".$_POST['hidden_product_id'][$i]."' AND rid='".$_SESSION['id']."'";
                //echo "<pre>";print_r($sql);exit;
                $result1=$conn->query($sql);
                
                
            }

      }
?>
  <script>
     window.location='cart.php';
   </script>
<?php
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
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
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
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <form method="post" action="cart.php">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                     <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                        if(isset($_SESSION['id']))
                                        {
                                            //echo"23";exit;
                                    $sql="SELECT * from cart_item where delete_status='0' and rid='".$_SESSION['id']."'";
                                 //echo $sql;exit;
                                  $result=$conn->query($sql);
                                 
                                    if ($result->num_rows > 0) {

                                      //echo $sql;exit;
                                    while($row = $result->fetch_assoc()) 
                                    { 
                                      //echo"<pre>";print_r($row);exit;
                                       //print_r($row);exit;
                                        //echo $row['total'];exit;
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
                                        <p>Rs.<?php echo $row['prize'];?></p>
                                    </td>
                                     <input type="hidden" name="hidden_product_id[]" value="<?php echo $row['pid']; ?>">
                                    <td>  
 <div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-"  id="subs" 
                                                    onClick="subset(<?php echo $row['pid']; ?>)" >
                                                    <input type="number" size="4" class="input-text qty text"  id="<?php echo $row['pid']; ?>" title="Qty" value="<?php echo $row['quantity']; ?>"  min="0" step="1" name="prod_quantity[]">                                                
                                                    <input type="button" class="plus" value="+" id="adds" onClick="add(<?php echo $row['pid']; ?>)">

                                                    
                                                </div>

                                                    
                                               </td>
                                    <td class="total-pr">
                                        <input type="hidden" id="<?php echo 'prize'.$row['pid'] ?>" value="<?php echo $row['prize']; ?>">
                                                <input type="text"class="amount" id="<?php echo 'total'.$row['pid']; ?>" name="total_price[]" value="<?php echo $row['total']; ?>">
                                    </td>
                                    <td class="remove-pr">
                                        <a href="delete.php?id=<?php echo $row['id'];?>">
                                    <i class="fas fa-times"></i>
                                </a>
                                    </td>
                                     <td class="remove-pr">
                                        <input value="Update Cart" type="submit" name="update_btn">
                                    </td>
                                </tr>
                                <?php   
}
}
}

                                        ?>
                                
                            </tbody>
                        </form>
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
                            <div class="ml-auto font-weight-bold">Rs.40
                                <!-- <?php
                              //$Delivery=800;
                            if($row['total1'] == 800)
                                {'echo 0';}
                            else{'echo 40';}
                            ?> --> </div>
                        </div>
                   
                     <!--    <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div> -->
                        <hr>
                        <div class="d-flex gr-total">
                              <?php 
                             $Delivery=40;
                             $grand=$row['total1'] +  $Delivery;

                                ?>            
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"><?php echo $grand;?>   </div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.php" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
     <?php
include("footer.php");
?>
