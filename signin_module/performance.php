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
<title>ADD OVERALL PERFORMANCE - SCHOOL MANAGEMENT SYSTEM</title>

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
<link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
<link id="defaultTheme" href="assets/dist/css/skins/component_ui_black.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
    label,input[type=text],input[type=password],input[type=email],input[type=date]{
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
                            <h1>ADD OVERALL PERFORMANCE</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>ADD OVERALL PERFORMANCE</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="performance.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Student</label>
                                                    <select class="form-control" name="students">
                                                    <?php
                                                    include("conn.php");
                                                    $query_student = "SELECT * FROM students";
                                                    $result_student =mysqli_query($conn,$query_student);
                                                    while (($row_student = mysqli_fetch_array($result_student)))
                                                    {
                                                    echo'<option value="'.$row_student[0].'">'.$row_student[1].'</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">GRADE</label>
                                                    <input type="text" class="form-control" name="grade">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">RANK IN CLASS</label>
                                                    <input type="text" class="form-control" name="rank">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">ATTENDANCE</label>
                                                    <input type="text" class="form-control" name="attendance" placeholder="OVERALL ATTENDANCE">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">PUNCHUALITY</label>
                                                    <input type="text" class="form-control" name="punchuality">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">HOME WORK</label>
                                                    <input type="text" class="form-control" name="home_work">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">UNIFORM</label>
                                                    <input type="text" class="form-control" name="uniform">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">MESSAGE</label>
                                                    <textarea type="text" class="form-control" name="message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">DATE</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" name="add_performance" class="btn btn-primary">ADD PERFORMANCE</button>
                                    </form>
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
<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
<script src="assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>
 
<script src="/removeBanner.js"></script>

</body>
</html>
<?php
include("conn.php");
if(isset($_POST['add_performance']))
{
$students = $_POST['students'];
$grade = $_POST['grade'];
$rank = $_POST['rank'];
$attendance = $_POST['attendance'];
$punchuality = $_POST['punchuality'];
$home_work = $_POST['home_work'];
$uniform = $_POST['uniform'];
$message = $_POST['message'];
$date = $_POST['date'];

  $sql = "INSERT INTO performance(student_id,grade,rank,attendance,punchuality,home_work,uniform,message,date1) VALUES ('$students','$grade','$rank','$attendance','$punchuality','$home_work','$uniform','$message','$date')";
  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('all-performance.php','_self')</script>";
  echo $link;
  }
  $conn->close();
}
?>