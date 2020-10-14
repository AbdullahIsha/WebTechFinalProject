<?php
    require_once('../php/session_header.php');
    require_once("../services/managerService.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../managerAsset/JS/feedback.js"></script/>
</head>
<body onload="feedbackData()">
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
  <tr>
    <td colspan="2"><h2>X-HOTEL</h2> 
      <ul align="right"> Logged in as
        <a href="empDetail.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr>
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
    <section align="right">
      <input type="text" name="search" placeholder="search" >
      <input type="button" name="search" value="search" >
      
    </section>
    
    <fieldset>
      <legend>Feedback From Customer</legend>
    	<form action="../php/feedbackcheck.php">
    		<table border="1" cellspacing="0" cellpadding="8" width="100%" align="center">
           <tr>
            <td>ID</td>
             <td>Rating</td>
             <td>Comments</td>
             <td>CustomerID</td>
           </tr>
           <tbody id="feedback"></tbody>
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