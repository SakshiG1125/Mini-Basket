<?php
require_once 'connect.php';
echo"<pre>";print_r[$_POST];

$sql="insert into payment_user (payment_id,order_id,signature_hash) values ('".$_POST['razopay_payament_id']."','".$_POST['razopay_order_id']."','".$_POST['razopay_signature']."')";
if($conn->query($sql) === TRUE)
{
	echo"new record successfully";
}else{
	echo"Error".$sql. "<br>". $conn->error;

}
?>
