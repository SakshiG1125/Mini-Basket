<?php
include("check.php");
?>
<?php

include("header.php");
include("connect.php");

  $sql="SELECT * from user where delete_status='0' and  uid='".$_SESSION['uid']." '";
  $result=$conn->query($sql)->fetch_assoc();

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="application/javascript">

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>
    
<body>
    <form method="POST" action="userpro.php" enctype="multipart/form-data">
         <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1>User Profile</h1> 
                        </div>
                         
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input class="form-control"name="fname" value="<?php echo $result['fname']?>"  required>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input class="form-control"name="lname" value="<?php echo $result['lname']?>"required>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control"name="address" value="<?php echo $result['address']?>" required>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input class="form-control"name="city" placeholder="Enter Your City" value="<?php echo $result['city']?>" required>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <select class="form-control"name="state" value="<?php echo $result['state']?>" >
                                                        <option value="">Select State</option>
                                                        <option value="">Maharashtra</option>
                                                        <option value="">Goa</option>
                                                        <option value="">Gujrat</option>
                                                        <option value="">Kerla</option>
                                                    </select>
                                                </div>
                                               <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input class="form-control"name="pcode" placeholder="Enter Post Code" value="<?php echo $result['pcode']?>" required>
                                                    
                                                </div>
                                                <div class="form-group">
                                                
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input class="form-control"name="mobile" value="<?php echo $result['mobile']?>" required pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control"name="email" value="<?php echo $result['email']?>" required>

                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Profile</label>
                                                    <img src="image/<?php echo $result['profile']?>" width="10%">
                                                     <input type="hidden" name="old_image" value="<?php echo $result['profile']?>">


                                                    <input type="file" name="profile" value="<?php echo $result['profile']?>">
                                                </div>
                                                

                                                
                                                        <div class="form-group">
                                                           <center>     <button type="submit" class="btn btn-default" name="btn">Submit Button</button> </center> </div>
                                                                   
                                                            </form>
                                                    
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
                                 
  
  
</body>
</html>
<?php
include("footer.php");
?>