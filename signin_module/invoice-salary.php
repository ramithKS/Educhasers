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
<title>Invoice Of Salary</title>
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
                            <h1>INVOICE OF SALARY</h1>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>INVOICE OF SALARY<button class="btn btn-primary" onclick="printDiv('printMe')">Print</button></h4>
                                    </div>
                                </div>
                                <div class="panel-body" id="printMe">
                                    <div class="table-responsive" id="invoice">
                                        <?php
                                        include("conn.php");
                                        if(isset($_GET['id']))
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM salary WHERE id='$id'";
                                        $result =mysqli_query($conn,$query);
                                        while (($row = mysqli_fetch_array($result)))
                                        {
                                        echo'<main style="width:400px;">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover"style="width:400px;">
                                                <h4 style="text-align:center; font-weight:bold;">Educhasers Inc</h4>
                                                <p style="text-align:center;">ADDRESS:No.1, 1st Block, Koramangala - Tel:080 1234567</p>
                                                <h4 style="text-decoration:underline; text-align:center; font-weight:bold;">SALARY RECEIPT</h4>';
                                                echo'<p style="text-align:center;">'.$row[5].'&nbsp;&nbsp;&nbsp;'.$row[6].'</p>
                                                <h5 style="text-align:left;">Branch: MAIN</h5>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1"><span style="text-decoration:underline;">SR NO</span> </br>'.$row[0].'</td>';
                                                        $query_teacher = "SELECT * FROM teacher WHERE id='$row[1]'";
                                                        $result_teacher =mysqli_query($conn,$query_teacher);
                                                        while (($row_teacher = mysqli_fetch_array($result_teacher)))
                                                        {
                                                        echo'<td colspan="2"><span style="text-decoration:underline;">FULL NAME</span> </br>'.$row_teacher[1].'</td>';
                                                    echo'</tr>
                                                    <tr>
                                                    <td colspan="1">SALARY </br>'.$row[2].'</td>
                                                    </tr>
                                                         ';
                                                        }
                                                        echo'<tr>
                                                        <td colspan="3" height="50px">TOTAL: '.$row[4].'</td>
                                                        </tr>';
                                                        echo'<tr>
                                                        <td colspan="3" height="50px">SIGNATURE: </td>
                                                        </tr>';
                                                        echo'<tr>
                                                        <td colspan="3" height="100px">STAMP: </td>
                                                        </tr>';
                                                        echo'<tr>
                                                        <td colspan="2">PAYED: '.$row[4].'</td>
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
                {extend: 'csv', title: 'SALARY RECORD', className: 'btn-sm'},
                {extend: 'excel', title: 'SALARY RECORD', className: 'btn-sm'},
                {extend: 'pdf', title: 'SALARY RECORD', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });
    });
</script>
 
<script src="/removeBanner.js"></script>

</body>
</html>