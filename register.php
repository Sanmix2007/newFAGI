
<?php include('server.php');?>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="style.css">
<title>User Registration
</title>
</head>

<body>


<div class="header">
<h2> Register</h2>
</div>
<form  action="register.php" method="post">
	<!--dispplay validation errors here-->
	<?php include('errors.php');?>
<div class="input-form">
<label>Username</label>
<input type="text" name="username" value="<?php echo $username;?>" >
</div>
<div class="input-form">
<label>Email</label>
<input type="text" name="email" value="<?php echo $email;?>" >
</div>
<div class="input-form">
<label>Password</label>
<input type="password" name="password_1" >
</div>
<div class="input-form">
<label>Confirm Password</label>
<input type="password" name="password_2">
</div>


<div class="input-form">
<button type="submit" name="register" class="btn">Register</button>
</div>
<p> Already a member?
    <a href="login.php">Sign In</a>
    
</p>
</form>
</body>
</html>