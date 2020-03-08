<?php
session_start();
unset($_SESSION['admin']);
unset($_SESSION['student']);
unset($_SESSION['teacher']);
session_destroy();

header("Location: stutealogin.html");
exit;
?>