<?php
session_start();
require("db.php");
$conn = $connection;

function register(){
  global $conn;
  if (isset($_POST['btn-register'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $re_pwd = mysqli_real_escape_string($conn, $_POST['repwd']);

      // Error handlers and validations
      if (empty($fname) || empty($lname) || empty($mail) || empty($pwd) || empty($re_pwd)) {
        return 'Empty fields';
      } else {
        if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
          return 'Invalid text';
        } else {
          $sql = "SELECT * FROM member WHERE email=?";
          //prepared statement
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            return "Error requesting database";
          } else {
            // Bind  parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $mail);
            //run parasm inside database
            mysqli_stmt_execute($stmt);
            $check = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($check);

            if ($row > 1) {
              return 'Email already exists';
            } else {
              $uppercase = preg_match('@[A-Z]@', $pwd);
              $lowercase = preg_match('@[a-z]@', $pwd);
              $number    = preg_match('@[0-9]@', $pwd);
              $specialChars = preg_match('@[^\w]@', $pwd);

              if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
                return 'Password not strong';
              } else {
                if ($re_pwd != $pwd) {
                  return 'Passwords dont match';
                } else {
                  if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $mail)) {
                    return 'Invalid Mail';
                  } else {
                    $hashPassword = password_hash($pwd, PASSWORD_DEFAULT);
                    $register = "INSERT INTO member(name , email, password)
                  VALUES(?,?,?);";

                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $register)) {
                      return "Error SQL";
                    } else {
                      $name = $fname .' '. $lname;
                      mysqli_stmt_bind_param($stmt, "sss", $name, $mail, $hashPassword);

                      if (!mysqli_stmt_execute($stmt)) {
                        return "Error inserting data: " . mysqli_error($conn);
                      } else {
                        $sql = "SELECT * FROM member WHERE email=?";
                        //prepared statement
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                          return "Error requesting database";
                        } else {
                          // Bind  parameters to the placeholder
                          mysqli_stmt_bind_param($stmt, "s", $mail);
                          //run parasm inside database
                          mysqli_stmt_execute($stmt);
                          $check = mysqli_stmt_get_result($stmt);
                          $row = mysqli_fetch_assoc($check);

                        if (!isset($_SESSION['customer_id'])) {
                          $_SESSION['customer_id'] = $row['MID'];
                        } else {
                          unset($_SESSION['customer_id']);
                          $_SESSION['customer_id'] = $row['MID'];
                        }
                        return 'Account created! Happy shopping ' . $row['name'];
                        exit();
                      }
                    }
                    mysqli_close($conn);
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}