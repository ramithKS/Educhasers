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
<title>UPDATE BOOKS - SCHOOL MANAGEMENT SYSTEM</title>
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
    label,input[type=text],input[type=password],input[type=email],input[type=date],textarea,option{
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
                                        <h4>UPDATE NEW BOOKS</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="edit-books.php" method="POST" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_GET['book']))
                                        {
                                        $id = $_GET['book'];
                                        $_SESSION['book_id'] = $id;
                                        include("conn.php");
                                        $query_book = "SELECT * FROM library WHERE id='$id'";
                                        $result_book =mysqli_query($conn,$query_book);
                                        while (($row_book = mysqli_fetch_array($result_book)))
                                        {
                                        echo'<div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Title" value="'.$row_book[1].'">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Author</label>
                                                    <input type="text" class="form-control" name="author" placeholder="Enter Author" value="'.$row_book[2].'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Description</label>
                                                    <textarea type="text" class="form-control" name="description" placeholder="Enter Description" style="color:white;">'.$row_book[3].'</textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Type</label>
                                                    <select class="form-control" name="type">
                                                    <option value="English">English</option>
                                                    <option value="Urdu">Urdu</option>
                                                    <option value="Maths">Maths</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Price</label>
                                                    <input type="text" class="form-control" name="price" placeholder="Enter Price" value="'.$row_book[5].'">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Status</label>
                                                    <input type="text" class="form-control" name="status" placeholder="Enter Status"  value="'.$row_book[6].'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Stock</label>
                                                    <input type="text" class="form-control" name="stock" placeholder="Stock of book"  value="'.$row_book[7].'">
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                        }
                                        ?>
                                        <br>
                                        <button type="submit" name="update_books" class="btn btn-primary">UPDATE RECORD</button>
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
if(isset($_POST['update_books']))
{
$id = $_SESSION['book_id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$type = $_POST['type'];
$price = $_POST['price'];
$status = $_POST['status'];
$stock = $_POST['stock'];

  $sql = "UPDATE library SET title='$title',author='$author',description='$description',type='$type',price='$price',state='$status',stock='$stock' WHERE id='$id'";
  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('all-books.php','_self')</script>";
  echo $link;
  }
  $conn->close();
}
?>