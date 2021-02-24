<?php
 	include '../Includes/connection.php';

      if (isset($_POST['action']) && $_POST['action']=="update-password") {

        $currentPass= $_POST['current_password'];
        $newPass= $_POST['new_password'];
        $reconfirmPass= $_POST['confirm_password'];
        $id= $_POST['user_id'];

        $sql = "SELECT Password FROM customers_tbl WHERE CustomerID=".$id;
        if ($result = mysqli_query($conn,$sql)) {
          $row =mysqli_fetch_array($result);

        }else {
          echo json_encode(array(
            'response' => 'warning',
            'message' => "We're sorry. There was an error please try again",
            'title' => 'Oh No',
          ));
          exit();
        }

        if (empty($currentPass) || empty($newPass) || empty($reconfirmPass)) {
          echo json_encode(array(
            'response' => 'warning',
            'message' => "Please dont leave empty fields",
            'title' => 'Oh No',
          ));
          exit();

        }else {
          $deHashpwd = password_verify($currentPass,$row['Password']);
          if ($deHashpwd==false) {
            echo json_encode(array(
              'response' => 'warning',
              'message' => "Your current password is wrong",
              'title' => 'Oh No',
            ));
            exit();
          }elseif ($deHashpwd==true) {
            if (!preg_match('/^(?=.{10,}$)(?=.*?[A-Z].*?[A-Z])(?=.*?([\x20-\x40\x5b-\x60\x7b-\x7e\x80-\xbf]).*?(?1).*?$).*$/',$newPass)) {

              echo json_encode(array(
                'response' => 'warning',
                'message' => "My baby can hack this password, password not strong",
                'title' => 'Oh No',
              ));
              exit();

            }else {
              if ($reconfirmPass!=$newPass) {
                echo json_encode(array(
                  'response' => 'warning',
                  'message' => "Your new passwords don't match",
                  'title' => 'Oh No',
                ));
                // echo "passwords-dont-match";
                exit();
              }else {
                if ($currentPass==$newPass) {
                  echo json_encode(array(
                    'response' => 'warning',
                    'message' => "Your new password cannot be your old password",
                    'title' => 'Oh No',
                  ));
                  exit();
                }else {
                  $hashPassword=password_hash($newPass, PASSWORD_DEFAULT);
                  $update_pass="UPDATE customers_tbl SET Password=? WHERE CustomerID=".  $id;
                  $stmt=mysqli_stmt_init($conn);

                      if (!mysqli_stmt_prepare($stmt,$update_pass)) {
                            echo "Error SQL";
                      }else {
                        mysqli_stmt_bind_param($stmt, "s", $hashPassword);


                        if(!mysqli_stmt_execute($stmt)){
                          echo 'Error failed to reset password '.mysqli_error($conn);
                          ecit();
                          }else{
                            echo json_encode(array(
                              'response' => 'success',
                              'message' => "Your password has been reset",
                              'title' => 'Yay',
                            ));
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


  ?>
