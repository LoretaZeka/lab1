<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="removeUser.css">
   <title>Remove Users</title>
</head>

<body>
<header>
            <nav>
    <ul class="nav_links">
   
        <li><a>Wishlist  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a> </li>
        <img class="logo"src="LogoMakr_7lK4DC.png">
        
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
            <div class="menu-6">
                <li><a href="removeuser.php">Sign Out</a></li>
            </div>
            
         </div>
     </div>
        </header>

   <div class="container">
      <div class="title">
         <h1> Remove Users</h1>

      </div>
   </div>
   <div class="content">



      <table border="1">
         <thead>
            <tr>
               <th>Name</th>
               <th>Surname</th>
               <th>Email</th>
               <th>Phone Number</th>
               <th>Username</th>
               <th>Remove</th>
            </tr>
         </thead>

         <tbody>
            <?php
            include '../db/config.php';

            $sql = "SELECT * FROM users;";
            $result = $db->query($sql);

            while($row = mysqli_fetch_assoc($result)){
               ?>


            <tr>
               <td><?php echo $row['firstname']?></td>
               <td><?php echo $row['lastname']?></td>
               <td><?php echo $row['email']?></td>
               <td><?php echo $row['phonenumber']?></td>
               <td> <?php echo $row['username']?></td>
               <td><a href="removeUserdb.php?ID=<?php echo $row['ID']?>">Remove</a></td>
            </tr>


            <?php
            }

         ?>

         </tbody>
      </table>
   </div>
</body>
</html>