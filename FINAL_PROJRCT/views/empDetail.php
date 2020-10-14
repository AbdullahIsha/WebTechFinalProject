<?php
    require_once('../php/session_header.php');
    require_once("../services/managerService.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../managerAsset/JS/empdetail.js"></script>
</head>
<body onload="empDetailData()">
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
   <tr >
    <td colspan="2" width="900px"><h2>X-HOTEL</h2> 
      <ul align="right"> Logged in as
        <a href="empDetail.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>      
      </ul>
    </td>
  </tr>

  <tr height="300px">
  	<td>
		<ul>
			<li><a href="check_in_out.php"> Check IN/OUT </a></li>
      <li><a href="invoice.php"> Invoice Management </a></li>
      <li><a href="booking.php"> Bookings </a></li>
      <li><a href="order.php"> Order </a></li>
      <li><a href="cars.php"> Parking / Resurvations</a></li>
      <li><a href="complain.php"> Complains From Customer </a></li>
      <li><a href="manager_page.php">Home </a></li>
		</ul>
	</td>
	<td width="80%">
    <fieldset>
      <legend>Details</legend>
    	<form>
    		<table border="1" cellspacing="0" cellpadding="8" width="100%">
           <tr>
             <td>ID</td>
             <td>Balance</td>
             <td>Bonus</td>
             <td>Rating</td>
             <td>Role</td>
             <td>Salary</td>
           </tr>
           <tbody id="detail"></tbody>
        </table>      
    	</form>
    </fieldset>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>