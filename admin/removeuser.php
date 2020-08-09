<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="cssa/removeUser.css">
   <title>Remove Users</title>
</head>

<body>
   <?php 

include 'tomenua.php'
?>

   <div class="container">
      <div class="title">
         <h1> Remove Users</h1>

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
               <td><a href="../db/removeUserdb.php?ID=<?php echo $row['ID']?>">Remove</a></td>
            </tr>


            <?php
            }

         ?>

         </tbody>
      </table>
   </div>
</body>

</html>