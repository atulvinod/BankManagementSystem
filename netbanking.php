<!DOCTYPE html >

<head>
<title>Netbanking</title>
<link href="stylesheet.css" rel="stylesheet"/>

</head>
<script>
function accept(){
	window.alert("your loan has been accepted");
}
</script>
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
<b>Log in</b>
</div>
<br />
<form style="margin:0px 40px 0px 40px;" method="post">
<div style="padding-left:40px;padding-right:40px;background-color:white;box-shadow:rgba(0,0,0,0.1) 5px 5px;border:solid rgba(0,0,0,0.1) 1px;">

<br /><br />
<b style="letter-spacing:1px;">Choose Banking Type</b><hr />
Choose Login &nbsp;  
<select class="input-loan">
	<option>Choose Login Type</option>
	<option>1. Personal Banking</option>
	<option>2. Corporate Banking</option>

</select>
<br /><br /><br /><br />
<b>User Details</b><hr />
Username  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="input-loan" type="text" name="uname" placeholder="Username" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Password     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="input-loan" type="text" name="pass" placeholder="Password" /><br /><br /><br />
<input type="checkbox" />I accept all the terms and conditions of net banking declared by Universal Bank<br /><br />

<button class ="btn-login" onclick="return accept()">Proceed</button>
<br /><br /><br />
 </div>
</form>

</body>

</html>