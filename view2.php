<?php 
session_start();

 
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

if(isset($_GET['id']))
{
  
$s1="select * from product where id='".$_GET['id']."'";
$re1=$conn->query($s1);
$r1=$re1->fetch_assoc();
//echo"<pre>";print_r($r1);exit;
//print_r($row);exit;
$quantity = $_GET['quantity'];
print_r($quantity);exit;
if(isset($_POST['quantity'])){
	$quantity = $_POST['quantity'];
}
     $total=($r1['prize'] * $_POST['quantity']);
     //echo $total;exit;

$sql = "INSERT INTO cart_item (pid,rid,quantity,prize,total)
    VALUES ('".$_GET['id']."','".$_SESSION['id']."','".$_POST['quantity']."','".$r1['prize']."','".$total."')";
   echo"<pre>";print_r($sql);exit;
//$re=$conn->query($sql);
 //$rows=$re->fetch_assoc();

//echo"<pre>";print_r($sql);exit;
 if($conn->query($sql) === TRUE)
 {

     echo "Add To Cart successfully";
     header('location:cart.php');
 }
 else 
 {
     echo"Something Get Worng";
 }


} 


 
?>