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
<b>Get Instant Approval</b>
</div>
<br />
<form style="margin:0px 40px 0px 40px;" action="loan_application.php" method="post">
<div style="padding-left:40px;padding-right:40px;background-color:white;box-shadow:rgba(0,0,0,0.1) 5px 5px;border:solid rgba(0,0,0,0.1) 1px;">

<br /><br />
<b style="letter-spacing:1px;">LOAN PURPOSE</b><hr />
Choose The Reasone Of The Loan &nbsp;  
<select class="input-loan">
	<option>Choose The Loan Type</option>
	<option>1. Personal Loan</option>
	<option>2. Vehical Loan</option>
	<option>3. Home Loan</option>	
</select>
<br /><br /><br /><br />
<b>RELATIONSHIP WITH BANK</b><hr />
Account Number  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="input-loan" type="text" name="ac_no" placeholder="Account Number" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Phone Number     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="input-loan" type="text" name="ph_no" placeholder="Phone Number" /><br /><br /><br />
<input type="checkbox" />I hereby authorize Universal Bank and/or its representatives to call me, email me, or SMS me with reference to my loan application. This consent will supersede any registration for any Do Not Call (DNC) / National Do Not Call (NDNC)<br /><br />
<input type="submit" class="btn-login" value="Proceed" />
<br /><br /><br />
 </div>
</form>

</body>
</html>