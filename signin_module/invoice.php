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
<title>Invoice</title>
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
<link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
<link id="defaultTheme" href="assets/dist/css/skins/component_ui_black.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
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
<style type="text/css">
tr,td{
    border:1px solid black;
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
                                        <h4>ALL PAYMENTS <button class="btn btn-primary" onclick="printDiv('printMe')">Print</button></h4>
                                    </div>
                                </div>
                                <div class="panel-body" id="printMe">
                                    <div class="table-responsive" id="invoice">
                                        <?php
                                        include("conn.php");
                                        if(isset($_GET['id']))
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM monthly_fees WHERE id='$id'";
                                        $result =mysqli_query($conn,$query);
                                        while (($row = mysqli_fetch_array($result)))
                                        {
                                        echo'<main style="width:400px;">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover"style="width:400px;">
                                                <h4 style="text-align:center; font-weight:bold;">THE SCHOOL</h4>
                                                <p style="text-align:center;">ADDRESS - Tel: NUMBERS</p>
                                                <h4 style="text-decoration:underline; text-align:center; font-weight:bold;">FEE RECEIPT</h4>';
                                                echo'<p style="text-align:center;">'.$row[4].'&nbsp;&nbsp;&nbsp;'.date('Y').'</p>
                                                <h5 style="text-align:left;">Branch: MAIN</h5>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1"><span style="text-decoration:underline;">Sr No</span> </br>'.$row[0].'</td>';
                                                        $query_students = "SELECT * FROM students WHERE id='$row[1]'";
                                                        $result_students =mysqli_query($conn,$query_students);
                                                        while (($row_students = mysqli_fetch_array($result_students)))
                                                        {
                                                        echo'<td colspan="2"><span style="text-decoration:underline;">STUDENT NAME</span> </br>'.$row_students[1].'</td>';
                                                    echo'</tr>
                                                    <tr>';
                                                    echo'<td colspan="1">MONTHLY FEES </br>'.$row[3].'</td>
                                                         ';
                                                        $query_class = "SELECT * FROM class WHERE id='$row_students[9]'";
                                                        $result_class =mysqli_query($conn,$query_class);
                                                        while (($row_class = mysqli_fetch_array($result_class)))
                                                        {
                                                        echo'<td colspan="1"><span style="text-decoration:underline;">CLASS</span> </br>'.$row_class[1].'</td>
                                                        </tr>
                                                         ';
                                                        }
                                                    }
                                                        $query_dues = "SELECT * FROM student_dues WHERE id='$row[2]'";
                                                        $result_dues =mysqli_query($conn,$query_dues);
                                                        while (($row_dues = mysqli_fetch_array($result_dues)))
                                                        {
                                                        echo'<tr>
                                                        <td colspan="1">FEES </br>'.$row_dues[2].'</td>
                                                        <td colspan="1">HOSTEL </br>'.$row_dues[3].'</td>
                                                        <td colspan="1">LABORTARY FEES </br>'.$row_dues[4].'</td>
                                                        </tr>';
                                                        $total = $row_dues[2] + $row_dues[3] + $row_dues[4] + $row_dues[5] + $row_dues[6];
                                                        echo'<tr>
                                                        <td colspan="1">COMPUTER FEES </br>'.$row_dues[5].'</td>
                                                        <td colspan="1">EXAM FEES </br>'.$row_dues[6].'</td>
                                                        <td colspan="1">TOTAL FEES </br>'.$total.'</td>
                                                        </tr>';
                                                        }
                                                        echo'<tr>
                                                        <td colspan="3" height="50px">SIGNATURE: </td>
                                                        </tr>';
                                                        echo'<tr>
                                                        <td colspan="3" height="100px">STAMP: </td>
                                                        </tr>';
                                                        echo'<tr>
                                                        <td colspan="2">RECIEVED: </td>
                                                        <td colspan="1">BLANCE: </td>
                                                        </tr>';
                                                echo'</tbody>
                                            </table>';
                                        }
                                        ?>
                                        </main>
                                    </div>
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
                {extend: 'csv', title: 'COLLECTED FEES', className: 'btn-sm'},
                {extend: 'excel', title: 'COLLECTED FEES', className: 'btn-sm'},
                {extend: 'pdf', title: 'COLLECTED FEES', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });
    });
</script>
 
<script src="/removeBanner.js"></script>

</body>
</html>