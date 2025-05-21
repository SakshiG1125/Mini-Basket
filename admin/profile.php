<?php
include("check.php");
?>
<?php
include("header.php");

include("connect.php");

$sql="SELECT * from admin where delete_status='0' and id='".$_SESSION['id']." '";
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
</head>
   
<body>

  
      <form  method="POST"  action="profile1.php" enctype="multipart/form-data">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> Admin Profile</h1> 
                        </div>
                        
                        <!-- /.col-lg-12 -->
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
                                                    <input class="form-control"name="fname" value="<?php echo $result['fname']?>" required>
                                                     
                                                </div>
                                                    
                                                </div>
                                                
                                                <div class="col-lg-6">
                                               <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input class="form-control"name="lname" value="<?php echo $result['lname']?>" required>
                                                    </div>
                                              </div>
                                               <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input class="form-control"name="mobile" value="<?php echo $result['mobile']?>" pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" requiredrequired>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control"name="email" type="email" value="<?php echo $result['email']?>"required>
                                                    </div>
                                                </div>
                                               <!-- <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control"name="password" type="password" value="<?php echo $result['password']?>" required>
                                                    </div>
                                                    </div>-->
                                                    <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Profile</label>
                                                    <img src="image/<?php echo $result['profile']?>" width="10%">
                                                    <input type="hidden" name="old_image" value="<?php echo $result['profile']?>">

                                                    <input type="file" name="profile" value="<?php echo $result['profile']?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                   <center>   <div class="form-group">
                                         <button type="submit" class="btn btn-default" name="btn">Submit</button></center>
                                        </div>
                                            </div>
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
                                 
  
  
</body>
</html>
<script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    
<?php
include("footer.php");
?>