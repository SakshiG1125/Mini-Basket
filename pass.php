<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{

  if($_FILES['profile']['tmp_name'] != '')
  {
    $path ="images/";
    $image=basename($_FILES['profile']['name']);
    $image_name=$path.$image;
    if(move_uploaded_file($_FILES['profile']['tmp_name'],$image_name))
    {
      $image=basename($_FILES['profile']['name']);
    }
  }else{
    $image = $_POST['old_image'];
  }

 $sql="UPDATE user set mobile='".$_POST['mobile']."',email='".$_POST['email']."',address='".$_POST['address']."',address2='".$_POST['address2']."',profile='$image' where id='".$_SESSION['id']."'";

$result=$conn->query($sql);
 ?>
 <script>
    alert('Record Updated Successfully.........');
    window.location='editprofile.php';
  </script>  
<?php 
}
?>
