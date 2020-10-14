<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'null_value'){
			echo "Username/Password field can't left empty...";
		}

		if($_GET['error'] == 'invalid_user'){
			echo "Invalid username or Password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "You have to login first...";
		}

	}else if(isset($_GET['success'])){
		
		if($_GET['success'] == 'registration_done'){
			echo "Registration Done! Now you can login...";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		*{
			margin: 0; 
			padding: 0; 
			box-sizing: border-box;
		}

		body {
		background-image: url(../img/final4.jpg);
		background-repeat: no-repeat;
        background-size: 125%;	    
        }

        ul {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            opacity: 0.8;
        }
        form{
        	float: center;
        }
        
        li {
          float: left;
        }
        
        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 15px 30px;
          text-decoration: none;
        }
        #A{
        	float: right;
        }
        #D{
        	background-color: antiquewhite; 
        	position: absolute;
            margin-top: 45%;
            margin-left: 55%;
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px #888888;
            opacity: 0.8;
        }
        
        .active {
          background-color: #4CAF50;
        }	
	</style>
</head>
<body>
	<ul>
        <li><a href="../index.php">Home</a></li>
        <li style="float:right"><a class="active" href="login.php">Login</a></li>
        <li style="float:right"><a class="active" href="register.php">SignUp</a></li>
    </ul>

	<form action="../php/logCheck.php" method="post">
		<div id="D" style="box-shadow: ">
			Email<br>
			<input type="text" name="email" size="60%">
			<br>
			Password<br>
			<input type="password" name="password" size="60%">
			<br>
            <br>
		    <input type="submit" name="submit" value="Login">       <a id="A" href="../index.php">HOME</a>
		</div>	
	</form>
</body>
</html>