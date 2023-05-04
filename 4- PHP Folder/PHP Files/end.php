<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



$conn = mysqli_connect("localhost", "root", "", "oceanblue");

if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $name = $_POST["nam"];
    $par = $_POST["par"];
    if($_FILES["image"]["error"] == 4){
      echo
      "<script> alert('Image Does Not Exist'); </script>"
      ;
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));

      if ( !in_array($imageExtension, $validImageExtension) ){
        echo
        "
        <script>
          alert('Invalid Image Extension');
        </script>
        ";
      }
      else if($fileSize > 1000000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
        </script>
        ";
      }
      else{
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;
  
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        // $query = "INSERT INTO article VALUES('', '$name','$par','$newImageName')";
        $query="UPDATE article SET name='$name',par='$par',img='$newImageName' WHERE id='$id'";
        mysqli_query($conn, $query);
        echo
        "
        <script>
          alert('Successfully Updated');
        </script>
        ";
      }
    }
  }
  mysqli_close($conn);
  echo
  "
  <script>
    window.location='artice_update.php'
  </script>
  ";
  


?>
</body>
</html>