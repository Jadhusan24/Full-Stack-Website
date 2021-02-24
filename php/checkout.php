<?php
  session_start();
  require '../Includes/connection.php';


  if (isset($_POST['action']) && $_POST['action']=="place-order") {

          $fname=$_POST['fname'];
          $lname=$_POST['lname'];
          $address=$_POST['address'];
          $city=$_POST['city'];
          $ctc_num=$_POST['contact_num'];
          $appartment=$_POST['appartment'];
          $card_no=$_POST['card_no'];
          $card_ccv=$_POST['card_ccv'];
          $card_expiry=$_POST['card_expiry'];
          $card_holder=$_POST['card_holder'];



          //validation
            if (empty($fname)) {
                  echo json_encode(array(
                  'response' => 'warning',
                  'message' => 'Cannot leave firstname empty',
                  'title' => 'Oopsies',
                ));
                exit();
            }
            elseif (empty($lname)) {
                  echo json_encode(array(
                  'response' => 'warning',
                  'message' => 'Cannot leave lastname empty',
                  'title' => 'Oopsies',
                ));
                exit();

            }
            elseif (empty($address)) {
                  echo json_encode(array(
                  'response' => 'warning',
                  'message' => 'Cannot leave address empty',
                  'title' => 'Oopsies',
                ));
                exit();

            }
            elseif (empty($city)) {
                  echo json_encode(array(
                  'response' => 'warning',
                  'message' => 'Cannot leave city empty',
                  'title' => 'Oopsies',
                ));
                exit();

            }
            elseif (empty($card_no) || empty($card_holder) || empty($card_ccv) || empty($card_expiry)) {
                  echo json_encode(array(
                  'response' => 'warning',
                  'message' => 'Please fill out the payment details',
                  'title' => 'Oopsies',
                ));
                exit();

            }
            elseif(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/",$lname) || !preg_match("/^[a-zA-Z]*$/", $city) ){
              echo json_encode(array(
              'response' => 'warning',
              'message' => 'You entered invalid text',
              'title' => 'Oopsies',
            ));
            exit();
          }
          else {

                     $date=date('Y:m:d');
                     $sql="INSERT INTO orders_tbl (CID,DateOfOrder) VALUES (?,?)";
                     $stmt=mysqli_stmt_init($conn);

                         if (!mysqli_stmt_prepare($stmt,$sql)) {
                               echo json_encode(array(
                               'response' => 'warning',
                               'message' => 'Sorry there has been an error',
                               'title' => 'Oopsies',
                             ));
                             // echo "Error placing order: ".mysqli_error($conn);
                         }
                         else {
                           mysqli_stmt_bind_param($stmt, "is", $_SESSION['customer_id'],$date);

                           if(!mysqli_stmt_execute($stmt)){
                             echo json_encode(array(
                             'response' => 'warning',
                             'message' => 'Sorry there has been an error  ',
                             'title' => 'Oopsies',
                           ));
                             exit();
                             }else{
                               $last_id = mysqli_insert_id($conn);
                               if (isset($_SESSION['cart'])) {
                                 $order_details="INSERT INTO order_details (order_id, product_id,p_size,p_quantity) VALUES ";


                                 foreach ($_SESSION['cart'] as $key => $value) {
                                    $order_details .="(".$last_id.",".$value['pid'].",'".$value['p_size']."',".$value['p_quantity']."),";

                                 }
                                 $final = rtrim($order_details,",");

                                 if($result=mysqli_query($conn,$final)){

                                   $delivery_details="INSERT INTO delivery_address (order_id,city,address,appartment,ctc_number) VALUES (?,?,?,?,?)";
                                   $stmt=mysqli_stmt_init($conn);

                                       if (!mysqli_stmt_prepare($stmt,$delivery_details)) {
                                         echo json_encode(array(
                                         'response' => 'warning',
                                         'message' => 'Sorry there has been an error',
                                         'title' => 'Oopsies',
                                       ));
                                       exit();
                                       }else {
                                         mysqli_stmt_bind_param($stmt, "isssi",$last_id,$city,$address,$appartment,$ctc_num);


                                         if(!mysqli_stmt_execute($stmt)){
                                           echo json_encode(array(
                                           'response' => 'warning',
                                           'message' => 'Sorry there has been an error placing',
                                           'title' => 'Oopsies',
                                         ));
                                         exit();
                                           // echo "Error placing order: ".mysqli_error($conn);
                                           }
                                           else{
                                             foreach ($_SESSION['cart'] as $key => $value) {
                                               $size=$value['p_size'];
                                               $id=$value['pid'];
                                               $product="SELECT * FROM products_details WHERE PID=$id AND Size ='$size'";
                                               $output=mysqli_query($conn, $product);

                                               if ($get= mysqli_fetch_assoc($output)) {
                                                 $newQty=$get['Quantity']-$value['p_quantity'];
                                                 $updateQty="UPDATE products_details SET Quantity=$newQty WHERE PID=$id AND Size='$size'";
                                                 if($success=mysqli_query($conn,$updateQty)){
                                                   echo json_encode(array(
                                                     'response' => 'success',
                                                     'message' => 'Your order has been made! And will reach you soon',
                                                     'title' => 'Yay',
                                                   ));
                                                   unset($_SESSION['cart']);
                                                   exit();

                                                 }

                                               }else {
                                                 echo json_encode(array(
                                                   'response' => 'warning',
                                                   'message' => "We're sorry but there was an error. Please retry again",
                                                   'title' => 'Sorry',
                                                 ));
                                                 // echo "err ".mysqli_error($conn);
                                               }


                                             }

                                           }

                                         }
                                 }
                                 else {
                                   // echo "Error saving order details: ".mysqli_error($conn);
                                   echo json_encode(array(
                                   'response' => 'warning',
                                   'message' => 'Error placing order! Please try again',
                                   'title' => 'Sorry',
                                 ));
                                 exit();
                                 }
                               }

                             }//end of inserting order
                         }

          }


  }

 ?>
