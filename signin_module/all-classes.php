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
<title>ALL CLASSES - SCHOOL MANAGEMENT SYSTEM</title>
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
                                        <h4>ADD NEW CLASS WITH CLASS TEACHER</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="all-subjects.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">CLASS NAME</label>
                                                    <input type="text" class="form-control" name="class_name" placeholder="Enter Class Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">TEACHER</label>
                                                    <select class="form-control" name="teacher">
                                                    <?php
                                                    include("conn.php");
                                                    $query_teacher = "SELECT * FROM teacher";
                                                    $result_teacher =mysqli_query($conn,$query_teacher);
                                                    while (($row_teacher = mysqli_fetch_array($result_teacher)))
                                                    {
                                                    echo'<option value="'.$row_teacher[0].'">'.$row_teacher[1].'</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" name="add_subject" class="btn btn-primary">ADD SUBJECT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>ALL CLASSES RECORD WITH CLASS TEACHERS</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>CLASS</th>
                                                    <th>TEACHER</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include("conn.php");
                                                $query_class = "SELECT * FROM class";
                                                $result_class =mysqli_query($conn,$query_class);
                                                while (($row_class = mysqli_fetch_array($result_class)))
                                                {
                                                echo'
                                                <tr>
                                                <td>'.$row_class[0].'</td>
                                                <td>'.$row_class[1].'</td>';
                                                $query_teacher = "SELECT * FROM teacher WHERE id='$row_class[2]'";
                                                $result_teacher =mysqli_query($conn,$query_teacher);
                                                while (($row_teacher = mysqli_fetch_array($result_teacher)))
                                                echo '<td>'.$row_teacher[1].'</td>
                                                <td>
                                                <a href="all-classes.php?id='.$row_class[0].'" class="btn btn-sm btn-primary m-r-5">DELETE</a>
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
                {extend: 'csv', title: 'CLASSES CLASSES', className: 'btn-sm'},
                {extend: 'excel', title: 'CLASSES CLASSES', className: 'btn-sm'},
                {extend: 'pdf', title: 'CLASSES RECORD', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });
    });
</script>
 
<script src="/removeBanner.js"></script>

</body>
</html>
<?php
include("conn.php");
if(isset($_POST['add_subject']))
{
$subject = $_POST['subject'];
$teacher = $_POST['teacher'];

  $sql = "INSERT INTO subjects(name,teacher) VALUES ('$subject','$teacher')";
  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('all-classes.php','_self')</script>";
  echo $link;
  }
  $conn->close();
}
if(isset($_GET['id']))
{
include("conn.php");
$id=$_GET['id'];
$query = "DELETE FROM class where id='$id'";
$result =mysqli_query($conn,$query);
if(!is_null($result))
{
$link = "<script>window.open('all-classes.php','_self')</script>";
echo $link;
}
}
?>