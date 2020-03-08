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
<title>ALL PERFORMANCE - SCHOOL MANAGEMENT SYSTEM</title>
<link rel="shortcut icon" href="uploads/logo.webp" type="image/x-icon">
<script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
WebFont.load({
    google: {
        families: ['Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i', 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 'Open Sans']
    }
});
</script>
<script type="text/javascript">
     $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>
<script>
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
</script>
<script src="assets/plugins/pace/pace.min.js"></script>
<link href="assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
<link id="defaultTheme" href="assets/dist/css/skins/component_ui_black.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
tr,td,th{
    border:1px solid black;
        font-size: 17px;
}
.gfg {
        border-collapse:separate; 
        border-spacing:0 15px; 
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
                            <h1>ALL PERFORMANCE</h1>
                        </div>
                    </div>
                    <button class="btn btn-primary" onclick="printDiv('printMe')">Print</button>
                    <div class="row" id="printMe">
                    <div class="col-lg-12">
                    <div id="invoice">
                    <div class="invoice overflow-auto">
                    <div>
                    <main>
                    <?php
                    $total = 0;
                    $obtain = 0;
                    $percantage = 0;
                    $count = 0;
                    include("conn.php");
                    if(isset($_GET['student']) && isset($_GET['date']))
                    $id = $_GET['student'];
                    $date = $_GET['date'];
                    $query = "SELECT * FROM results WHERE student_id='$id' AND date1='$date'";
                    $result =mysqli_query($conn,$query);
                    while (($row = mysqli_fetch_array($result)))
                    {
                    if($count == 0){
                        echo'<table style="width:800px; height:300px;">
                                <thead>
                                <tr style="background-color:#B8B8B8;">
                                <td colspan="10" style="text-align:center; color:black;"><strong>ACADEMIC ACHIVEMENT / PROGRESS REPORT</strong></td>
                                </tr>
                                <tr style="background-color:#B8B8B8;">
                                <td colspan="10" style="text-align:center; color:black;"><strong>'.$row[3].' / PRE-NURSERY TO MATRIC / ENGLISH MEDIUM</strong></td>
                                </tr>
                                <tr>
                                    <th colspan="5">Sr. #</th>
                                    <th colspan="5">'.$row[0].'</th>
                                </tr>
                                <tr>';
                                    $query_student = "SELECT * FROM students WHERE id='$id'";
                                    $result_student =mysqli_query($conn,$query_student);
                                    $row_student = mysqli_fetch_array($result_student);
                                    echo'<th colspan="5">FULL NAME</th>
                                    <th colspan="5">'.$row_student[1].'</th>';
                                echo'</tr>
                                <tr>';
                                    $query_parent = "SELECT * FROM parents WHERE student_id='$id'";
                                    $result_parent =mysqli_query($conn,$query_parent);
                                    $row_parent = mysqli_fetch_array($result_parent);
                                    echo'<th colspan="5">FATHER NAME</th>
                                    <th colspan="5">'.$row_parent[1].'</th>';
                                echo'</tr>
                                <tr>';
                                    $query_class = "SELECT * FROM class WHERE id='$row_student[9]'";
                                    $result_class =mysqli_query($conn,$query_class);
                                    $row_class = mysqli_fetch_array($result_class);
                                    echo'<th colspan="5">CLASS / SECTION</th>
                                    <th colspan="5">'.$row_class[1].'</th>
                                    </tr>
                                <tr>
                                    <th colspan="5">ISSUE DATE</th>
                                    <th colspan="5">'.$row[3].'</th>
                                </tr>
                                <tr>
                                    <th colspan="1">SR. #</th>
                                    <th colspan="7">SUBJECT</th>
                                    <th colspan="1">TOTAL MARKS</th>
                                    <th colspan="1">OBTAINED MARKS</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td colspan="1">'.++$count.'</td>';
                                    $query_subject = "SELECT * FROM subjects WHERE id='$row[2]'";
                                    $result_subject =mysqli_query($conn,$query_subject);
                                    $row_subject = mysqli_fetch_array($result_subject);
                                    echo'<td colspan="7">'.$row_subject[1].'</td>';
                                    echo'<td colspan="1">'.$row[4].'</td>
                                    <td colspan="1">'.$row[5].'</td>
                                    </tr>';
                                $total = $total + $row[4];
                                $obtain = $obtain + $row[5];
                    }
                    else{
                                    echo'<tr>
                                    <td colspan="1">'.$count.'</td>';
                                    $query_subject = "SELECT * FROM subjects WHERE id='$row[2]'";
                                    $result_subject =mysqli_query($conn,$query_subject);
                                    $row_subject = mysqli_fetch_array($result_subject);
                                    echo'<td colspan="7">'.$row_subject[1].'</td>';
                                    echo'<td colspan="1">'.$row[4].'</td>
                                    <td colspan="1">'.$row[5].'</td>
                                    </tr>';
                                $total = $total + $row[4];
                                $obtain = $obtain + $row[5];
                    }
                    $count++;
                    }
                                    echo'
                                    <tr>
                                    <td colspan="8">Total</td>
                                    <td colspan="1">'.$total.'</td>
                                    <td colspan="1">'.$obtain.'</td>
                                    </tr>';
                    $query = "SELECT * FROM performance WHERE student_id='$id' AND date1='$date'";
                    $result =mysqli_query($conn,$query);
                    while (($row_per = mysqli_fetch_array($result)))
                    {
                        $percantage = ($obtain / 100) * $total;
                                echo'<thead>
                                    <th colspan="1">GRADE</th>
                                    <th colspan="2">PERCENTAGE</th>
                                    <th colspan="2">RANK IN CLASS</th>
                                    <th colspan="2">ATTENDANCe</th>
                                    <th colspan="2">PUNCTUALITY</th>
                                    <th colspan="1">HOME WORK</th>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td colspan="1" style="text-align:center;">'.$row_per[2].'</td>
                                    <td colspan="2" style="text-align:center;">'.$percantage.'</td>
                                    <td colspan="2" style="text-align:center;">'.$row_per[3].'</td>
                                    <td colspan="2" style="text-align:center;">'.$row_per[4].'</td>
                                    <td colspan="2" style="text-align:center;">'.$row_per[5].'</td>
                                    <td colspan="1" style="text-align:center;">'.$row_per[6].'</td>
                                    </tr>
                                    <tr>
                                    <td colspan="10" style="text-align:center;"><strong>'.$row_per[8].'</strong></td>
                                    </tr>
                                </tbody>
                                <br>';
                    }
                    ?>
                </div>
            </div>
                </div>
            </div>
        </div>
                    </main>
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
                {extend: 'csv', title: 'REPORT', className: 'btn-sm'},
                {extend: 'excel', title: 'REPORT', className: 'btn-sm'},
                {extend: 'pdf', title: 'REPORT', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });
    });
</script>
 
<script src="/removeBanner.js"></script>

</body>
</html>