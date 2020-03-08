<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['login-btn'])) {

    $email = $_POST['user-email'];
    $password = $_POST['user-pass'];

    try {
      $SQLQuery = "SELECT * FROM apply WHERE email = :email";
      $statement = $conn->prepare($SQLQuery);
      $statement->execute(array(':email' => $email));

      while($row = $statement->fetch()) {
        $id = $row['id'];
        $hashed_password = $row['password'];
        $username = $row['email'];

        if(password_verify($password, $hashed_password)) {
          $_SESSION['id'] = $id;
          $_SESSION['email'] = $email;
          header('location: apply_dash/dashboard.php');
        }
        else {
          echo "Error: Invalid username or password";
        }
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}

?>