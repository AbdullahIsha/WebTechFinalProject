<?php
    require_once('../php/session_header.php');
    require_once("../services/managerService.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
      *{
      margin: 0;
    box-sizing: border-box;
    padding: 0;    
      }
      #ber{
          background-color: #333;
          margin: 0;
          padding: 0;
      }
      body{
          opacity: 0.8;
          background-image: url('../img/1.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
      }
      .nav{
      text-decoration: none;
      background-color: #008080;    
      display: block;
    color: white;
    text-align: center;
    padding: 32px 50px;
    
      }
      #sber{
          background-color: #333;
          opacity: 0.8;
      }
      .nav1{
          text-decoration: none;    
          display: block;
        color: white;
        text-align: center;
        padding: 5px 48px;
      }
      a:hover{
          background-color:#008B8B;
      }
  </style>
  <script type="text/javascript" src="../managerAsset/JS/booking.js"></script>
</head>
<body onload="bookingData()">
  <table>
  <tr >
    <td colspan="2" width="100%" height="30px" id="ber">
        <div style="background-color: #008080; padding: 10px 46px; float: left;">
            <h1>HOTEL</h1>
            <h2>Management</h2>
        </div>
        <a class="nav" style="float: right;" href="empDetail.php"><?=$_SESSION['name']?></a>
        <a class="nav" style="float: right;" href="../php/logout.php">Logout</a>
    </td>
  </tr>

 

  <tr>
      <td height="803px" width="18%" align="center" id="sber">
        <ul id="nav1">
          <li><a class="nav1"href="check_in_out.php"> Check IN/OUT </a></li>
          <li><a class="nav1" href="invoice.php"> Invoice Management </a></li>
          <li><a class="nav1" href="booking.php"> Bookings </a></li>
          <li><a class="nav1" href="order.php"> Order </a></li>
          <li><a class="nav1"href="cars.php"> Parking / Resurvations</a></li>
          <li><a class="nav1" href="complain.php"> Complains From Customer </a></li>
          <li><a class="nav1"href="manager_page.php">Home </a></li>
        </ul>
    </td>
    <td width="80%" >
      <a href="extend_booking.php" id="MM" style="background-color: green;">Extend Booking </a>
      <div style="background-color: white;">

    
    <fieldset>
      <legend>BOOKING</legend>
      <form method="post">
        <table border="1" cellspacing="0" cellpadding="8" width="100%" align="center">
           <tr>
            <td>ID</td>
             <td>Arrival Time</td>
             <td>Departure Time</td>
             <td>Pakage</td>
             <td>Status</td>
             <td>Action</td>
           </tr>
           <tbody id="booking">
             
           </tbody>
        </table> 

      </form>
    </fieldset>
        
      </div>
    

  </td>
    <tr style="background-color : white;">
        <td colspan="2" align="center">copyright@2017</td>
    </tr>
</table>

 

</body>
</html>