<?php
    require_once('../php/session_header.php');
    require_once("../services/managerService.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../managerAsset/JS/reservation.js"></script>
</head>
<body onload="reservationData()">
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
  <tr >
    <td colspan="3"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="empDetail.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr>
  <td width="30%">
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
	<td>
    <fieldset>
      <legend>Car Reservation Request</legend>
    		<table border="1" cellspacing="0" cellpadding="8" width="95%" align="center">
           <tr>
            <td>ID</td>
            <td>Reservation Date</td>
            <td>NID</td>
            <td>Customer Id</td>
            <td>Status</td>
            <td>Action</td>
           </tr>
           <tbody id="reservation">
             
           </tbody>
        </table> 
    </fieldset>
	</td>
	<tr>
		<td colspan="3" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>
           