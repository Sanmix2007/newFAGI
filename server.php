<?php
session_start();
$username="";
$email="";
$errors = array();
//$errors=array();

$db = mysqli_connect('localhost', 'root', '', 'login');
if(isset($_POST['register'])){
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=   mysqli_real_escape_string($db,$_POST['email']);
	$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2=mysqli_real_escape_string($db,$_POST['password_2']);

	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($email)){
		array_push($errors,"Email is required");
	}
	if(empty($password_1)){
		array_push($errors,"Password is required");
	}
	if($password_1 !=$password_2){
		array_push($errors,"The two password do not match");
	}
	if(count($errors)==0){
		$password=md5($password_1);
		$sql="INSERT INTO col(username,email,password) 
		VALUES('$username','$email',
			'$password')";
		mysqli_query($db,$sql);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location:index.php'); //redirect to home page




	}
}
// log user in from login page
if(isset($_POST['login'])){
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
// ensure that form fields are filled properly

	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($password)){
		array_push($errors,"Password is required");
}
if (count($errors)==0){
	$password=md5($password);/// encrpt password
$query="SELECT * FROM col WHERE username='$username' AND password=$password";
$result=mysqli_query($db,$query);
//mysqli_num_rows($result)==1)
if(mysqli_num_rows()==$result){
	//log user in
	$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location:index.php'); //redirect to home page

}else{
	array_push($errors,"The  username/password combination is incorrect");
	// header('location:login.php');
}

}
}
// logout
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION["username"]);
	header('location:login.php');
}


?>