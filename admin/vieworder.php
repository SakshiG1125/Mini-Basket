<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");
$sql= "SELECT * FROM `order` WHERE delete_status='0' AND status='1' ";

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
                                 <b>   Order Details</b>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                   
                                    <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <div class="col-sm-6">
        <div id="dataTables-example_filter" class="dataTables_filter">
            <thead>

		<tr><th>Id</th>
			<th>Product Name</th>
            <th>User Name</th>
            <th>Quantity</th>
			<th>Prize</th>
            <th>Total</th>
			<th>Status </th>
			
			</thead>
            <tbody>
			 
    
</tr>
<?php
foreach ($result as $row) {
	 $sql1="SELECT * from order_item where o_id='".$row['id']."'";
     
	 $result1=$conn->query($sql1);
	 $row1=$result1->fetch_assoc();
	

    $sql2="SELECT * from product where id='".$row1['pid']." '";
     $result2=$conn->query($sql2);
     $row2=$result2->fetch_assoc();

	?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row2['pname']; ?></td>
		<td><?php echo $row['fname'] ." ".$row['lname'];; ?></td>
        <td><?php echo $row1['quantity']; ?></td>
		<td><?php echo $row1['prize']; ?></td>
		<td><?php echo $row1['total']; ?></td>
		<td><?php if($row['status']==1){
        echo "Deliverd";  
        }elseif ($row['status']==0) {echo "Pending";
            
        }
        else{ echo "Decline"; }
        ?></td>
		
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
        <script src="../admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin_assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
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
