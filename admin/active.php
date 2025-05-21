<?php
include("connect.php");
$sql="UPDATE product set status='0' where id='".$_GET['id']."'";
header('location:viewproduct.php');
echo 'Deleted successfully.';
if($conn->query($sql))
{
	echo "Record Deleted";
}else
{
	echo "Not Deleted";
}

?>