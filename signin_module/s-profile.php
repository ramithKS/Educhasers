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
<title>Student Profile</title>
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
            <?php include("s-header.php"); ?>
            <div id="page-wrapper">
                <div class="content">
                    <div class="content-header">
                        <div class="header-title">
                            <h1>UPDATE PROFILE</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>UPDATE PROFILE</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="s-profile.php" method="POST" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_SESSION['student']))
                                        {
                                        $id = $_SESSION['student'];
                                        $_SESSION['student_id'] = $id;
                                        include("conn.php");
                                        $query = "SELECT * FROM students WHERE id='$id'";
                                        $result =mysqli_query($conn,$query);
                                        while (($row = mysqli_fetch_array($result)))
                                        {
                                        echo'<div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img src="'.$row[10].'" style="width: 100px; height: 100px." />
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">FULL NAME</label>
                                                    <input type="text" class="form-control" name="fullname" value="'.$row[1].'">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">ROLL ID</label>
                                                    <input type="text" class="form-control" name="roll_id" value="'.$row[2].'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">USERNAME</label>
                                                    <input type="text" class="form-control" name="username" value="'.$row[3].'">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">EMAIL</label>
                                                    <input type="email" class="form-control" name="email" value="'.$row[4].'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">PASSWORD</label>
                                                    <input type="password" class="form-control" name="password" value="'.$row[5].'">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">GENDER</label>
                                                    <br>
                                                    <input type="radio" name="gender" id="optionsRadios1" value="Male" checked>
                                                    <label class="form-check-label">Male</label>
                                                    <input type="radio" name="gender" id="optionsRadios1" value="Female">
                                                    <label class="form-check-label">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">ADDRESS</label>
                                                    <input type="text" class="form-control" name="address" value="'.$row[7].'">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">PHONE NUMBER</label>
                                                    <input type="text" class="form-control" name="p_n" value="'.$row[8].'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">CLASS</label>
                                                   <input type="text" class="form-control" name="class" value="'.$row[9].'"readonly>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">PROFILE PIC</label>
                                                    <input type="file" class="form-control" name="fileToUpload">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">JOINING DATE</label>
                                                    <input type="date" class="form-control" name="date" value="'.$row[11].'">
                                                </div>
                                                
                                            </div>
                                        </div>';
                                        }
                                        }
                                        ?>
                                        <br>
                                        <button type="submit" name="update_students" class="btn btn-primary">UPDATE RECORD</button>
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
if(isset($_POST['update_students']))
{
$id = $_SESSION['student_id'];
$fullname = $_POST['fullname'];
$roll_id = $_POST['roll_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$p_n = $_POST['p_n'];
$class = $_POST['class'];
$date1 = $_POST['date'];
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

if($target_file == $target_dir)
{
$target_file="uploads/profile.png";
}
  $sql = "UPDATE students SET full_name='$fullname',roll_id='$roll_id',username='$username',email='$email',password='$password',gender='$gender',address='$address',p_n='$p_n',class='$class',profile='$target_file',date1='$date1' WHERE id='$id'";

  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('s-profile.php','_self')</script>";
  echo $link;
  }
  $conn->close();
}
?>