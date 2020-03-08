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
<title>PROMOTE STUDENT - SCHOOL MANAGEMENT SYSTEM</title>
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
                            <h1>PROMOTE STUDENT</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>PROMOTE STUDENT RECORD</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="promote-student.php" method="POST" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_GET['student']))
                                        {
                                        $id = $_GET['student'];
                                        $_SESSION['student_id'] = $id;
                                        include("conn.php");
                                        $query = "SELECT * FROM students WHERE id='$id'";
                                        $result =mysqli_query($conn,$query);
                                        while (($row = mysqli_fetch_array($result)))
                                        {
                                        echo'<div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">FULL NAME</label>
                                                    <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name" value="'.$row[1].'">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">CLASS</label>
                                                    <select class="form-control" name="class">';
                                                    $query_student = "SELECT * FROM class";
                                                    $result_student =mysqli_query($conn,$query_student);
                                                    while (($row_student = mysqli_fetch_array($result_student)))
                                                    {
                                                    // if($row[13] == $row_transport[0])
                                                    echo'<option value="'.$row_student[1].'">'.$row_student[1].'</option>';
                                                    }
                                                    echo'</select>
                                                </div>

                                            </div>
                                        </div>';
                                        }
                                        }
                                        ?>
                                        <br>
                                        <button type="submit" name="promote_students" class="btn btn-primary">PROMOTE RECORD</button>
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
if(isset($_POST['promote_students']))
{
$id = $_SESSION['student_id'];
$class = $_POST['class'];

  $sql = "UPDATE students SET class='$class' WHERE id='$id'";

  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('all-student.php','_self')</script>";
  echo $link;
  }
  $conn->close();
}
?>