<?php
include("check.php");
include("connect.php");
$sql="select count(id) as id1 from admin where delete_status='0'";
$result=$conn->query($sql);
   $row=$result->fetch_assoc();

   
   $sql1="SELECT  count(id) as id2 FROM `order` WHERE status='1'";
$result1=$conn->query($sql1);
$row1=$result1->fetch_assoc();
   

   $sql2="SELECT  count(id) as id3 FROM `order` WHERE status='0'";
$result2=$conn->query($sql2);
   $row2=$result2->fetch_assoc();

$sql3="select count(id) as id4 from supplier where delete_status='0' ";
$result3=$conn->query($sql3);
   $row3=$result3->fetch_assoc();

if($_SESSION['role']=='user'){
  $sql4="SELECT  count(id) as id5 FROM `order` WHERE status='1' AND uid='".$_SESSION['uid']." '";
$result4=$conn->query($sql4);
   $row4=$result4->fetch_assoc();

 $sql5="SELECT  count(id) as id6 FROM `order` WHERE status='0' AND uid='".$_SESSION['uid']." '";
$result5=$conn->query($sql5);
   $row5=$result5->fetch_assoc();
}
?>

<?php
include("header.php");

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
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">



  <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        
                    </div>
                    <?php
                        if($_SESSION['role']=='admin'){


                    ?>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-check fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row1['id2'];?></div>
                                            <div>Complete Order</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="vieworder.php">
                                    <div class="panel-footer">
                                        <span class="pull-left"> View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row2['id3'];?></div>
                                            <div>Pending Order</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="pendingorder.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-fw fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row['id1'];?></div>
                                            <div>Total Users</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="viewuser.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
     </a>

        </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-fw fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row3['id4'];?></div>
                                            <div>Total Supplier</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="viewsupplier.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

<?php
 
                           }else if($_SESSION['role']=='user'){
                            ?>
                            <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-list fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row4['id5'];?></div>
                                            <div>Complete Order</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="completeorder.php">
                                    <div class="panel-footer">
                                        <span class="pull-left"> view Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row5['id6'];?></div>
                                            <div>Pending Orders</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="pending.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                            <?php
                           }
                           ?> 

                            </div>
                        </div>
                        
                    
                        
                    
                  
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

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
