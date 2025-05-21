<?php
include("connect.php");

extract($_POST);

if(isset($_POST['btn']))
{
    $sql="select * from admin where email='".$_POST['email']."'";
 $result1=$conn->query($sql);
   $row1=$result1->fetch_assoc();
if($_POST['email']==$row1['email'])
{
    /*$chars = "                                                          abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 $password = substr(str_shuffle($chars),0,8);*/
 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 8; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $password = $randomString;
 /*$sql="insert into admin values('$email','$password')";
 $result=$conn->query($sql);*/
  $sql="UPDATE admin set `password`='$password' where email='".$_POST['email']."'";
  $result1=$conn->query($sql);
  
//echo "Your Password Is : ".$password;
?>
<script type="text/javascript">
    alert('Password Updated Successfully');
    window.location='login.php';
</script>
<?php


}else
{
?>
<script type="text/javascript">
    alert('Username is not available');
</script>
<?php
}
    ?>

    <script>
        window.location='forgot.php';
  </script>
  <?php


 
}
?>