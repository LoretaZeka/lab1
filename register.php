<html>
    <link href="register.css" rel="stylesheet" >
  
    
    <body>
    <?php
            include 'topmenu.php';
        
 ?>
        
        <div class="containerss">
            <p> <br>
             SIGN IN
            <br>
       </div>
      
             
                  <div class="content">
                      <div class="form">
                          <form action="registerU.php" method="POST">
                             <label for="">Name: </label>
                              <br>
                              <input type="text" name="name" required>
                              <br>
                              <label for="">Surname: </label>
                              <br>
                              <input type="text" name="surname" required>
                              <br>
                              <label for="">Email: </label>
                              <br>
                              <input type="email" name="email" required>
                              <br>
                              <label for="">Phone: </label>
                              <br>
                              <input type="text" name="phone" required>
                              <br>
                              <label for="">Username: </label>
                              <br>
                              <input type="text" name="username" required>
                              <br>
                              <label for="">Password: </label>
                              <br>
                              <input type="Password" name="password" required>
                              <br>
      
                              <input type="Submit" name="Submit" value="Sign Up" id="Submit" required>
      
                              <li><a href="acc.php">Already have an account? Log in</a></li>
                         </form>
                      </div>
                  </div>
              
      
         </div>
          <?php
            include 'footer.php';
        
 ?>
        


      
   </body>
   </html>