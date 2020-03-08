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
<title>LIST OF TODAY ASSIGNMENTS - SCHOOL MANAGEMENT SYSTEM</title>
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<!--<link rel="shortcut icon" href="uploads/logo.webp" type="image/x-icon">-->
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
            <?php 
            if(isset($_SESSION['admin'])){
                include("header.php"); 
            }
            else if(isset($_SESSION['teacher'])){
                include("t-header.php"); 
            }
            ?>
            <div id="page-wrapper">
                <div class="content">
                    <div class="content-header">
                        <div class="header-title">
                            <h1>LIST OF TODAY ASSIGNMENTS</h1>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>LIST OF TODAY ASSIGNMENTS</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th style="background-color: red;">DATE</th>
                                                    <th>ROLL ID</th>
                                                    <th>STUDENT NAME</th>
                                                    <th>ATTENDANCE</th>
                                                    <th>DELETE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include("conn.php");
                                            $date = date("Y-m-d");
                                            $query_attendance = "SELECT * FROM attendance WHERE date='$date'";
                                            $result_attendance =mysqli_query($conn,$query_attendance);
                                            while (($row_attendance = mysqli_fetch_array($result_attendance)))
                                            {
                                            echo'<tr>

                                            <td width="1%" class="f-s-600 text-inverse">'.$row_attendance[0].'</td>';
                                            $query_students = "SELECT * FROM students WHERE id='$row_attendance[2]'";
                                            $result_students =mysqli_query($conn,$query_students);
                                            while (($row_students = mysqli_fetch_array($result_students)))
                                            echo'<td>'.$row_attendance[3].'</td>
                                                 <td>'.$row_students[2].'</td>
                                                 <td>'.$row_students[1].'</td>
                                                 <td>'.$row_attendance[1].'</td>
                                                 <td>
                                                <a href="today-attendance.php?id='.$row_attendance[0].'" class="btn btn-sm btn-primary m-r-5">DELETE</a>
                                                 </td>
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
                {extend: 'csv', title: 'ATTENDANCE RECORD', className: 'btn-sm'},
                {extend: 'excel', title: 'ATTENDANCE RECORD', className: 'btn-sm'},
                {extend: 'pdf', title: 'ATTENDANCE RECORD', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });
    });
</script>
 
<script src="/removeBanner.js"></script>

</body>
</html>
<?php
if(isset($_GET['id']))
{
include("conn.php");
$id=$_GET['id'];

//DELETE ATTENDANCE RECORD
$query_s = "DELETE FROM attendance where id='$id'";
$result_s =mysqli_query($conn,$query_s);
$link = "<script>window.open('today-attendance.php','_self')</script>";
echo $link;

}
?>