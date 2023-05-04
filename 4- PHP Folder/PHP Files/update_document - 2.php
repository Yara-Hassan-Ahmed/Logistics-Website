<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            position: absolute;
            left:35%;
      
            font: 28px sans-serif ;
            color:white;
            
        }
        .form h1{
            position: relative;
            right:20%;

        }

    </style>
</head>
<body style="background-color: #587cb3;">
<div class="form">

            <?php
            
                if(isset($_POST["submit"]))
                {
                    $conn = mysqli_connect("localhost", "root", "", "oceanblue");
                    $name = $_POST["name"];
                    $res=mysqli_query($conn,"SELECT * FROM document WHERE name='$name'");
                    if(mysqli_affected_rows($conn)>0)
                    {
                        while($row=mysqli_fetch_array($res))
                        {?>
                                <h1>Update Article</h1>
                                <form action="end2.php" method="post" enctype="multipart/form-data">
                                <label>ID</label>&nbsp;&nbsp;<input type="text" name="id" id="id" value="<?php echo $row['id']?>" readonly><br><br> 
                                <label>Aticle title</label>&nbsp;&nbsp;<input type="text" name="nam" id="nam" value="<?php echo $row['name']?>"><br><br> 
                                <label>Paragraph</label><br><br>&nbsp;&nbsp;<textarea name="par" id="par" cols="50" rows="10" value=""><?php echo $row['par']?></textarea> <br><br> 
                                <label>Images</label>&nbsp;&nbsp;<input type="file" name="image" id="image" >&nbsp;
                                <?php echo "<embed src='img/".$row['doc']."' style='width:300px; height: 300px; position :relative; left:30px;'>"; ?>
                                <br> 
                                <button type="submit" name="submit">Update</button>
                                &nbsp;&nbsp;
                                <button type="reset" name="rest">Reset</button>
    
                         <?php       
                        }
    
                    }
                    else
                    {
                        echo
                        "
                        <script>
                          alert('Article not found');
                        </script>
                        ";                                
                    }

                }

            ?>
            






        </form>
            <button onclick="b()" >Back</button>
    </div>

    <script>
        function b()
        {
            window.location="artice_update.php";
        }
    </script>
    
</body>
</html>