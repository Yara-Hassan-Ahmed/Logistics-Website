<?php
$con = mysqli_connect("localhost","root","")or die("Error:cannot connect to the server");
$db = mysqli_select_db($con,"registration")or die("Error:cannot connect to the database");
?>