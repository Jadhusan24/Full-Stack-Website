<?php
 	include '../Includes/connection.php';
  //
  if (isset($_POST['action']) && $_POST['action']=="update-details") {
      $_fname =$_POST['fname_'];
      $_lname =$_POST['lname_'];
      $_mail =$_POST['mail_'];
      $_city =$_POST['city_'];
      $_streetAddress =$_POST['StreetAddress_'];
      $_id=$_POST['id'];
      $check_mail="SELECT * FROM customers_tbl WHERE Email='".$_mail."'";
      $res= mysqli_query($conn, $check_mail);
      $output =  mysqli_num_rows($res);

      if (empty($_fname)) {
          echo json_encode(array(
          'response' => 'warning',
          'message' => 'Cannot leave firstname empty',
          'title' => 'Oopsies',
       ));
      // echo 'Cannot leave firstname empty';
      exit();
      }
      elseif (empty($_lname)) {
      // echo 'Cannot leave lastname empty';
      echo json_encode(array(
      'response' => 'warning',
      'message' => 'Cannot leave lastname empty',
      'title' => 'Oopsies',
   ));
      exit();
      }
      elseif (empty($_mail)) {
      // echo 'Cannot leave email empty';
      echo json_encode(array(
      'response' => 'warning',
      'message' => 'Cannot leave email empty',
      'title' => 'Oopsies',
   ));
      exit();
      }
      elseif (empty($_city)) {
      // echo 'Cannot leave city empty';
      echo json_encode(array(
      'response' => 'warning',
      'message' => 'Cannot leave city empty',
      'title' => 'Oopsies',
   ));
      exit();
      }
      elseif (empty($_streetAddress)) {
      // echo 'Cannot leave street address empty';
      echo json_encode(array(
      'response' => 'warning',
      'message' => 'Cannot leave street address empty',
      'title' => 'Oopsies',
   ));
      exit();
    }
      elseif ($output==2) {
      // echo 'the mail you chose already exists. if you still want to use this email, try recovering your old password ';
      echo json_encode(array(
      'response' => 'warning',
      'message' => 'The mail you chose already exists. if you still want to use this email, try recovering your old password',
      'title' => 'Oopsies',
   ));
      echo '<a  href="../PHP/recover-password.php?mail='.$_mail.'">Click here to recover password</a>';
      exit();
    }elseif(!preg_match("/^[a-zA-Z]*$/",$_fname) || !preg_match("/^[a-zA-Z]*$/",$_lname) || !preg_match("/^[a-zA-Z]*$/",$_city)) {
      // echo 'invalid text';
      echo json_encode(array(
      'response' => 'warning',
      'message' => 'You entered invalid text',
      'title' => 'Oopsies',
   ));
      exit();
    }elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_mail)) {
      // echo 'invalid mail';
      echo json_encode(array(
      'response' => 'warning',
      'message' => 'You entered an invalid email',
      'title' => 'Oopsies',
   ));
      exit();
    }else {
      $update="UPDATE customers_tbl SET Firstname=?, Lastname=?, Email=?, City=? , StreetAddress=? WHERE CustomerID=".$_id;
      $stmt=mysqli_stmt_init($conn);

          if (!mysqli_stmt_prepare($stmt,$update)) {
                // echo "Error SQL";
                echo json_encode(array(
                'response' => 'warning',
                'message' => "We're really sorry, there was a problem. Please try again",
                'title' => 'Oopsies',
             ));
          }else {
            mysqli_stmt_bind_param($stmt, "sssss", $_fname, $_lname,$_mail,$_city,$_streetAddress);


            if(!mysqli_stmt_execute($stmt)){
              //header("Location:../FRONTEND/LoginandRegister.html?Error-registering");
              echo "Error updating data: ".mysqli_error($conn);
              exit();
              }
              else{
                // header("Location:user-account-details.php?Account-updated&action=view&id=".$_id);
                echo json_encode(array(
                  'response' => 'success',
                  'message' => "Yay. You're all set!",
                  'title' => 'Updated',
                ));
                exit();
                // echo 'updated';
              }



            }


          }
        }




if (isset($_GET['Account-updated'])) {
  echo 'Account updated';
}

 ?>

  </body>
</html>
