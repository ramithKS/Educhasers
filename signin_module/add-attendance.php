<?php
SESSION_START();
include("conn.php");
if(!empty($_POST['options'])) {
    $attandances = $_POST['options'];
    $date = $_SESSION['date'];
    foreach($attandances as $name => $attandance) {
        $sql = "INSERT INTO attendance(value, student, date)
        VALUES ('$attandance', '$name', '$date')";
        if ($conn->query($sql) == TRUE) {}
    }
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
<title>Attendance</title>
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
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>ADD TODAY ATTENDANCE</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form action="add-attendance.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="exampleInputEmail1">CLASS</label>
                                                        <select class="form-control" name="class">
                                                        <?php
                                                        include("conn.php");
                                                        $query_student = "SELECT * FROM class";
                                                        $result_student =mysqli_query($conn,$query_student);
                                                        while (($row_student = mysqli_fetch_array($result_student)))
                                                        {
                                                        echo'<option value="'.$row_student[1].'">'.$row_student[1].'</option>';
                                                        }
                                                        ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="exampleInputEmail1">DATE</label>
                                                        <input type="date" class="form-control" name="date">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" name="search_attendance" class="btn btn-primary">SEARCH</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form class="form-horizontal" action="add-attendance.php" method="POST" enctype="multipart/form-data">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>STUDENT NAME</th>
                                            <th>ATTENDANCE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include("conn.php");
                                    if(isset($_POST['search_attendance']))
                                    {
                                    $class = $_POST['class'];
                                    $_SESSION['date'] = $_POST['date'];
                                    $query_student = "SELECT * FROM students WHERE class='$class'";
                                    $result_student =mysqli_query($conn,$query_student);
                                    while (($row_student = mysqli_fetch_array($result_student)))
                                    {
                                    echo'
                                    <tr>
                                    <td width="1%" class="f-s-600 text-inverse">'.$row_student[0].'</td>
                                    <td>'.$row_student[1].'</td>
                                    <td>
                                    <input type="radio" name="options['.$row_student[0].']" value="present" id="option_present_'.$row_student['id'].'">
                                    <label for="option_present_'.$row_student['id'].'">Present</label>
                                    <input type="radio" name="options['.$row_student[0].']" value="late" id="option_late_'.$row_student['id'].'">
                                    <label for="option_late_'.$row_student['id'].'">Late</label>
                                    <input type="radio" name="options['.$row_student[0].']" value="absent" id="option_absent_'.$row_student['id'].'">
                                    <label for="option_absent_'.$row_student['id'].'">Absent</label>
                                    <input type="radio" name="options['.$row_student[0].']" value="off" id="option_off_'.$row_student['id'].'">
                                    <label for="option_off_'.$row_student['id'].'">Half Day</label>
                                    </td>';
                                    echo'</tr>';
                                    }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                    <button type="submit" name="attendance" class="btn btn-primary" value="attendance">Submit Attendance</button>
                                </form>
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
