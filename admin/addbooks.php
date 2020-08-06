<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addbooks.css">
    <title>Document</title>
</head>

<body>


    <div class="container">
  
        <div class="title">
            <h1> Add Book</h1>

        </div>
    </div>
    <div class="content">

        <form action="addbooksdb.php" method="POST" enctype="multipart/form-data">
            <label for="">Titulli: </label> <br>
            <input type="text" id="titulli" name="titulli" required>
            <label for="">Image: </label> <br>
            <input type="file" id="imagepath" name="imagepath" required>
            <label for="">Autori : </label> <br>
            <input type="text" id="autori" name="autori" required>
            <label for="">Cmimi: </label> <br>
            <input type="number" id="cmimi" name="cmimi" required>
            <input type="submit" id="submit" name="submit" value="submit" required>
        </form>
    </div>
    
</body>

</html>