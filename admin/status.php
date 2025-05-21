<?php
include("connect.php");
$sql="UPDATE `order` set status='1' where id='".$_GET['id']."'";
$result=$conn->query($sql);
header('location:checkout.php');
echo 'Status Updated.';
?>