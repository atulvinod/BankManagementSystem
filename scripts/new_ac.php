<?php
$firstName = $_GET['fname'];
$lastName = $_GET['lname'];
$username= $_GET['un'];
$passw = $_GET['pw'];
$phone = $_GET['pno'];
$email = $_GET['email'];
$value = $_GET['bankingtype'];
$add=$_GET['address'];
$banking_type = " ";
if($value==1){
    $banking_type="Personal Banking";

}else{
    $banking_type="Corporate Banking";
}

include "dbConnect.php";
$sqlquery = "INSERT INTO `userinfo` (`ID`, `username`, `password`, `b_type`, `fname`, `lname`, `pno`, `email`, `address`) VALUES (NULL, '$username', '$passw', '$banking_type', '$firstName', '$lastName', '$passw', '$email', '$add');";
$result = mysqli_query($conn,$sqlquery);

$sqltable = "CREATE TABLE `bankserver`.`$username` ( `ID` INT NOT NULL AUTO_INCREMENT , `Transactions` VARCHAR(60) NOT NULL , `Amount` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
mysqli_query($conn,$sqltable);
session_start();
$_SESSION['doneSignup']=true;
header("Location: ../newac.php");
?>