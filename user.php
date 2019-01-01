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
<div class="sticky">
<table align="left" style="padding-top:8px;">
<tr><td class="title-main"><img src="logo.png" height="30" />Universal Bank</td><td>&nbsp;</td><td class="title-tag">MADE FOR EVERYONE</td></tr>
</table> 
<table cellspacing="4px" align="right" style="padding-top:8px;">
<tr><td></td></tr><tr><td></td></tr>
<tr>

<td ><a class="btn-top" href="aboutus.php">&nbsp;About US</a></td>
<td><a href="scripts/logOut.php"><button class="btn-login btn-top" onclick="return logout()">logout</button></a></td>
<td></td>
</tr>
</table>
</div>
<br /><br /><br /><br />
<div>
<center>
<?php
session_start();
	echo "<h1><b>Welcome <u>".$_SESSION['nowUser']."</u></b>!</h1>";
?>
</center><br />
<section style="border:grey solid 1px ">
	
<center><h1>Make a transaction<h1></center>

<form medthod="post" action="scripts/makeTransaction.php">
Enter a valid username<input type = "text" name="to"/><br/><br/>
Transaction Amount<input type = "text" name="amnt"/><br/><br/br>
<input type= "Submit" value="make transaction" style="width:300px;height:40px"/>
</section>
</form>

<div>
<h1><center>Your Transactions</center></h1>
<div style="margin-left:10%;margin-right:10%">
<table style="border:1px solid black;width:100%;padding:5px 5px 5px 5px;">
<thead style=" padding:5px 5px 5px 5px">
<tr>

<td><b>Sno</b></td>
<td><b>Transactions</b></td>
<td><b>Amount</b></td>

</tr>
</thead>

<tbody>
     <?php

include "scripts/dbConnect.php";
$session = $_SESSION['nowUser'];
//echo $_SESSION['nowUser'];
$sql = "SELECT * FROM `$session`";
$query = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query)){
	echo '<tr>
	
	<td>'.$row['ID'].'</td>
	<td>'.$row['Transactions'].'</td>
	
	<td>'.$row['Amount'].'</td>
</tr>';
}
     ?>
</tbody>

</table>
</div>
</div>
</body>


</html>
