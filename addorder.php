<?php
include("header.php");
include("connect.php");
$sql1="select * from user where id='".$_SESSION['id']."'";
    $result1=$conn->query($sql1);
    $row1=$result1->fetch_assoc();


    



if(isset($_POST['btn1']))
{
    $d=date("Y/m/d");
//echo "Created date is " . date("Y-m-d h:i:sa", $d);
$date= date("Y-m-d h:i:sa", $d);
   $sql = "INSERT INTO `order`(uid,country,fname, lname,date, cname,address,address2,pcode, state,email,mobile,payment_method,status)
   VALUES ('".$_SESSION['id']."','".$_POST['country']."','".$_POST['fname']."','".$_POST['lname']."','".$date."','".$_POST['cname']."','".$_POST['address']."','".$_POST['address2']."','".$_POST['pcode']."','".$_POST['state']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['payment_method']."')" ;
echo $sql;exit;

if($conn->query($sql) === TRUE)
{   
    $o_id = mysqli_insert_id($conn);

  

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