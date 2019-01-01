<?php
session_start();

 $makeTo= $_GET['to'];
 $amount= $_GET['amnt'];
 include "dbConnect.php";
 $current = $_SESSION['nowUser'];
 
 $Mine = "INSERT INTO `$current` (`ID`, `Transactions`, `Amount`) VALUES (NULL, 'To $makeTo', '$amount')";
 $His = "INSERT INTO `$makeTo` (`ID`, `Transactions`, `Amount`) VALUES (NULL, 'From $current', '$amount')";
 mysqli_query($conn,$Mine);
 mysqli_query($conn,$His);
 header("Location: ../user.php");
?>