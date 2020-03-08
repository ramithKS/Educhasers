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
<title>PAY SALARY TO TEACHERS - SCHOOL MANAGEMENT SYSTEM</title>
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
                                        <h4>PAY SALARY TO TEACHERS</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="add-salary.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">TEACHER</label>
                                                        <select class="form-control" name="teacher[]"  multiple>
                                                        <?php
                                                        include("conn.php");
                                                        $query_student = "SELECT * FROM teacher";
                                                        $result_student =mysqli_query($conn,$query_student);
                                                        while (($row_student = mysqli_fetch_array($result_student)))
                                                        {
                                                        echo'<option value="'.$row_student[0].'">'.$row_student[1].'</option>';
                                                        }
                                                        ?>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" name="add_salary" class="btn btn-primary">GENERATE INVOICE</button>
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
if(isset($_POST['add_salary']))
{
$teacher1 = $_POST['teacher'];
$date = date('Y-m-d');
$month = date('M');

foreach ($teacher1 as $teacher){

  $query_teacher = "SELECT * FROM teacher WHERE id='$teacher'";
  $result_teacher =mysqli_query($conn,$query_teacher);
  $row_teacher = mysqli_fetch_array($result_teacher);
  $salary = $row_teacher[12];

  if($row_teacher[8] == "0"){
  $transport = 0;
  }
  else{
  $query_transport = "SELECT * FROM transportation WHERE id='$row_teacher[8]'";
  $result_transport =mysqli_query($conn,$query_transport);
  $row_transport = mysqli_fetch_array($result_transport);
  $transport = $row_transport[4];
  }

  $total = $salary + $transport;
  $sql = "INSERT INTO salary(teacher_id,salary_monthly,transport,total,date1,month) VALUES ('$teacher','$salary','$transport','$total','$date','$month')";
  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('salary-record.php','_self')</script>";
  echo $link;
  } 
  $conn->close();
}
}
?>