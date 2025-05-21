<?php
include("check.php");
?>
<?php
include("check.php");
include("header.php");
include("connect.php");

  $sql="SELECT * from supplier where delete_status='0' and id='".$_GET['id']." '";
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
	<form method="POST" action="editsupp.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">
		 <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> Add Supplier</h1> 
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
                                                    <input class="form-control"name="lname" value="<?php echo $result['lname']?>"required>
                                                   </div> 
                                                </div>
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control"name="address" value="<?php echo $result['address']?>" required>
                                                   </div> 
                                                </div>
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input class="form-control"name="mobile" value="<?php echo $result['mobile']?>"pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" required>
                                                   </div> 
                                                </div>
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control"name="email" value="<?php echo $result['email']?>" required>

                                                   </div> 
                                                </div>

                                                    
                                                  
                                                
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                <label for="category">Select Category</label>
    <select  name="catid" value="<?php echo $result['catid']?>" required class="form-control">
<?php
     $sql = ("SELECT * FROM category  where delete_status=0 ");
     $result1 = mysqli_query($conn, $sql);
     echo "<option value=''>Select</option>";
     //$row = mysqli_fetch_array($result);
    // print_r(mysqli_num_rows($result));exit;

 while ($row = mysqli_fetch_assoc($result1)){ ?>
     <option value="<?php echo $row['id']; ?>" <?php if($result['catid']==$row['id']){echo "selected";}?>><?php echo $row['name']; ?></option>";
 <?php   }                    
?></select></div></div>
<div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Profile</label>
                                                    <img src="image/<?php echo $result['profile']?>" width="10%">
                                                     <input type="hidden" name="old_image" value="<?php echo $result['profile']?>">


                                                    <input type="file" name="profile" value="<?php echo $result['profile']?>">
                                                </div>
                                            </div>
                                                        <div class="col-lg-12">
                                                        <div class="form-group">
                                                           <center>     <button type="submit" class="btn btn-default" name="btn"> Submit</button> </center> </div>
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
<?php
include("footer.php");
?>
 <!-- /#wrapper -->
        <script src="../admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin_assets/admin_assets/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../admin_assets/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../admin_assets/admin_assets/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>
        <script src="../admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin_assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>


