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
            top:3%;
            font: 28px sans-serif ;
            color:white;
            
        }
        .form h1{
            position: relative;
            right:20%;

        }
	

    </style>
</head>
<body style="background-color: rgb(8, 48, 75);">

        <div class="form">
            <h1>Choose article name to update</h1>
            <form action="update2.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" list="articles" placeholder="Article Names">
            <datalist id="articles">

                    <?php 
                    $conn = mysqli_connect("localhost", "root", "", "oceanblue");
                    $select=$conn->query("SELECT name FROM article");
                    while($row=$select-> fetch_assoc()){?>
                    <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?>"</option>
                    <?php } ?>
                    </datalist>
                    <button type="submit" name="submit" >Search</button>

                    




            </form>

            <button onclick="b1()" >Back</button>



        </div>
        <script>
        function b1()
        {
            window.location="Update.php";
        }
    </script>



</body>
</html>