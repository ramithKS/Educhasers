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
<title>Add Assignments</title>
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
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>ADD ASSIGNMENTS</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="add-assignments.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">ASSIGNMENT TITLE</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Assignment Title">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">ASSIGNMENT DESCRIPTION</label>
                                                    <textarea type="text" class="form-control" name="description" placeholder="Enter Assignment Description" style="color: white;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">ASSIGNED DATE</label>
                                                    <input type="date" class="form-control" name="assigned_date" placeholder="Enter Assignment Price">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">ASSIGNMENT DEADLINE</label>
                                                    <input type="date" class="form-control" name="deaddline">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">ASSIGNMENT FILE</label>
                                                    <input type="file" class="form-control" name="fileToUpload">
                                                </div>
                                                <div class="col-sm-6">
                                                <label for="exampleInputEmail1">CLASS</label>
                                                    <select class="form-control" name="class">
                                                    <?php
                                                    include("conn.php");
                                                    $query_class = "SELECT * FROM class";
                                                    $result_class =mysqli_query($conn,$query_class);
                                                    while (($row_class = mysqli_fetch_array($result_class)))
                                                    {
                                                    echo'<option value="'.$row_class[1].'">'.$row_class[1].'</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">SUBJECTS</label>
                                                        <select class="form-control" name="subjects">
                                                            <?php
                                                            include("conn.php");
                                                            $query_subjects = "SELECT * FROM subjects";
                                                            $result_subjects =mysqli_query($conn,$query_subjects);
                                                            while (($row_subjects = mysqli_fetch_array($result_subjects)))
                                                            {
                                                            echo'<option value="'.$row_subjects[0].'">'.$row_subjects[1].'</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" name="add_assignments" class="btn btn-primary">ADD ASSIGNMENTS</button>
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
if(isset($_POST['add_assignments']))
{
$title = $_POST['title'];
$description = $_POST['description'];
$assigned_date = $_POST['assigned_date'];
$deaddline = $_POST['deaddline'];
$class = $_POST['class'];
$subjects = $_POST['subjects'];
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

if($target_file == $target_dir)
{
$target_file="0";
}
  $sql = "INSERT INTO assignments(title,description,assigned_date,deadline,file,class,subject) VALUES ('$title','$description','$assigned_date','$deaddline','$target_file','$class','$subjects')";
  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('add-assignments.php','_self')</script>";
  echo $link;
  }
  $conn->close();
}
?>