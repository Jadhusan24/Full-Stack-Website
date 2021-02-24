<?php 
session_start();
require("db.php");
$conn = $connection;


function login(){
  global $conn;
  if (isset($_POST['btn-login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    if (empty($email)) {
      return 'Please enter your email';
    } elseif (empty($pwd)) {
      return 'Please enter your password';
    } else {
      $sql = "SELECT * FROM member WHERE email=?";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        return "Error requesting database";
      } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $check = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($check);
        $num_rows = mysqli_num_rows($check);
        if ($num_rows <= 0) {
          return 'The email you entered is invalid';
        } else {
          $deHashpwd = password_verify($pwd, $row['password']);
          if ($deHashpwd == false) {
            return 'The password you entered is invalid';
            exit();
          } elseif ($deHashpwd == true) {
            $_SESSION['customer_id'] = $row['MID'];
            header("Location: index.php");
            // return 'Happy shopping ' . $row['name'];
          }
          mysqli_close($conn);
        }
      }
    }
  }
}