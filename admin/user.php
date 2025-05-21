<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
	$sql="select * from admin where  email='".$email."' and password='".$password."'";
	$re = $conn->query($sql)->fetch_assoc();
	
	if(!empty($re))
	{
		$_SESSION['role']='admin';
		 $_SESSION['id']=$re['id'];
		 /*echo $_SESSION['id'];exit();*/
		$_SESSION['fname']=$re['fname'];
		$_SESSION['lname']=$re['lname'];
		$_SESSION['mobile']=$re['mobile'];
		$_SESSION['email']=$re['email'];
		$_SESSION['password']=$re['password'];
		header("location:home.php");
		 

		}
	
	else
	{
	?>
	<script>
		alert('Invalid User And Password');
		window.location='index.php';
	</script>
	<?php
		
	}
}
?>