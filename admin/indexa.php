<?php
    include '../db/config.php';

?>

<html>
    <link href="css/indexx.css" rel="stylesheet" >
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"  ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
        <header>
            <nav>
    <ul class="nav_links">
        <li><a><div class="logout"> <button class="logOut" onclick="window.location.href='LogOut.php'">Log Out</button></div></a</li>
         <li><a>Wishlist  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a> </li>
      
       
             </ul>
             <h1>ADMIN</h1>
            <img class="logo"src="../LogoMakr_7lK4DC.png">
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
           
            
        </header>

          </body>
          </html>