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
<title>ALL PAYMENTS - SCHOOL MANAGEMENT SYSTEM</title>
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
            <?php include("s-header.php"); ?>
            <div id="page-wrapper">
                <div class="content">
                    <div class="content-header">
                        <div class="header-title">
                            <h1>ALL PAYED FEES</h1>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>ALL PAYED FEES </h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Student's Name</th>
                                                    <th>Fees</th>
                                                    <th>Hostel</th>
                                                    <th>Labortary</th>
                                                    <th>Computer</th>
                                                    <th>Stationary</th>
                                                    <th>Exam</th>
                                                    <th>Total</th>
                                                    <th>Date</th>
                                                    <th>Month</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                $id = $_SESSION['student'];
                                                include("conn.php");
                                                $query_payments = "SELECT * FROM monthly_fees WHERE student_id='$id' ORDER by id DESC";
                                                $result_payments =mysqli_query($conn,$query_payments);
                                                while (($row_payments = mysqli_fetch_array($result_payments)))
                                                {
                                                echo'<tr>';
                                                echo'<td>'.$count++.'</td>';
                                                $query_student = "SELECT * FROM students WHERE id='$row_payments[1]'";
                                                $result_student =mysqli_query($conn,$query_student);
                                                while (($row_student = mysqli_fetch_array($result_student)))
                                                {
                                                $student=$row_student[1];
                                                }
                                                echo'<td>'.$student.'</td>';
                                                $query_dues = "SELECT * FROM student_dues WHERE id='$row_payments[2]'";
                                                $result_dues =mysqli_query($conn,$query_dues);
                                                while (($row_dues = mysqli_fetch_array($result_dues)))
                                                {
                                                echo'<td>'.$row_dues[1].'</td>';
                                                echo'<td>'.$row_dues[2].'</td>';
                                                echo'<td>'.$row_dues[3].'</td>';
                                                echo'<td>'.$row_dues[4].'</td>';
                                                echo'<td>'.$row_dues[5].'</td>';
                                                echo'<td>'.$row_dues[6].'</td>';
                                                $total = $row_dues[0] + $row_dues[1] + $row_dues[2] + $row_dues[3] + $row_dues[5] + $row_dues[6];
                                                }
                                                echo'<td style="background-color:green;">'.$total.'</td>
                                                <td>'.$row_payments[3].'</td>
                                                <td>'.$row_payments[4].'</td>
                                                </tr>';
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
                {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });
    });
</script>
 
<script src="/removeBanner.js"></script>

</body>
</html>