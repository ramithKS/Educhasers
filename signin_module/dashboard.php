<?php 
session_start();
if(!isset($_SESSION['admin']))
{
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name=description content="">
<meta name=author content="">
<title>Admin Dashboard</title>
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
<link href="assets/dist/css/base.css" rel=stylesheet type="text/css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="assets/plugins/toastr/toastr.min.css" rel=stylesheet type="text/css"/>
<link href="assets/plugins/emojionearea/emojionearea.min.css" rel=stylesheet type="text/css"/>
<link href="assets/plugins/monthly/monthly.min.css" rel=stylesheet type="text/css"/>
<link href="assets/plugins/amcharts/export.css" rel=stylesheet type="text/css"/>
<link href="assets/dist/css/component_ui.min.css" rel=stylesheet type="text/css"/>
<link id=defaultTheme href="assets/dist/css/skins/component_ui_black.css" rel=stylesheet type="text/css"/>
<link href="assets/dist/css/custom.css" rel=stylesheet type="text/css"/>
<style type="text/css">
    th,td{
        color:white;
    }
</style>
</head>
<body>
        <div id=wrapper class="wrapper animsition">
            <?php include("header.php"); ?>
            <div id=page-wrapper>
                <div class=content>
                    <div class=row>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-3">
                                <?php
                                include("conn.php");
                                $sql="SELECT id FROM class";
                                if ($result2=mysqli_query($conn,$sql))
                                {
                                $rowcount=mysqli_num_rows($result2);
                                mysqli_free_result($result2);
                                }
                                echo'<h2><span class=count-number>'.$rowcount.'</span></h2>';
                                ?>
                                <div class=small>TOTAL CLASSES</div>
                                <div class="sparkline3 text-center"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-1">
                                <?php
                                include("conn.php");
                                $sql="SELECT id FROM students";
                                if ($result2=mysqli_query($conn,$sql))
                                {
                                $rowcount=mysqli_num_rows($result2);
                                mysqli_free_result($result2);
                                }
                                echo'<h2><span class=count-number>'.$rowcount.'</span></h2>';
                                ?>
                                <div class=small>TOTAL STUDENTS</div>
                                <div class="sparkline1 text-center"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-2">
                                <?php
                                include("conn.php");
                                $sql="SELECT id FROM teacher";
                                if ($result2=mysqli_query($conn,$sql))
                                {
                                $rowcount=mysqli_num_rows($result2);
                                mysqli_free_result($result2);
                                }
                                echo'<h2><span class=count-number>'.$rowcount.'</span></h2>';
                                ?>
                                <div class=small>TOTAL TEACHERS</div>
                                <div class="sparkline2 text-center"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-4">
                                <?php
                                include("conn.php");
                                $sql="SELECT id FROM events";
                                if ($result2=mysqli_query($conn,$sql))
                                {
                                $rowcount=mysqli_num_rows($result2);
                                mysqli_free_result($result2);
                                }
                                echo'<h2><span class=count-number>'.$rowcount.'</span></h2>';
                                ?>
                                <div class=small>TOTAL EVENTS</div>
                                <div class="sparkline4 text-center"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-3">
                                <?php
                                include("conn.php");
                                $m = date("m");
                                $month = $m-1;
                                $total = 0;
                                $sql="SELECT * FROM expenses WHERE month='$month'";
                                $result =mysqli_query($conn,$sql);
                                while (($row = mysqli_fetch_array($result)))
                                {
                                $total=$row[1] + $row[2] + $row[3] + $row[4] + $row[5] + $row[6] + $row[7] + $row[8] + $row[9] + $row[10];
                                }
                                echo'<h2><span class=count-number>'.$total.'</span></h2>';
                                ?>
                                <div class=small>EXPENSES OF LAST MONTH</div>
                                <div class="sparkline3 text-center"></div>
                            </div>
                        </div>
 
                        </div>
                    </div>
                    
                        <!-- =======================EXPENCES OF LAST MONTH ================= -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="panel panel-bd lobidrag">
                                <div class=panel-heading>
                                    <div class=panel-title>
                                        <i class=ti-truck></i>
                                        <h4>EXPENCES OF LAST MONTH</h4>
                                    </div>
                                </div>
                                <div class=panel-body>
                                    <div class=table-responsive>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th style="background-color: red;">DATE</th>
                                                    <th>MONTH</th>
                                                    <th style="background-color:green;">TOTAL</th>
                                                    <th>EDIT</th>
                                                    <th>DELETE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 0;
                                                $total = 0;
                                                include("conn.php");
                                                $query_expenses = "SELECT * FROM expenses ORDER BY id DESC";
                                                $result_expenses =mysqli_query($conn,$query_expenses);
                                                while (($row_expenses = mysqli_fetch_array($result_expenses)))
                                                {
                                                if($count <= 10)
                                                {
                                                echo'
                                                <tr>
                                                    <td>'.$row_expenses[0].'</td>
                                                    <td style="background-color:red;" >'.$row_expenses[11].'</td>
                                                        
                                                        <td>'.$row_expenses[10].'</td>';
                                                        for($i=1;$i<12;$i++){
                                                            $total = $total + $row_expenses[$i];
                                                        }
                                                        echo '<td style="background-color:green;">'.$total.'</td>';
                                                        echo'<td>
                                                        <a href="edit-expenses.php?expenses='.$row_expenses[0].'" class="btn btn-sm btn-primary m-r-5">EDIT</a></td>
                                                        <td>
                                                        <a href="dashboard.php?id='.$row_expenses[0].'" class="btn btn-sm btn-primary m-r-5">DELETE</a>
                                                        </td>
                                                    </tr>';
                                                }
                                                $count++;
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
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/plugins/jQuery/jquery-1.12.4.min.js"></script>
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="assets/plugins/lobipanel/lobipanel.min.js"></script>
        <script src="assets/plugins/animsition/js/animsition.min.js"></script>
        <script src="assets/plugins/fastclick/fastclick.min.js"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/sparkline/sparkline.min.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
        <script src="assets/plugins/counterup/waypoints.js"></script>
        <script src="assets/plugins/emojionearea/emojionearea.min.js"></script>
        <script src="assets/plugins/monthly/monthly.min.js"></script>
        <script src="assets/plugins/amcharts/amcharts.js"></script>
        <script src="assets/plugins/amcharts/ammap.js"></script>
        <script src="assets/plugins/amcharts/worldLow.js"></script>
        <script src="assets/plugins/amcharts/serial.js"></script>
        <script src="assets/plugins/amcharts/export.min.js"></script>
        <script src="assets/plugins/amcharts/dark.js"></script>
        <script src="assets/plugins/amcharts/pie.js"></script>
        <script src="assets/dist/js/app.min.js"></script>
        <script src="assets/dist/js/page/dashboard_dark.js"></script>
        <script src="assets/dist/js/jQuery.style.switcher.min.js"></script>
         
<script src="/removeBanner.js"></script>

    </body>
</html>
<?php
if(isset($_GET['id']))
{
include("conn.php");
$id=$_GET['id'];

//DELETE EXPENSES RECORD
$query_s = "DELETE FROM expenses where id='$id'";
$result_s =mysqli_query($conn,$query_s);
$link = "<script>window.open('dashboard.php','_self')</script>";
echo $link;

}
?>