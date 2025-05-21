<?php
include("connect.php");
$sql="UPDATE category set name='".$_POST['name']."' where id='".$_GET['id']."' ";
$result=$conn->query($sql); 
?>
/*header('location:viewcategory.php');*/
<script>window.location='viewcategory.php';</script>


/*$sql="SELECT * from category where delete_status='0' and id='".$_GET['id']." '";
  $result=$conn->query($sql)->fetch_assoc();*/



