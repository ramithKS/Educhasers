<?php
include("conn.php");
include("bdd.php");


if(isset($_POST['schedule']))
{
$phone = $_POST['phone'];

  $sql = "INSERT INTO calls (ph_no) VALUES ('$phone')";
  if ($conn->query($sql) == TRUE) {
  echo "<script>alert('You'll get a callback shortly);</script>"; 
  $link = "<script>window.open('index.html','_self')</script>";
  echo $link;
  }
  $conn->close();
}
?>