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
<title>UPDATE TRANSPORTATION RECORD - SCHOOL MANAGEMENT SYSTEM</title>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>UPDATE TRANSPORTATION RECORD</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="edit-transport.php" method="POST" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_GET['transport']))
                                        {
                                        $id = $_GET['transport'];
                                        $_SESSION['trasnport_id'] = $id;
                                        include("conn.php");
                                        $query_transport = "SELECT * FROM transportation WHERE id='$id'";
                                        $result_transport =mysqli_query($conn,$query_transport);
                                        while (($row_transport = mysqli_fetch_array($result_transport)))
                                        {
                                        echo'<div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">TITLE</label>
                                                    <input type="text" class="form-control" name="title" value="'.$row_transport[1].'">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">DESCRIPTION</label>
                                                    <input type="text" class="form-control" name="description" value="'.$row_transport[2].'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">DRIVER CONTACT NUMBER</label>
                                                    <input type="text" class="form-control" name="driver" value="'.$row_transport[3].'">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">FARE</label>
                                                    <input type="text" class="form-control" name="fare" value="'.$row_transport[4].'">
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                        }
                                        ?>
                                        <br>
                                        <button type="submit" name="update_vehical" class="btn btn-primary">UPDATE RECORD</button>
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
if(isset($_POST['update_vehical']))
{
$id = $_SESSION['trasnport_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$driver = $_POST['driver'];
$fare = $_POST['fare'];

  $sql = "UPDATE transportation SET title='$title',description='$description',driver_contact='$driver',fare='$fare' WHERE id='$id'";
  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('all-transport.php','_self')</script>";
  echo $link;
  }
  $conn->close();
}
?>