<?php 
session_start();
if(!isset($_SESSION['admin']))
{
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>All Students</title>
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
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
                                        <h4>ALL STUDENTS</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <!--<th>#</th>-->
                                                    <th>PROFILE</th>
                                                    <th>ROLL NUMBER</th>
                                                    <th>CLASS</th>
                                                    <th>FULL NAME</th>
                                                    <th>PHONE NUMBER</th>
                                                    <th>PROMOTE</th>
                                                    <th>EDIT</th>
                                                    <th>DELETE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    include("conn.php");
                                                    $query_student = "SELECT * FROM students";
                                                    $result_student =mysqli_query($conn,$query_student);
                                                    while (($row_student = mysqli_fetch_array($result_student)))
                                                    {
                                                    echo'<tr>
                                                   
                                                    <td>
                                                    <figure class="user-avatar small">
                                                        <img src="'.$row_student[10].'" class=img-responsive alt=user-image>
                                                    </figure>
                                                    </td>
                                                    <td>'.$row_student[2].'</td>
                                                    <td>'.$row_student[9].'</td>
                                                    <td>'.$row_student[1].'</td>
                                                    <td>'.$row_student[8].'</td>';
                                                    // if($row_student[12] == 0){
                                                    // echo'<td>No Tranport</td>';
                                                    // }
                                                    // else{
                                                    // $query_transportation = "SELECT * FROM transportation WHERE id='$row_student[12]'";
                                                    // $result_transportation =mysqli_query($conn,$query_transportation);
                                                    // $row_transportation = mysqli_fetch_array($result_transportation);
                                                    // echo'<td>'.$row_transportation[3].'</td>';
                                                    // }
                                                    // $query_dues = "SELECT * FROM student_dues WHERE student_id='$row_student[0]'";
                                                    // $result_dues =mysqli_query($conn,$query_dues);
                                                    // while (($row_dues = mysqli_fetch_array($result_dues)))
                                                    // {
                                                    // $total = $row_dues[1] + $row_dues[2] + $row_dues[3] + $row_dues[4] + $row_dues[5] + $row_dues[6];
                                                    // echo'<td>'.$total.'</td>';
                                                    // }
                                                    echo'
                                                    <td>
                                                    <a href="promote-student.php?student='.$row_student[0].'" class="btn btn-sm btn-primary m-r-5">PROMOTE</a>
                                                    </td>
                                                    <td>
                                                    <a href="edit-student.php?student='.$row_student[0].'" class="btn btn-sm btn-primary m-r-5">EDIT</a>
                                                    </td>
                                                    <td>
                                                    <a href="all-student.php?id='.$row_student[0].'" class="btn btn-sm btn-primary m-r-5">DELETE</a>
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
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
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
                {extend: 'csv', title: 'STUDENTS RECORD', className: 'btn-sm'},
                {extend: 'excel', title: 'STUDENTS RECORD', className: 'btn-sm'},
                {extend: 'pdf', title: 'STUDENTS RECORD', className: 'btn-sm'},
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

//DELETE STUDENT RECORD
$query_s = "DELETE FROM students where id='$id'";
$result_s =mysqli_query($conn,$query_s);

//DELETE ATTENDANCE RECORD
$query_attendance = "DELETE FROM attendance where student='$id'";
$result_attendance = mysqli_query($conn,$query_attendance);

//DELETE DUES RECORD
$query_dues = "DELETE FROM student_dues where student_id='$id'";
$result_dues = mysqli_query($conn,$query_dues);


$link = "<script>window.open('all-student.php','_self')</script>";
echo $link;

}
?>