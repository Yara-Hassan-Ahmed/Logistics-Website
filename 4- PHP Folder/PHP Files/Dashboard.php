<?php

session_start();
if(!isset($_SESSION["loggedAdmin"])){
	header('Location: adminlogin.php');
}



?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.button {
  position: relative;
  background-color: #304d63;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  padding: 20px;
  width: 500px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  text-decoration: none;
  border-radius: 30px;
  overflow: hidden;
  cursor: pointer;
  left: 20em;
  top: 7em;
}

.button:after {
  content: "";
  background: #2e3042;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px!important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
a{
	position: relative;
  background-color: #304d63;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  border-radius: 3px;
  overflow: hidden;
  cursor: pointer;
    left: 53.5em;


}
</style>
</head>

<body style="background-color:  rgb(8, 48, 75);">
	<a href = "logout.php">Logout</p></a>

  <h1 style="font-size: 7ex; position: relative; text-align:center; top: 2em; color: rgb(255, 255, 255); ">Dashboard</h1>


<button class="button" onclick="b1()">Add new content</button>
<br>
<br>
<button class="button" onclick="b2()" >Update content</button>
<br>
<br>
<button class="button" onclick="b3()">Delete content</button>


<script>
    function b1()
    {
        window.location="Add.php";
    }
    function b2()
    {
        window.location="Update.php";
    }
    function b3()
    {
        window.location="Delete.php";
    }
    
</script>

</body>
</html>
