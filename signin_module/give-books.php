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
<title>GIVE BOOKS - SCHOOL MANAGEMENT SYSTEM</title>
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
                                        <h4>GIVE BOOKS</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="give-books.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Book</label>
                                                    <select class="form-control" name="books">
                                                    <?php
                                                    include("conn.php");
                                                    $query_books = "SELECT * FROM library";
                                                    $result_books =mysqli_query($conn,$query_books);
                                                    while (($row_books = mysqli_fetch_array($result_books)))
                                                    {
                                                    echo'<option value="'.$row_books[0].'">'.$row_books[1].'</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Student</label>
                                                    <select class="form-control" name="students">
                                                    <?php
                                                    include("conn.php");
                                                    $query_student = "SELECT * FROM students";
                                                    $result_student =mysqli_query($conn,$query_student);
                                                    while (($row_student = mysqli_fetch_array($result_student)))
                                                    {
                                                    echo'<option value="'.$row_student[0].'">'.$row_student[1].'</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" name="give_books" class="btn btn-primary">GIVE BOOKS</button>
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
if(isset($_POST['give_books']))
{
$books = $_POST['books'];
$students = $_POST['students'];
$publish_date = date("Y-m-d");

  $sql = "INSERT INTO publish_book(book_id,student_id,publish_date) VALUES ('$books','$students','$publish_date')";
  if ($conn->query($sql) == TRUE) {
  $query_library = "SELECT * FROM library WHERE id='$books'";
  $result_library =mysqli_query($conn,$query_library);
  while (($row_library = mysqli_fetch_array($result_library)))
  {
  $stock_1=$row_library[7]-1;
  $sql = "UPDATE library SET stock='$stock_1' WHERE id='$books'";
  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('all-books.php','_self')</script>";
  echo $link;
  }
  }
  }
  $conn->close();
}
?>