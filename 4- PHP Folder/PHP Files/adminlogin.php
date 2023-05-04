 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styleadmin.css">
    <title>Admin Login</title>
</head>
<body>
    <style>
		body {
		  padding: 0px;
		  background-color: white;
		  color: black;
		}
		
		.dark-mode {
		  background-color: rgb(59, 59, 59);
		  color: white;
		}
		input[type=submit] {
		
		position: relative;
		height: 60px;
		width: 200px;
		display: inline-block;
		background: #fff;
		margin: 0 20px;
		text-decoration: none;
		color: #fff;
		line-height: 60px;
		font-size: 18px;
		text-transform: uppercase;
		letter-spacing: 1px;
		font-weight: 500;
		border-radius: 30px;
		overflow: hidden;
		box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.23);
		background: linear-gradient(90deg,#0163c8,#55e7fc);	
}
.btn{
  position: relative;
  background-color: #304d63;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  border-radius: 3px;
  overflow: hidden;
  cursor: pointer;
  left: 52em;
}

		</style>
		
		

   <form onsubmit = "return validation()" method="post" name = "logForm" action="login_handler.php">

		<div class = "header"> 
		<button class = "btn" onclick="myFunction2()">Dark mode</button>
	
		<script>
		function myFunction2() {
		   var element = document.body;
		   element.classList.toggle("dark-mode");
		   
		}
		</script>
			<img src = "Oceanblue_logo.png" class ="center">
		</div>
		<br><br><br><br>
		<div class = "text">
			<label na = "username"><b>Username</b></label>
			
			<input type = "text" onfocus = "myFunction(this)" placeholder = "Enter Your Username" name ="username" required><br>
			
			<label na = "password"><b>Password</b></label>
			
			<input type = "password" onfocus = "myFunction(this)" placeholder = "Enter Your Password" name ="password" required>
			
			<br>
			
			<a href = #><input type="submit" value="Login"></a>
			

			
			
		</div>

	</form>
	<script src="javascriptlogin.js"></script>
</body>
</html>