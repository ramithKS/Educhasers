<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Educhasers</title>
<link rel="shortcut icon" href="uploads/logo.webp" type="image/x-icon">
<script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
WebFont.load({
    google: {
        families: ['Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i', 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 'Open Sans']
    }
});
</script>
<link href="assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
<link id="defaultTheme" href="assets/dist/css/skins/component_ui_black.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
    td,th{
        color: white;
    }
</style>
</head>
<body>
        <div id="wrapper" class="wrapper animsition">
            <?php include("header.php"); ?>
            <div id="page-wrapper">
                <div class="content">
                    <div class="content-header">
                        <div class="header-title">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>ALL PERFORMANCE</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>STUDENT</th>
                                                    <th>DATE</th>
                                                    <th>CREATE REPORT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 0;
                                                include("conn.php");
                                                $query = "SELECT * FROM students";
                                                $result = mysqli_query($conn,$query);
                                                while (($row = mysqli_fetch_array($result)))
                                                {
                                                    $query_result = "SELECT * FROM results WHERE student_id='$row[0]'";
                                                    $result_result = mysqli_query($conn,$query_result);
                                                    $row_result = mysqli_fetch_array($result_result);
                                                    if($row_result!= null){
                                                        echo'<tr>';
                                                        echo'<td>'.$row_result[0].'</td>';
                                                        echo'<td>'.$row[1].'</td>';
                                                        echo'<td>'.$row_result[3].'</td>';
                                                        echo'<td><a href="report.php?student='.$row[0].'&date='.$row_result[3].'" class="btn btn-sm btn-primary m-r-5">CREATE REPORT</a></td>';
                                                        echo'</tr>';
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/metisMenu/metisMenu.min.js" type="text/javascript"></script>
<script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
<script src="assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
<script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
<script src="assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        "use strict"; // Start of use strict
        $('#dataTableExample1').DataTable({
            "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
            "iDisplayLength": 6
        });
        $("#dataTableExample2").DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            buttons: [
                {extend: 'copy', className: 'btn-sm'},
                {extend: 'csv', title: 'PERFORMANCE RECORD', className: 'btn-sm'},
                {extend: 'excel', title: 'PERFORMANCE RECORD', className: 'btn-sm'},
                {extend: 'pdf', title: 'PERFORMANCE RECORD', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });
    });
</script>
 
<script src="/removeBanner.js"></script>

</body>
</html>