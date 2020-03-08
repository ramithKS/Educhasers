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
<title>All Teachers</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
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
                                        <h4>ALL TEACHERS</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>PROFILE</th>
                                                    <th>NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>GENDER</th>
                                                    <th>PHONE NUMBER</th>
                                                    <th>SALARY</th>
                                                   
                                                    <th>EDIT</th>
                                                    <th>DELETE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $total = 0;
                                                include("conn.php");
                                                $query_teacher = "SELECT * FROM teacher";
                                                $result_teacher =mysqli_query($conn,$query_teacher);
                                                while (($row_teacher = mysqli_fetch_array($result_teacher)))
                                                {
                                                echo'
                                                <tr>
                                               <td>
                                                    <figure class="user-avatar small">
                                                        <img src="'.$row_teacher[10].'" class=img-responsive alt=user-image>
                                                    </figure>
                                                    </td>
                                                <td>'.$row_teacher[1].'</td>
                                                <td>'.$row_teacher[3].'</td>
                                                <td>'.$row_teacher[5].'</td>
                                                <td>'.$row_teacher[7].'</td>';
                                                // if($row_teacher[8] == 0){
                                                // echo'<td>No Tranport</td>';
                                                // echo'<td>0</td>';
                                                // }
                                                // else{
                                                // $query_transport = "SELECT * FROM transportation WHERE id='$row_teacher[8]'";
                                                // $result_transport =mysqli_query($conn,$query_transport);
                                                // while (($row_transport = mysqli_fetch_array($result_transport)))
                                                // {
                                                // echo'<td>'.$row_transport[3].'</td>';
                                                // echo'<td>'.$row_transport[4].'</td>';
                                                // $total = $row_transport[4] + $row_teacher[12];
                                                // }
                                                // }
                                                echo '<td>'.$row_teacher[11].'</td>';
                                                // echo '<td style="background-color: green;">'.$total.'</td>';
                                                echo'<td>
                                                    <a href="edit-teacher.php?teacher='.$row_teacher[0].'" class="btn btn-sm btn-primary m-r-5">EDIT</a>
                                                    </td>
                                                <td>
                                                    <a href="all-teacher.php?id='.$row_teacher[0].'" class="btn btn-sm btn-primary m-r-5">DELETE</a>
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
                {extend: 'csv', title: 'TEACHERS RECORD', className: 'btn-sm'},
                {extend: 'excel', title: 'TEACHERS RECORD', className: 'btn-sm'},
                {extend: 'pdf', title: 'TEACHERS RECORD', className: 'btn-sm'},
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
$query = "DELETE FROM teacher where id='$id'";
$result =mysqli_query($conn,$query);
if(!is_null($result))
{
$link = "<script>window.open('all-teacher.php','_self')</script>";
echo $link;
}
}
?>