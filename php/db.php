<?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname ="cyberstore";

    $connection = mysqli_connect($servername,$username,$password,$dbname);
    if(!$connection)
    {
      die("Connection failed".mysqli_connect_error());
    }
    // echo "Connection successfull\n";
    // echo "<br>";

    if(!mysqli_select_db($connection, $dbname)){
        echo "Database not selected";
   	}
