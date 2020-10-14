<?php
    require_once('../php/session_header.php');

    function itemNameTest(){
        if(isset($_POST['itemName'])){
            $itemName=$_POST['itemName'];
        if($itemName<A || $itemName<a || $itemName == ""){
          echo "Invalid!!";
        }
     }
    }

    function quantityTest(){
        if(isset($_POST['quantity'])){
            $quantity=$_POST['quantity'];
        if($quantity<1 || $quantity == ""){
          echo "Invalid!!";
        }
     }
    }

    function pictureTest(){
        if(isset($_POST['chefOrder'])){
            if(empty($_POST['picture'])){
                echo "Invalid!!";
          }
       }
    }


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../managerAsset/JS/cheff_order.js"></script>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
 <tr>
    <td colspan="2"><h2>Xcompany</h2> 
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
    <form action="../php/managerController.php" method="post" onsubmit="return validate()">
      <fieldset>
      <legend>Chef Order</legend>
      <table align="center">
        <tr>
          <td width="100px">Item Name</td>
          <td><input type="text" name="itemName" id="itemName" size="70px" onkeyup="removeritemName()"><?php itemNameTest();?></td>
          <td id="nmsg"></td>
          <td rowspan="3" width="180px"><img height="100px" width="180px" src="" id="img"></td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td><input type="text" name="quantity" id="quantity" size="70px" onkeyup="removerquantity()"><?php quantityTest();?></td>
          <td id="qmsg"></td>
        </tr>
        <tr>
          <td>Picture</td>
          <td><input type="file" id="file" name="picture" size="70px" onchange="ShowImg()" onclick="removerpicture()"></td>
          <td id="pmsg"></td>
        </tr>
        <tr><td colspan="4"><hr></td></tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td align="right"><input type="submit" name="chefOrder" value="Confirm"></td>
        </tr>
      </table>
    </fieldset>
    </form>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>