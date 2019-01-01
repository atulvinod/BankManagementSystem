<!DOCTYPE html >
<html >
<head>
<title>Login</title>
<link href="stylesheet.css" rel="stylesheet"/>
</head>

<body alink="#333333" link="#333333" vlink="#333333">
<div class="header">
<br />
</div>
<br />
<div class="sticky">
<table align="left" style="padding-top:8px;">
<tr><td class="title-main"><img src="logo.png" height="30" />Universal Bank</td><td>&nbsp;</td><td class="title-tag">MADE FOR EVERYONE</td></tr>
</table> 
<table cellspacing="4px" align="right" style="padding-top:8px;">
<tr><td></td></tr><tr><td></td></tr>
<tr>
<td ><a class="btn-top" href="index.php">&nbsp;Home</a></td>
<td ><a class="btn-top" href="loan.php" >&nbsp;Loan</a></td>
<td ><a class="btn-top" href="netbanking.php" >&nbsp;Net Banking</a></td>
<td ><a class="btn-top" href="newac.php" >&nbsp;Create UB Account</a></td>
<td ><a class="btn-top" href="login.php" style="border-bottom:#333333 solid 2px; padding-bottom:3px;">&nbsp;Login</a></td>
<td ><a class="btn-top" href="aboutus.php">&nbsp;About US</a></td>
<td></td>
</tr>
</table>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div style="background-image:url(img/loan_ban-1.jpg);padding:5px" >
<form medthod = "get" action = " " name="myForm" onload=" return runScript()" id="form">
<center>
<h1 style="color:white;text-align:center">Login</h1>
<center><input type = "text" id="user" name="user" placeholder="Username" style="width:400px;height:40px;margin:5px;text-align:center"/><br/>
<input type = "password" id="pass"name="pass" placeholder="Password" style="width:400px;height:40px;margin:5px;text-align:center"/><br/></center>
<input type = "submit"  value="Login" style="width:200px;height:40px;margin:5px" onclick="return runScript()"/>

</center>
</form>

</div>
<?php
session_start();

if(isset($_SESSION['userexists'])){
    if($_SESSION['userexists']==true ){
    if(!isset($_SESSION['alreadyLogged'])){
    echo "<script>window.alert(\"Logged in\");</script>";
    }else{
        echo "<script>window.alert(\"User has already logged in\");</script>";
        
    }
    }else{
        echo "<script>
        window.alert(\"Incorrect login details\");</script>";
    }
    unset($_SESSION['userexists']);
}
?>
</body>
<script>
    function runScript(){
     
        var userid = document.getElementById("user");
        var pass = document.getElementById("pass");
        var from = document.getElementById("form");
        if(user ==="" || pass===""){
         window.alert("Enter the required fields");
        }else{
         var action = document.createAttribute("action");
         action.value="scripts/loginScript.php";
         form.setAttributeNode(action);   
         from.submit();
        }
    }
    </script>
</html>
