<?php
    require_once('../php/session_header.php');
    require_once("../services/managerService.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
  <tr >
    <td colspan="2" ><h2>X-HOTEL</h2> 
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
	<td  width="80%">
    <fieldset>
      <legend>ACTIVITY</legend>
    	<form>
    		<table border="1" cellspacing="0" cellpadding="8" width="100%" align="center">
           <tr>
             <td>Activity</td>
             <td align="center">Detail</td>
             <td>Package</td>
           </tr>
           <?php  while($data = mysqli_fetch_assoc($result)){ ?>
           <tr>
             <td><?php echo $data['name'] ?></td>
             <td><?php echo $data['email'] ?></td>
             <td><?php echo $data['userType'] ?></td>
           </tr>
           <?php } ?>
           <tr>
             <td colspan="3" align="right">
               <input type="button" name="accept" value="Accept">
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