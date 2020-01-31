<?php include('server.php');?>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="style.css">
<title>User Registration
</title>
</head>

<body>
<form  action="login.php" method="post">
	<!--dispplay validation errors here-->
	<?php include('errors.php');?>
<div class="header">
<h2> Login</h2>
</div>
<div class="input-form">
<label>Username</label>
<input type="text" name="username">
</div>

<div class="input-form">
<label>Password</label>
<input type="password" name="password">
</div>

<div class="input-form">
<button type="submit" name="login" class="btn">Login</button>
</div>
<p> Not yet a member?
    <a href="register.php">Sign Up</a>
    
</p>
</form>
</body>
</html>