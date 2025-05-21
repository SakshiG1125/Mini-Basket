<?php

include("connect.php");

if(isset($_REQUEST['catid']))
{
    $sql="SELECT * from supplier where delete_status='0' and catid='".$_REQUEST['catid']." '";
  $result=$conn->query($sql);
  //$result=$conn->query($sql)->fetch_array();
 // echo "<pre>";  print_r($result);exit;
/*if($result!=0)
{*/
	echo "<select> ";
	echo "<option value=''>Select</option>";
	foreach($result as $result1){
		echo"<option value= '".$result1['id']."'>";
		echo $result1["fname"]."  ".$result1["lname"];

		echo "</option>";
	}
	echo "</select>";
	

//}
/*echo"<pre>";
print_r($result);
exit();*/
    
}

?>