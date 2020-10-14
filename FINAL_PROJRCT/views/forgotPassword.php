
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
  <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <h2 align="right">
        <a href="home.php">Home</a> ||
        <a href="login.php">Login</a> ||
        <a href="registration.php">Registration</a> ||
        <a href="cv.php"> Apply For CV</a>
      </h2>
    </td>
  </tr>

  <tr>
    <td width="50%">
        <ul>
            <img src="hotel4.jpg" height="100%" width="100%">
        </ul>
    </td>
    <td width="50%">
        <fieldset>
            <legend><b>CHANGE PASSWORD</b></legend>
            <form method="post">
                <table>
                    <tr>
                        <td><font size="3">Current Password</font></td>
                        <td>:</td>
                        <td><input type="password" name="pass" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><font size="3" color="green">New Password</font></td>
                        <td>:</td>
                        <td><input type="password" name="newpass" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><font size="3" color="red">Retype New Password</font></td>
                        <td>:</td>
                        <td><input type="password" name="conpass" /></td>
                        <td></td>
                    </tr>
                </table>
                <hr />
                <input type="submit" name="submit" value="Submit" />
            </form>
        </fieldset>
    </td>
    <tr>
        <td colspan="2" align="center">copyright@2017</td>
    </tr>
</table>

</body>
</html>