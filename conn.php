<?php
$conn = mysqli_connect('localhost', 'root', '', 'login');


if(isset($_POST['register'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password_1 = $_POST['password'];


$sql = "INSERT INTO col (username, email, password) VALUES ('$username', '$email','$password_1')";

$result = mysqli_query($conn, $sql);

if($result == 1){
    $update = "Entered successfully";
}else{
    $update = "Error try again";
}


}

?>