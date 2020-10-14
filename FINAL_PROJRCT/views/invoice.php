

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
          background-image: url('../img/2.jpg');
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
  <script type="text/javascript" src="../managerAsset/JS/invoice.js"></script>
</head>
<body>
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
      <div style="background-color: white;">
    <fieldset>
      <legend>INVOICE MANAGEMENT</legend><br>
      <div align="right">
        <input type="text" name="customerId" id="customerId" placeholder="Customer ID..." onkeyup="invoiceData()">
      </div>
      <br>
      <br>
        <table border="1" cellspacing="0" cellpadding="5" width="100%" >
           <tr>
            <td>ID</td>
             <td>Services</td>
             <td>Bill ($)</td>
             <td>Action</td>
           </tr>
           <tbody id="invoice">
             
           </tbody>
        </table>
    </fieldset>
        
      </div>
    

  </td>
    <tr style="background-color : white;">
        <td colspan="2" align="center">copyright@2017</td>
    </tr>
</table>

 

</body>
</html>