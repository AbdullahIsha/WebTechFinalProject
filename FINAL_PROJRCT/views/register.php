<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

    function EmailTest(){
        if(isset($_GET['email'])){
            $email=$_GET['email'];
        if($email==""){
            echo "sorry!! can't be empty.";
        }
      }
    }
    function DOBTest(){
        $err="";

        $dd="";
        $mm="";
        $yy="";
    if (isset($_GET['date'])){
        $dd=(int)$_GET['date'];
            if ($dd>0 && $dd<=31){}
            else
            {
              $err="invalid";
            }
        }

    if (isset($_GET['month'])){
        $mm=(int)$_GET['month'];
            if ($mm>0 && $mm<=12){}
            else
            {
              $err="invalid";
            }
        }
    if (isset($_GET['year'])){
        $yy=(int)$_GET['year'];
            if ($yy>=1900 && $yy<=2016){}
            else
            {
              $err="invalid";
            }
          }

    if($err==""){
        echo $dd."<br>";
        echo $mm."<br>";
        echo $yy."<br>";
    }
    if ($err!=""){
        echo "invalid";
        }
    }

?>

<html>
<head>
    <title>Home</title>
    <script type="text/javascript" src="../managerAsset/JS/form.js"></script>
</head>
<body>
    <form name="myform" method="post" action="../php/regCheck.php" onsubmit="return val()">
        <table border="1" cellspacing="0" align="center">
            <tr>
                <td colspan="3" align="center" height="30%">
                </td>           
            </tr>
            <tr>
                <td  width="20%">Name
                </td>
                <td width="30px">
                    <input type="text" id="name" name="name" onkeyup="removername()" size="30px" height="100" width="100" >
                </td>
                <td width="5%" id="namemsg">
                </td>
            </tr>
            <tr>
                <td>Email
                </td>
                <td>
                    <input type="email" id="email" name="email" onkeyup="removeremail()" size="30px">
                    <?php EmailTest();?>
                </td>
                <td id="emailmsg">
                </td>
            </tr>
            
            <tr>
                <td>Date of Birth
                </td>
                <td>
                    <input type="text" id="day" name="day" onkeyup="removerdob()"size="5px">/
                    <input type="text" id="month" name="month" onkeyup="removerdob()"size="5px">/
                    <input type="text" id="year" name="year" onkeyup="removerdob()"size="5px">   <i>(dd/mm/yyyy)</i>
                    <?php DOBTest();?>
                </td>
                <td id="dobmsg">
                </td>
            </tr>
            <tr>
                <td>User Type
                </td>
                <td>
                    <select name="type" id="bg" onclick="removertype()">
                        <option></option>
                        <option>Manager</option>
                        <option>Staff</option>
                    </select>
                </td>
                <td id="bgmsg">
                </td>
            </tr>
            <tr>
                <td  width="20%">Phone
                </td>
                <td width="30px">
                    <input type="text" id="phone" name="phone" onkeyup="removerphone()" size="30px" height="100" width="100" >
                </td>
                <td width="5%" id="phonemsg">
                </td>
            </tr>
            <tr>
                <td  width="20%">Password
                </td>
                <td width="30px">
                    <input type="password" id="password" name="password" onkeyup="removerpassword()" size="30px" height="100" width="100" >
                </td>
                <td width="5%" id="passwordmsg">
                </td>
            </tr>
            <tr>
                <td  width="20%">Change Password
                </td>
                <td width="30px">
                    <input type="password" id="Cpassword" name="Cpassword" onkeyup="removerCpassword()" size="30px" height="100" width="100" >
                </td>
                <td width="5%" id="Cpasswordmsg">
                </td>
            </tr>
            <tr>
                <td>Photo
                </td>
                <td colspan="2">
                    <input type="file" id="file" name="picture" onclick="removerpicture()">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" height="30px" id="picmsg">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <a href="../index.php">HOME</a>
                    <input type="submit" name="submit" value="Submit"> 
            <input type="reset" name="" value="Clear"> 
                </td>
            </tr>
        </table>
    </form>
</body>