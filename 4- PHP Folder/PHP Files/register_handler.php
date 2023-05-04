<?php

$username = $_POST["username"];
$password = $_POST["password"]; 
$passwordHashed = password_hash($password,PASSWORD_DEFAULT);

include "config.php";

$insertAdmins = "INSERT INTO createaccount(username,password) values(?,?)"; 

$stmt = mysqli_prepare($con,$insertAdmins);
mysqli_stmt_bind_param($stmt,"ss",$username,$passwordHashed);

$result = mysqli_stmt_execute($stmt);
if($result){
	
	header('Location: adminlogin.php');
	
}
else{
	echo "Error:".mysqli_stmt_error($stmt);
}
?>