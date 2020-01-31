<?php include('server.php');
// if user is not logged in, they cannot access this page!!
if(empty($_SESSION['username'])){
	header('location:login.php');
}

?>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="style.css">
<title>User Registration
</title>
</head>

<body>

	
<div class="header">
<h2> Home Page</h2>
</div>
<div class="content">
<?php
if(isset($_SESSION['success'])){
	echo "WELCOME";
	
	
	echo $_SESSION['success'];
	unset($_SESSION['success']);
	
	
}

elseif(isset($_SESSION["username"])){
echo "Welcome";

}


?>
<a href="index.php?Logout='1'" style="color:red;">Logout</a>
</div> 
</body>
</html>