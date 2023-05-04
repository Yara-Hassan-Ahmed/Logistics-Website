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
            top:9%;
            font: 28px sans-serif ;
            color:white;
            
        }
        .form h1{
            position: relative;
            right:20%;

        }

    </style>
</head>
<body style="background-color: #587cb3; " >

    <div class="form">
        <h1>Choose article name to delete</h1>
        <form action="" method="post">
            <input type="text" name="name" list="articles" placeholder="Article Names">
            <datalist id="articles">

                    <?php 
                    $conn = mysqli_connect("localhost", "root", "", "oceanblue");
                    $select=$conn->query("SELECT name FROM article");
                    while($row=$select-> fetch_assoc()){?>
                    <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?>"</option>
                    <?php } ?>

                    <?php
                    
                        if(isset($_POST["submit"]))
                        {
                            $name = $_POST["name"];
                            mysqli_query($conn, "DELETE FROM article WHERE name='$name'");
                            if(mysqli_affected_rows($conn)>0)
                            {
                                echo
                                "
                                <script>
                                  alert('Successfully Deleted');
                                </script>
                                ";
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
                
                    



            </datalist>







            <button type="submit" name="submit" >Delete</button>


        </form>
        <button onclick=" window.location='Delete.php'">Back</button>

    </div>

    <script>


    </script>


    
</body>
</html>