<?php
SESSION_START();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Educhasers - Login</title>
<!--<link rel="shortcut icon" href="/images/favicon.ico type="image/x-icon">-->
<script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
WebFont.load({
    google: {
        families: ['Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i', 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 'Open Sans']
    }
});
</script>
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/component_ui.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/skins/component_ui_black.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
    label,option{
        color: white;
    }
    .row
    {
        margin-left:25%;
    }
</style>
</head>
<body>
    <div class="login-wrapper">
        <h1 style="text-align: center; color: red;">Login</h1>
        <br><br>
    <div class="row">
        <div class="col-md-4 col-sm-offset-2">
            <h2 style="text-align: center;"></h2>
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>LOGIN</h3>
                            <br>
                            <!--<small><strong>Please Copy Paste your credentials to login.</strong></small>-->
                        </div>
                    </div>
                </div>
                <div class="panel-body" style = "align-content: center;">
                    <form action="index.php" method="POST" id="loginForm" novalidate>
                        <div class="form-group">
                            <label class="control-label">EMAIL</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="username" type="email" class="form-control" name="username" placeholder="Username" style="color: white;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">PASSWORD</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input id="pass" type="password" class="form-control" name="password" placeholder="******"style="color: white;">
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary pull-right" name="login">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--    <div class="col-md-4">-->
    <!--        <h2 style="text-align: center;">CREDENTIALS</h2>-->
    <!--            <div class="panel panel-bd">-->
    <!--                <div class="panel-body">-->
    <!--                    <div class="form-group">-->
    <!--                        <label class="control-label" style="color:red; font-size: 17px;">Admin Panel:-</label>-->
    <!--                        <p style="color: white; font-size: 17px;">admin@gmail.com(username)</p>-->
    <!--                        <p style="color: white; font-size: 17px;">admin(password)</p>-->
    <!--                    </div>-->
    <!--                    <div class="form-group">-->
    <!--                        <label class="control-label" style="color:red; font-size: 17px;">Teacher Panel:-</label>-->
    <!--                        <p style="color: white; font-size: 17px;">teacher@gmail.com(username)</p>-->
    <!--                        <p style="color: white; font-size: 17px;">teacher(password)</p>-->
    <!--                    <div>-->
    <!--                    <div class="form-group">-->
    <!--                        <label class="control-label" style="color:red; font-size: 17px;">Student Panel:-</label>-->
    <!--                        <p style="color: white; font-size: 17px;">student@gmail.com(username)</p>-->
    <!--                        <p style="color: white; font-size: 17px;">student(password)</p>-->
    <!--                    </div>-->
                       
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
<script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
 
<script src="/removeBanner.js"></script>

</body>
</html>
<?php
include("conn.php");
if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];
// if($option == "3")
// {
// $query_student = "SELECT * FROM students WHERE email='$username' AND password='$password'";
// $result_student =mysqli_query($conn,$query_student);
// $row_student = mysqli_fetch_array($result_student);
//         if (sizeof($row_student) > 0) {
//             $_SESSION['student']=$row_student[0];
//             $link = "<script>window.open('s-events.php','_self')</script>";
//             echo $link;
//         }
//         else
//         {
            
//         }
// }
// else if($option == "2")
// {
// $query_teacher = "SELECT * FROM teacher WHERE email='$username' AND password='$password'";
// $result_teacher =mysqli_query($conn,$query_teacher);
// while (($row_teacher = mysqli_fetch_array($result_teacher)))
// {
//         if (sizeof($row_teacher) > 0) {
//             $_SESSION['teacher']=$row_teacher[0];
//             $link = "<script>window.open('t-events.php','_self')</script>";
//             echo $link;
//         }
//         else
//         {
            
//         }
// }
// }
// else if($option == "4")
// {
// $query_parent = "SELECT * FROM parents WHERE email='$username' AND password='$password'";
// $result_parent =mysqli_query($conn,$query_parent);
// while (($row_parent = mysqli_fetch_array($result_parent)))
// {
//         if (sizeof($row_parent) > 0) {
//             $_SESSION['parent']=$row_parent[0];
//             $link = "<script>window.open('p-events.php','_self')</script>";
//             echo $link;
//         }
//         else
//         {
            
//         }
// }
// }
// else if($option == "1")
// {
$query_admin = "SELECT * FROM admin WHERE email='$username' AND password='$password'";
$result_admin =mysqli_query($conn,$query_admin);
while (($row_admin = mysqli_fetch_array($result_admin)))
{
        if (sizeof($row_admin) > 0) {
            $_SESSION['admin']=$row_admin[0];
            $link = "<script>window.open('dashboard.php','_self')</script>";
            echo $link;
        }
        else
        {
        }
}
}

?>