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


$sql = "INSERT INTO wishlist (pid,rid,price )
    VALUES ('".$_GET['id']."','".$_SESSION['id']."','".$r1['prize']."')";
  //echo"<pre>";print_r($sql);exit;
//$re=$conn->query($sql);
 //$rows=$re->fetch_assoc();

//echo"<pre>";print_r($sql);exit;
 if($conn->query($sql) === TRUE)
 {

     echo "Add To Cart successfully";
     header('location:wishlist.php');
 }
 else 
 {
     echo"Something Get Worng";
 }


} 


 
?>