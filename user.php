<?php 
session_start();
include("connect.php");


  extract($_POST);
if(isset($_POST['btn']))
{
    
   $sql="SELECT * FROM user WHERE  password='".$_POST['password']."' and 	email='".$_POST['email']."'";
//echo  $sql;exit;
    $result=$conn->query($sql)->fetch_assoc();
   

   
	if(!empty( $result))
	{
		   $_SESSION['id']= $result['id']; 
		   
		   $_SESSION['fname']= $result['fname'];
		   $_SESSION['lname']= $result['lname'];
		
		$_SESSION['email']=$result['email']; 
		 $_SESSION['mobile']= $result['mobile']; 
		 $_SESSION['password']=$result['password'];
		//echo $_SESSION['password'];
		//echo $_SESSION['email'];exit;
		 //$_SESSION['status']=$result['status'];


		$_SESSION['a'] = array();
?>
		<script type="text/javascript">
        alert("User Login successful..");
        window.location="index.php";
    </script>
	<?php
}

	else
	{
	?>	
	
	<script>
		alert('Invalid User And Password...');
		window.location='login.php';
	</script>
	<?php
   }
}
?>