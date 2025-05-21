<?php
include("header.php");
include("connect.php");

if(isset($_POST['update_btn']))
{
  
 
         //echo"23";
    $sql="SELECT * from cart_item where delete_status='0' and rid='".$_SESSION['id']."'";

    $result=$conn->query($sql);
                                 
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        { 
                $sql_cart="SELECT * from product where delete_status='0' and id='".$row['pid']."'";
                  $result_cart=$conn->query($sql_cart);
            $row_cart = $result_cart->fetch_assoc();
        //print_r($row_cart);exit;
           for($i=0;$i<sizeof($_POST['hidden_product_id']);$i++)
        {
    
    //print_r($_POST['hidden_product_id']);
       $qty=$_POST['quantity'];
       $price=$row['prize'];
       //$total1=$_POST['total_price'];
       //echo $qty;
       //echo $price;"<br>";
       $total=($price * $qty);
   echo $total;exit;
       $sql="UPDATE cart_item set quantity='$qty',total='$total' WHERE pid='".$_POST['hidden_product_id'][$i]."' AND rid='".$_SESSION['id']."'";
        //echo "<pre>";print_r($sql);exit;
           $result1=$conn->query($sql);
     //print_r($result1);exit;
    
   }

        }
      }
?>
  <script>
     window.location='cart.php';
   </script>
<?php
   }
   ?>