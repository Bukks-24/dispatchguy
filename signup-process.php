<?php
$mysqli = new mysqli("localhost","root","","dispatch");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$password= $_POST['password'];

$sql = "INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password_`) VALUES
        (NULL, '$fname', '$lname', '$email', '$password');";
$result = $mysqli->query($sql);

if($result){
	echo "Thank you for registering with us";
}else {
	echo "Please Try Again";
}
?>
