<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Loan - University Bank</title>
<link href="stylesheet.css" rel="stylesheet"/>
</head>
<body alink="#333333" link="#333333" vlink="#333333">
<div class="header">
<br />
</div>
<br />
<div>
<table align="left" style="padding-top:8px;" class="sticky-1">
<tr>
<td class="title-main"><img src="logo.png" height="30" />Universal Bank</td><td>&nbsp;</td>
<td class="title-tag">MADE FOR EVERYONE</td></tr>
</table> 
<table cellspacing="4px" align="right" style="padding-top:8px;">
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
	<td ><a class="btn-top" href="index.php">&nbsp;Home</a></td>
	<td ><a class="btn-top" href="loan.php" >&nbsp;Loan</a></td>
	<td ><a class="btn-top" href="netbanking.php" >&nbsp;Net Banking</a></td>
	<td ><a class="btn-top" href="newac.php" >&nbsp;Create UB Account</a></td>
	<td ><a class="btn-top" href="login.php" >&nbsp;Login</a></td>
	<td ><a class="btn-top" href="aboutus.php" >&nbsp;About US</a></td>
	<td></td>
</tr>
</table>
</div>
<br /><br /><br /><br />
<div style="margin:0px 40px 0px 40px;background-color:#CCCCCC;height:40px;padding-top:24px;padding-bottom:-6px;font-size:20px;padding-left:20px;">
<b>Create A New Account</b>
</div>
<br />
<form medthod="get" action="scripts/new_ac.php" style = "margin-left:40px">
    <label>Select Banking type</label>
    <select name = "bankingtype">

<option value = "1">Personal Banking</option>
<option value = "2">Corporate Banking</option>

</select><br/><br/>
First Name <input type="text" name="fname"/><br/><br/>

Last Name <input type="text" name ="lname"/> <br/><br/>
Username <input type="text" name ="un"/> <br/><br/>
Password <input type="text" name ="pw"/><br/><br/>
Phone Number <input type="text" name ="pno"/><br/><br/>
Email <input type="email" name ="email"/><br/><br/>
Address <input type="textarea" name ="address"/><br/><br/>
<input type="submit" value="Proceed"/>

</form>
<?php
session_start();
if(isset($_SESSION['doneSignup'])){
echo "<script>window.alert(\"signup successful \");</script>";
unset($_SESSION['doneSignup']);
}
?>

</body>
</html>