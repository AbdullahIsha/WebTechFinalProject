<!DOCTYPE html>
<html>
<head>
<style>
	body {
		background-image: url(img/final1.jpg);
		background-repeat: no-repeat;
    background-size: 125%;
    opacity: 0.8;
	}

    ul {
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
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
    
    .active {
      background-color: #4CAF50;
    }
    a:hover{
      background-color: green;
    }
</style>
</head>
<body>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li style="float:right"><a class="active" href="views/login.php">Login</a></li>
  <li style="float:right"><a class="active" href="views/register.php">SignUp</a></li>
  <li style="float:right"><a class="active" href="views/cv_page.php">CV</a></li>
</ul>

</body>
</html>