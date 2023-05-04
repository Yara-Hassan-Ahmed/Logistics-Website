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
</style>
</head>
<body style="background-color: rgb(8, 48, 75);">

  <h1 style="font-size: 5ex; position: relative; left: 38ex; color: rgb(255, 255, 255); text-decoration: underline aqua;">Delete Content</h1>

<button class="button" onclick="b1()">Delete article</button>
<br>
<br>
<button class="button" onclick="b2()">Delete documents</button>
<br>
<br>
<button class="button" onclick="b3()">Back</button>

<script>
  function b1()
  {
    window.location="article_delete.php";

  }
  function b2()
  {
    window.location="document_delete.php";

  }
   
  function b3()
  {
    window.location="Dashboard.php";

  }
</script>


</body>
</html>
