<?php
session_start();
include("connect.php");
//session_start();
$sql4 = "DELETE FROM wishlist WHERE id='".$_GET['id']."'";
if($result4=$conn->query($sql4))
{
	?>
	
	<script>
     alert("Record Deleted Sucessfully");
    window.location='wishlist.php';
</script>
<?php
}
else
{
   ?>
	
	<script>
     alert("Record Not Deleted");
    window.location='$_SERVER["HTTP_REFERER"]';
</script>
<?php 
}

?>