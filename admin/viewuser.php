<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");

$sql= "SELECT * from  admin where delete_status='0'";
$result=$conn->query($sql);



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title></title>

        <!-- Bootstrap Core CSS -->
        <link href="../admin_assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../admin_assets/css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../admin_assets/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../admin_assets/css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../admin_assets/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../admin_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
    </head>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <b>  User Details</b>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <b><table><td>    
            <a href="adduser.php"><input id="" type="submit" name="btn" value="Add User" class="btn btn-default" /></a>
        </td></tr>
                                       </table></b>
                                    <br>
                                    <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <div class="col-sm-6">
        <div id="dataTables-example_filter" class="dataTables_filter">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Profile Image</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    
                    <th>Mobile</th>
                    <th>Email </th>
                    
                    <th>Status</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

<?php
foreach ($result as $row) {
	 
	?>
	<tr>
		<td><?php echo $row['id']; ?></td>
        <td><img src="image/<?php echo $row['profile']; ?>" style="width: 50px; height: 50px;"></td>
		<td><?php echo $row['fname']; ?></td>
		<td><?php echo $row['lname']; ?></td>
	   
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['email']; ?></td>
		
		
		
		<td><?php if($row['status']==1){
		echo "Active";	
		}else{ echo "Deactive"; }
		?></td>

		<td>	
            <a href="edituser.php?uid=<?php echo $row['uid']?>"><input id="edit" type="submit" name="edit" value="Edit" class="btn btn-default" style="width: 85%;" /></a><br><br>
          <a href="deleteuser.php?uid=<?php echo $row['uid']?>" onclick="return confirm('Are you sure to delete this record?')">  <input id="delete" type="submit" name="delete" value="Delete" class="btn btn-default" /></a>
        </td>
        	</tr>
<?php	
}
?>

                                               
                                        </tbody>
        </div>
    </div>
</table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
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



               <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    
</html>
<?php
include("footer.php");
?>
