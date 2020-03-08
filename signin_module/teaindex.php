<?php
SESSION_START();

include("conn.php");
if(isset($_POST['tealogin']))
{
$username = $_POST['username'];
$password = $_POST['password'];
}

    $query_teacher = "SELECT * FROM teacher WHERE email='$username' AND password='$password'";
    $result_teacher =mysqli_query($conn,$query_teacher);
    while (($row_teacher = mysqli_fetch_array($result_teacher)))
    {
            if (sizeof($row_teacher) > 0) {
                $_SESSION['teacher']=$row_teacher[0];
                $link = "<script>window.open('t-events.php','_self')</script>";
                echo $link;
            }
            else
            {
                echo '<script language="javascript">';
echo 'alert("Check your username or password")';
echo '</script>';

            }
    }
    

?>