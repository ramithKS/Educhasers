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
<title>Expenses Educhasers</title>
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
                                        <h4>ADD INSTITUTE EXPENSES</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="add-expenses.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">RENT EXPENSES</label>
                                                    <input type="text" class="form-control" name="rent" placeholder="Enter Rent Expenses">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">ELECTRICITY EXPENSES</label>
                                                    <input type="text" class="form-control" name="electricity" placeholder="Enter Electricity Expenses">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">INTERNET EXPENSES</label>
                                                    <input type="text" class="form-control" name="internet" placeholder="Enter Internet Expenses">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">SALARY EXPENSES</label>
                                                    <input type="text" class="form-control" name="salaries" placeholder="Enter Salaries Expenses">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">GENERATOR EXPENSES</label>
                                                    <input type="text" class="form-control" name="generator" placeholder="Enter Generator Expenses">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">PHONE EXPENSES</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Expenses">
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">GAS EXPENSES</label>
                                                    <input type="text" class="form-control" name="gas" placeholder="Enter Gas Expenses">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">WATER EXPENSES</label>
                                                    <input type="text" class="form-control" name="water" placeholder="Enter Water Expenses">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">TRANSPORT EXPENSES</label>
                                                    <input type="text" class="form-control" name="transport" placeholder="Enter Transport Expenses">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">OTHER EXPENSES</label>
                                                    <input type="text" class="form-control" name="others" placeholder="Enter Other Expenses">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" name="add_expenses" class="btn btn-primary">ADD EXPENSES</button>
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
if(isset($_POST['add_expenses']))
{
$rent = $_POST['rent'];
$electricity = $_POST['electricity'];
$internet = $_POST['internet'];
$salaries = $_POST['salaries'];
$generator = $_POST['generator'];
$phone = $_POST['phone'];
$gas = $_POST['gas'];
$water = $_POST['water'];
$transport = $_POST['transport'];
$others = $_POST['others'];
$month = date('m');
$date = date('Y-m-d');
  $sql = "INSERT INTO expenses(rent,electricity,internet,salary,generator,phone,gas,water,transport,others,month,date1) VALUES ('$rent','$electricity','$internet','$salaries','$generator','$phone','$gas','$water','$transport','$others','$month','$date')";
  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('all-expenses.php','_self')</script>";
  echo $link;
  }
  $conn->close();
}
?>