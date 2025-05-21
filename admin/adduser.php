<?php
include("check.php");
?>
<?php
include("header.php");

include("connect.php");
if(isset($_POST['btn']))
{
  $path ="image/";
  $image=basename($_FILES['profile']['name']);
  $image_name=$path.$image;
  if(move_uploaded_file($_FILES['profile']['tmp_name'],$image_name))
  {
    echo '<br>Upload Successfully';

  }else
  {
    echo '<br>Not Uploaded';
  }
}


if(isset($_POST['btn']))
{
  $sql="insert into user(fname,lname,address, city,state,pcode,email,mobile,password,profile,status)values('".$_POST['fname']."','".$_POST['lname']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['pcode']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['password']."','".$image."','".$_POST['status']."')";

  if($conn->query($sql)==TRUE)
  {
    echo"Record Inserted Sucessfully ";?>
    
    <script>window.location='viewuser.php';</script>
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }
 
}

?>




    <script type="application/javascript">

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>
    
    


    	<form  method="POST" enctype="multipart/form-data">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> Add User</h1> 
                        </div>
                        
                    
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          
                                            <form role="form">

                                                   <div class="row">
                                                    <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input class="form-control"name="fname" placeholder="Enter First Name" required >
                                                   </div> 
                                                </div>
                                                
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input class="form-control"name="lname" placeholder="Enter Last Name" required>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control"name="address" placeholder="Enter Your Address" required>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input class="form-control"name="city" placeholder="Enter Your City" required>
                                                  </div>  
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <select class="form-control"    name="state">
                                                        <option value="">Select State</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujrat">Gujrat</option>
                                                        <option value="Kerla">Kerla</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-6">
                                               <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input class="form-control"name="pcode" placeholder="Enter Post Code" required>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input class="form-control"name="mobile" type="" placeholder="Enter Mobile Number"
                                                    pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" required>
                                                   </div> 
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control"name="email" placeholder="Enter Email" type="email" required>
                                                </div>
                                            </div>
                                             <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>Profile</label>
                                                    <input type="file" name="profile" required>
                                                </div>
                                            </div>
                                                   
                                             <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control"name="password" input type="password" placeholder="Enter password"   required>
                                                    </div>
                                                </div>
                                                 
                                                 <div class="col-lg-6" >
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="status"  value="1" checked>Active
                                                        </label>
                                                    </div>
                                                
                                                 
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="status"  value="0">Diactive
                                                        </label>
                                                    
                                                </div>
                                                </div>
                                                </div>
                                                 <div class="col-lg-12">
                                   <center>   <div class="form-group">
                                         <button type="submit" class="btn btn-default" name="btn">Submit</button></center>
                                        </div></div>
                                                           
                                           </div>
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
                                 
  
  

</html>
<?php
include("footer.php");
?>
 
        <script src="../admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin_assets/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../admin_assets/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../admin_assets/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>
        <script src="../admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin_assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>


