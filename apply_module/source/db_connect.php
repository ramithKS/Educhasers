<?php

$username = 'id12809399_admin';
$password = 'dbmsProject';
$dsn = 'mysql:host=localhost; dbname=id12809399_edu';

try {

  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

?>
