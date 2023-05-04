
<?php

$username = $_POST["username"];
$password = $_POST["password"];

include "config.php";

$login = "SELECT username,password FROM createaccount WHERE username = ? ";
$stmt = mysqli_prepare($con,$login);
mysqli_stmt_bind_param($stmt,"s",$username);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);


$count = mysqli_stmt_num_rows($stmt);

if($count == 1){
	mysqli_stmt_bind_result($stmt,$rowUsername,$rowPassword);
	mysqli_stmt_fetch($stmt);
	if (password_verify($password,$rowPassword)){
		session_start();
		$_SESSION["loggedAdmin"]= $username; 
		header('Location: Dashboard.php');
	
	}
}
	echo "Invalid username and password";


?>

