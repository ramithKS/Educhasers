<?php
SESSION_START();

include("conn.php");
if(isset($_POST['stulogin']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$query_student = "SELECT * FROM students WHERE email='$username' AND password='$password'";
$result_student =mysqli_query($conn,$query_student);
$row_student = mysqli_fetch_array($result_student);
        if (sizeof($row_student) > 0) {
            $_SESSION['student']=$row_student[0];
            $link = "<script>window.open('s-events.php','_self')</script>";
            echo $link;
        }
        
        else
        {
              header("location:stutealogin.html");
        }
    }
?>