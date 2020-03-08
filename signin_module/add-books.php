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
<title>ADD BOOKS - SCHOOL MANAGEMENT SYSTEM</title>
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
                                        <h4>ADD NEW BOOKS</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="add-books.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">TITLE</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Title">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">AUTHOR</label>
                                                    <input type="text" class="form-control" name="author" placeholder="Enter Author">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">DESCRIPTION</label>
                                                    <textarea type="text" class="form-control" name="description" placeholder="Enter Description"></textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">TYPE</label>
                                                    <select class="form-control" name="type">
                                                    <option value="English">English</option>
                                                    <option value="Urdu">Urdu</option>
                                                    <option value="Maths">Maths</option>
                                                    <option value="Language Arts">Language Arts</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="Science">Science</option>
                                                    <option value="Health">Health</option>
                                                    <option value="Handwriting">Handwriting</option>
                                                    <option value="Physical Education">Physical Education</option>
                                                    <option value="Art">Art</option>
                                                    <option value="Music">Music</option>
                                                    <option value="Movement or Eurythmy">Movement or Eurythmy</option>
                                                    <option value="Handwork or handcrafts">Handwork or handcrafts</option>
                                                    <option value="Life Lab or gardening">Life Lab or gardening</option>
                                                    <option value="Dramatics">Dramatics</option>
                                                    <option value="Dance">Dance</option>
                                                    <option value="Spanish or other foreign language">Spanish or other foreign language</option>
                                                    <option value="Leadership">Leadership</option>
                                                    <option value="Special Education Day Class">Special Education Day Class</option>
                                                    <option value="Resource Program">Resource Program</option>
                                                    <option value="Speech">Speech</option>
                                                    <option value="Adaptive P.E.">Adaptive P.E.</option>
                                                    <option value="Occupational Therapy">Occupational Therapy</option>
                                                    <option value="Reading">Reading</option>
                                                    <option value="Language arts">Language arts</option>
                                                    <option value="Speech and Debate">Speech and Debate</option>
                                                    <option value="English">English</option>
                                                    <option value="Basic Math">Basic Math</option>
                                                    <option value="Pre-algebra">Pre-algebra</option>
                                                    <option value="Consumer Math">Consumer Math</option>
                                                    <option value="Algebra">Algebra</option>
                                                    <option value="Geometry">Geometry</option>
                                                    <option value="Honors Math in Algebra or Geometry">Honors Math in Algebra or Geometry</option>
                                                    <option value="Life Science">Life Science</option>
                                                    <option value="Earth Science">Earth Science</option>
                                                    <option value="Physical Science">Physical Science</option>
                                                    <option value="Health">Health</option>
                                                    <option value="Social Studies">Social Studies</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Ancient Civilizations">Ancient Civilizations</option>
                                                    <option value="Computer Science or Lab">Computer Science or Lab</option>
                                                    <option value="Art">Art</option>
                                                    <option value="Home Economics">Home Economics</option>
                                                    <option value="Woodshop">Woodshop</option>
                                                    <option value="Metal Shop">Metal Shop</option>
                                                    <option value="Business Technology">Business Technology</option>
                                                    <option value="Instrumental Music">Instrumental Music</option>
                                                    <option value="Band">Band</option>
                                                    <option value="Choir">Choir</option>
                                                    <option value="Drama">Drama</option>
                                                    <option value="Physical Education">Physical Education</option>
                                                    <option value="Sports">Sports</option>
                                                    <option value="Special Education Day Class">Special Education Day Class</option>
                                                    <option value="Resource Program">Resource Program</option>
                                                    <option value="Speech Therapy">Speech Therapy</option>
                                                    <option value="Occupational Therapy">Occupational Therapy</option>
                                                    <option value="High School Subjects">High School Subjects</option>
                                                    <option value="English I">English I</option>
                                                    <option value="English II">English II</option>
                                                    <option value="English III">English III</option>
                                                    <option value="English IV">English IV</option>
                                                    <option value="Remedial English">Remedial English</option>
                                                    <option value="World Literature">World Literature</option>
                                                    <option value="Ancient Literature">Ancient Literature</option>
                                                    <option value="Medieval Literature">Medieval Literature</option>
                                                    <option value="Renaissance Literature">Renaissance Literature</option>
                                                    <option value="Modern Literature">Modern Literature</option>
                                                    <option value="British Literature">British Literature</option>
                                                    <option value="American Literature">American Literature</option>
                                                    <option value="Composition">Composition</option>
                                                    <option value="Creative Writing">Creative Writing</option>
                                                    <option value="Poetry">Poetry</option>
                                                    <option value="Grammar">Grammar</option>
                                                    <option value="Vocabulary">Vocabulary</option>
                                                    <option value="Debate">Debate</option>
                                                    <option value="Speech">Speech</option>
                                                    <option value="Journalism">Journalism</option>
                                                    <option value="Publishing Skills">Publishing Skills</option>
                                                    <option value="Photojournalism">Photojournalism</option>
                                                    <option value="Yearbook">Yearbook</option>
                                                    <option value="Study Skills">Study Skills</option>
                                                    <option value="Research Skills">Research Skills</option>
                                                    <option value="Art I">Art I</option>
                                                    <option value="Art II">Art II</option>
                                                    <option value="Art III">Art III</option>
                                                    <option value="Art IV">Art IV</option>
                                                    <option value="Art Appreciation">Art Appreciation</option>
                                                    <option value="Art History">Art History</option>
                                                    <option value="Drawing">Drawing</option>
                                                    <option value="Painting">Painting</option>
                                                    <option value="Sculpture">Sculpture</option>
                                                    <option value="Ceramics">Ceramics</option>
                                                    <option value="Pottery">Pottery</option>
                                                    <option value="Instrumental Music">Instrumental Music</option>
                                                    <option value="Music Appreciation">Music Appreciation</option>
                                                    <option value="Music History">Music History</option>
                                                    <option value="Music Theory">Music Theory</option>
                                                    <option value="Music Fundamentals">Music Fundamentals</option>
                                                    <option value="Band">Band</option>
                                                    <option value="Orchestra">Orchestra</option>
                                                    <option value="Choir">Choir</option>
                                                    <option value="Voice">Voice</option>
                                                    <option value="Classical Music Studies">Classical Music Studies</option>
                                                    <option value="Performing Arts">Performing Arts</option>
                                                    <option value="Dance">Dance</option>
                                                    <option value="Photography">Photography</option>
                                                    <option value="Leather Working">Leather Working</option>
                                                    <option value="Drafting">Drafting</option>
                                                    <option value="Metal Work">Metal Work</option>
                                                    <option value="Small Engine Mechanics">Small Engine Mechanics</option>
                                                    <option value="Auto Mechanics">Auto Mechanics</option>
                                                    <option value="General Science">General Science</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Physical Science">Physical Science</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Organic Chemistry">Organic Chemistry</option>
                                                    <option value="Life Science">Life Science</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Zoology">Zoology</option>
                                                    <option value="Botany">Marine Biology</option>
                                                    <option value="Botany">Botany</option>
                                                    <option value="Earth Science">Earth Science</option>
                                                    <option value="Geology">Geology</option>
                                                    <option value="Oceanography">Oceanography</option>
                                                    <option value="Meteorology">Meteorology</option>
                                                    <option value="Astronomy">Astronomy</option>
                                                    <option value="Animal Science">Animal Science</option>
                                                    <option value="Equine Science">Equine Science</option>
                                                    <option value="Veterinary Science">Veterinary Science</option>
                                                    <option value="Forensic Science">Forensic Science</option>
                                                    <option value="Ecology">Ecology</option>
                                                    <option value="Environmental Science">Environmental Science</option>
                                                    <option value="Gardening">Gardening</option>
                                                    <option value="Food Science">Food Science</option>
                                                    <option value="Spanish">Spanish</option>
                                                    <option value="French">French</option>
                                                    <option value="Japanese">Japanese</option>
                                                    <option value="German">German</option>
                                                    <option value="Latin">Latin</option>
                                                    <option value="Greek">Greek</option>
                                                    <option value="Hebrew">Hebrew</option>
                                                    <option value="Chinese">Chinese</option>
                                                    <option value="Literature">Literature</option>
                                                    <option value="Culture">Culture</option>
                                                    <option value="Remedial Math">Remedial Math</option>
                                                    <option value="Fundamental Math or Basic Math">Fundamental Math or Basic Math</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="Pre-Algebra">Pre-Algebra</option>
                                                    <option value="Algebra I">Algebra I</option>
                                                    <option value="Algebra II">Algebra II</option>
                                                    <option value="Intermediate Algebra">Intermediate Algebra</option>
                                                    <option value="Geometry">Geometry</option>
                                                    <option value="Trigonometry">Trigonometry</option>
                                                    <option value="Precalculus">Precalculus</option>
                                                    <option value="Calculus">Calculus</option>
                                                    <option value="Statistics">Statistics</option>
                                                    <option value="Business Math">Business Math</option>
                                                    <option value="Consumer Math">Consumer Math</option>
                                                    <option value="Accounting">Accounting</option>
                                                    <option value="Personal Finance and Investing">Personal Finance and Investing</option>
                                                    <option value="Ancient History">Ancient History</option>
                                                    <option value="Medieval History">Medieval History</option>
                                                    <option value="Greek and Roman History">Greek and Roman History</option>
                                                    <option value="Renaissance History with US History">Renaissance History with US History</option>
                                                    <option value="Modern History with US History">Modern History with US History</option>
                                                    <option value="World History">World History</option>
                                                    <option value="World Geography">World Geography</option>
                                                    <option value="US History">US History</option>
                                                    <option value="World Religions">World Religions</option>
                                                    <option value="World Current Events">World Current Events</option>
                                                    <option value="Government">Government</option>
                                                    <option value="Civics">Civics</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Political Science">Political Science</option>
                                                    <option value="Social Sciences">Social Sciences</option>
                                                    <option value="Psychology">Psychology</option>
                                                    <option value="Sociology">Sociology</option>
                                                    <option value="Anthropology">Anthropology</option>
                                                    <option value="Genealogy">Genealogy</option>
                                                    <option value="Philosophy">Philosophy</option>
                                                    <option value="Nutrition">Nutrition</option>
                                                    <option value="Keyboarding">Keyboarding</option>
                                                    <option value="Word Processing">Word Processing</option>
                                                    <option value="Computer Aided Drafting">Computer Aided Drafting</option>
                                                    <option value="Computer Graphics">Computer Graphics</option>
                                                    <option value="Digital Arts">Digital Arts</option>
                                                    <option value="Photoshop">Photoshop</option>
                                                    <option value="Programming">Programming</option>
                                                    <option value="Computer Repair">Computer Repair</option>
                                                    <option value="Web Design">Web Design</option>
                                                    <option value="Desktop Publishing">Desktop Publishing</option>
                                                    <option value="Culinary Arts">Culinary Arts</option>
                                                    <option value="Child Development">Child Development</option>
                                                    <option value="Home Management">Home Management</option>
                                                    <option value="Home Organization">Home Organization</option>
                                                    <option value="Basic Yard Care">Basic Yard Care</option>
                                                    <option value="Financial Management">Financial Management</option>
                                                    <option value="Driver’s Education">Driver’s Education</option>
                                                    <option value="Personal Organization">Personal Organization</option>
                                                    <option value="Social Skills">Social Skills</option>
                                                    <option value="Career Planning">Career Planning</option>
                                                    <option value="AP Courses in any core subject">AP Courses in any core subject</option>
                                                    <option value="Honors Courses in any core subject">Honors Courses in any core subject</option>
                                                    <option value="Study Skills">Study Skills</option>
                                                    <option value="SAT Prep">SAT Prep</option>
                                                    <option value="Work-Study">Work-Study</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">PRICE</label>
                                                    <input type="text" class="form-control" name="price" placeholder="Enter Price">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">STATUS</label>
                                                    <input type="text" class="form-control" name="status" placeholder="Enter Status">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">STOCK</label>
                                                    <input type="text" class="form-control" name="stock" placeholder="Stock of book">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" name="add_books" class="btn btn-primary">ADD BOOKS</button>
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
if(isset($_POST['add_books']))
{
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$type = $_POST['type'];
$price = $_POST['price'];
$status = $_POST['status'];
$stock = $_POST['stock'];

  $sql = "INSERT INTO library(title,author,description,type,price,state,stock) VALUES ('$title','$author','$description','$type','$price','$status','$stock')";
  if ($conn->query($sql) == TRUE) {
  $link = "<script>window.open('all-books.php','_self')</script>";
  echo $link;
  }
  $conn->close();
}
?>