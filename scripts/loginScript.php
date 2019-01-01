<?php
session_start();
$username = $_GET['user'];
$password = $_GET['pass'];
include "dbConnect.php";
$sqlUsername = "SELECT * FROM userinfo WHERE username='$username'";
$sqlPassword = "SELECT * FROM userinfo WHERE password='$password'";
$resultUser = mysqli_query($conn,$sqlUsername);
$resultPass = mysqli_query($conn,$sqlPassword);

$resultCheck = mysqli_num_rows($resultUser);
$resultCheck2 = mysqli_num_rows($resultPass);
if($resultCheck>0&&$resultCheck2>0){
    
    $_SESSION['userexists']=true;
    if($_SESSION['nowUser']!=$username){
    $_SESSION['nowUser']=$username;

    header("Location: ../user.php");
    }else{
        $_SESSION['alreadyLogged'] = true;
        // echo"<script>alert(\"User already logged in\");</script>";
        header("Location: ../login.php");

    }

}else{
    $_SESSION['userexists'] = false;
    header("Location: ../login.php");
} 