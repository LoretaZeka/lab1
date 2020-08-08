<?php
    include '../db\config.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editbooks.css">
    <title>Document</title>
</head>

<body>
<?php 

include 'tomenua.php'
?>

           <div class="container">
           <div class="content">

<?php

    $sql="SELECT * FROM books ORDER BY ID desc;";
    $results=$db->query($sql);

    while($row=mysqli_fetch_assoc($results)){
    ?>
          
        <div class="book">
        <form action="editbooksdb.php" method="POST" enctype="multipart/form-data">
        <label for="">Titulli: </label> <br>
        <input type="text" name="titulli" id="titulli" value="<?php echo $row['titulli'] ?>"><br>
        <label for="">FOTO: </label> <br>
        <input type="file" id="imagepath" name="imagepath"> <br>
        <img id="image" src="<?php echo $row['imagepath']?>" alt=""><br>
        <input type="text" value="<?php echo $row['imagepath'] ?>" style="display: none;" name="oldimagepath">
        <input type="number" value="<?php echo $row['ID'] ?>" style="display: none;" name="ID">
        <label for="">AUTORI: </label> <br>
        <input type="text" name="autori" id="autori" value="<?php echo $row['autori'] ?>"><br>
        <label for="">Cmimi: </label> <br>
        <input type="number" name="cmimi"  value="<?php echo $row['cmimi'] ?>"><br>

        <input type="submit" name="remove" id="remove" value="Save">
        </form>
         
        </div>
        <?php  } ?>
    </div>
            </div>
         
</body>
</html>