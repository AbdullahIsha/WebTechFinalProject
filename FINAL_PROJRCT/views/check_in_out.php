<?php
  require_once('../php/session_header.php');
  if (isset($_GET['error'])) {
    
    if($_GET['error'] == 'db_error'){
      echo "Something went wrong...please try again";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../managerAsset/JS/checkInOut.js"></script>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
 <tr >
    <td colspan="2" ><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="empDetail.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr >
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
	<td width="80%%">
    <fieldset>
      <legend>CHECK IN/OUT</legend>
    	<form action="../php/managerController.php" method="post">
    		<table border="0" cellspacing="0" cellpadding="5" width="100%" align="center">
           <tr>
             <td width="30%" align="center">Name</td>
             <td><input type="text" name="name" size="90%%"></td>
           </tr>
           <tr>
             <td align="center">NID</td>
             <td><input type="text" name="nid" size="90%%"></td>
           </tr>
           <tr>
             <td align="center">Check-IN Time</td>
             <td><input type="text" name="inTime" size="90%%"></td>
           </tr>
           <tr>
             <td align="center">Check-OUT Time</td>
             <td><input type="text" name="outTime" size="90%%" value="23:00"></td>
           </tr>
           <tr>
           <td colspan="2"><hr></td>
           </tr>
           <tr>
             <td colspan="2" align="right">
               <input type="submit" name="checkeIn" value="Checked IN">
             </td>
           </tr>
           <tr>
           <td colspan="2"><hr></td>
           </tr>
           <tr>
           <td colspan="2"><hr></td>
           </tr>
            <tr>
             <td colspan="2" align="right">
              <input type="text" name="search" id="search" placeholder="Name..."  onkeyup="checkInOutData()"> 
             </td>
           </tr>
           <tr>
             <td colspan="2">
              <div style="overflow: scroll;">
                <table border="1" width="100%">
                 <tr>
                  <td>ID</td>
                   <td>name</td>
                   <td>nid</td>
                   <td>checkInTime</td>
                   <td>checkOutTime</td>
                   <td>status</td>
                   <td>Action</td>
                 </tr>
                 <tbody id="showCheckIn"></tbody>
              </table>
              </div>
             </td>
           </tr>
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