<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Form</title>

    <style>
        .form{
            position: absolute;
            left:35%;
            top:9%;
            font: 28px sans-serif ;
            color:white;
            
        }

    </style>
</head>
<body style="background-color: #587cb3;">

<?php



$conn = mysqli_connect("localhost", "root", "", "oceanblue");

if(isset($_POST["submit"])){
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
        $query = "INSERT INTO article VALUES('', '$name','$par','$newImageName')";
        mysqli_query($conn, $query);
        echo
        "
        <script>
          alert('Successfully Added');
        </script>
        ";
      }
    }
  }
  mysqli_close($conn);
  


?>


    <div class="form">
        <h1>New Article</h1>
        <form action="" method="post" enctype="multipart/form-data">

            <label>Aticle title</label>&nbsp;&nbsp;<input type="text" name="nam" id="nam"><br><br> 
            <label>Paragraph</label><br><br>&nbsp;&nbsp;<textarea name="par" id="par" cols="50" rows="10"></textarea> <br><br> 
            <label>Images</label>&nbsp;&nbsp;<input type="file" name="image" id="image" ><br><br> 
            <button type="submit" name="submit">Submit</button>
            &nbsp;&nbsp;
            <button type="reset" name="rest">Reset</button>



        </form>
            <button onclick="b1()" >Back</button>
    </div>


    <script>
        function b1()
        {
            window.location="Add.php";
        }
    </script>






    
</body>
</html>