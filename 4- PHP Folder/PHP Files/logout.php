<?php
  session_start();
  unset($_SESSION["loggedAdmin"]);
  header('Location: adminlogin.php');

?>