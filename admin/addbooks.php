<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addbooks.css">
    <title>Document</title>
</head>

<body>

<header>
            <nav>
    <ul class="nav_links">
   
        <li><a>Wishlist  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a> </li>
       
        <img class="logoo"src="LogoMakr_7lK4DC.png">
             </ul>
             
            
            </nav>
           

            
    <div class="menu">
   
        <div class="menu-1">
            <div class="menu-2"> 
                <li><a href="indexa.php">Home</a></li>
            </div>
              
            <div class="menu-3">
                <li><a href="addbooks.php">Add Books</a></li>
                
            </div>
                
            <div class="menu-4">
                <li><a href="editbooks.php">Edit Books</a></li>
            </div>
            <div class="menu-5">
                <li><a href="removeuser.php">RemoveUser</a></li>
            </div>
            <div class="menu-5">
                <li><a href="removeuser.php">Sign Out</a></li>
            </div>
            
         </div>
     </div>
        </header>
    <div class="container">
  
        <div class="title">
            <h1> Add Book</h1>

        </div>
    </div>
    <div class="content">

        <form action="addbooksdb.php" method="POST" enctype="multipart/form-data">
            <label for="">Titulli: </label> <br>
            <input type="text" id="titulli" name="titulli" required>
            <br>
            <label for="">Image: </label>
             <br>
            <input type="file" id="imagepath" name="imagepath" required>
            <br>
            <label for="">Autori : </label> 
            <br>
            <input type="text" id="autori" name="autori" required>
            <br>
            <label for="">Cmimi: </label> <br>
            <input type="number" id="cmimi" name="cmimi" required>
            <br>
            <input type="submit" id="submit" name="submit" value="submit" required>
        </form>
    </div>
    
</body>

</html>