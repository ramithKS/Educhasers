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
<title>Educhasasers Expenses</title>
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
<link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
<link id="defaultTheme" href="assets/dist/css/skins/component_ui_black.css" rel="stylesheet" type="text/css"/>
<link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
    td,th{
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
                                        <h4>ALL INSTITUTE EXPENSES</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th style="background-color: red;">DATE</th>
                                                    <th>RENT</th>
                                                    <th>ELECTRICITY</th>
                                                    <th>INTERNET</th>
                                                    <th>SALARIES</th>
                                                    <th>GENERATOR</th>
                                                    <th>PHONE</th>
                                                    <th>GAS</th>
                                                    <th>WATER</th>
                                                    <th>TRANSPORT</th>
                                                    <th>OTHERS</th>
                                                    <th>MONTH</th>
                                                    <th style="background-color:green;">TOTAL</th>
                                                    <th>EDIT</th>
                                                    <th>DELETE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $total = 0;
                                                include("conn.php");
                                                $query_expenses = "SELECT * FROM expenses";
                                                $result_expenses =mysqli_query($conn,$query_expenses);
                                                while (($row_expenses = mysqli_fetch_array($result_expenses)))
                                                {
                                                echo'
                                                <tr>
                                                    <td>'.$row_expenses[0].'</td>
                                                    <td style="background-color:red;" >'.$row_expenses[12].'</td>
                                                    <td>'.$row_expenses[1].'</td>
                                                    <td>'.$row_expenses[2].'</td>
                                                    <td>'.$row_expenses[3].'</td>
                                                    <td>'.$row_expenses[4].'</td>
                                                    <td>'.$row_expenses[5].'</td>
                                                    <td>'.$row_expenses[6].'</td>
                                                        <td>'.$row_expenses[7].'</td>
                                                        <td>'.$row_expenses[8].'</td>
                                                        <td>'.$row_expenses[9].'</td>
                                                        <td>'.$row_expenses[10].'</td>
                                                        <td>'.$row_expenses[11].'</td>';
                                                        for($i=1;$i<12;$i++){
                                                            $total = $total + $row_expenses[$i];
                                                        }
                                                        echo '<td style="background-color:green;">'.$total.'</td>';
                                                        echo'<td>
                                                        <a href="edit-expenses.php?expenses='.$row_expenses[0].'" class="btn btn-sm btn-primary m-r-5">EDIT</a></td>
                                                        <td>
                                                        <a href="all-expenses.php?id='.$row_expenses[0].'" class="btn btn-sm btn-primary m-r-5">DELETE</a>
                                                        </td>
                                                    </tr>';
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
                {extend: 'csv', title: 'EXPENSES RECORD', className: 'btn-sm'},
                {extend: 'excel', title: 'EXPENSES RECORD', className: 'btn-sm'},
                {extend: 'pdf', title: 'EXPENSES RECORD', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });
    });
</script>
 
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
$link = "<script>window.open('all-expenses.php','_self')</script>";
echo $link;

}
?>