<html>
    <link href="register.css" rel="stylesheet" >
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"  ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
    <?php
            include 'topmenu.php';
        
 ?>
        
        <div class="containerss">
            <p> <br>
             SIGN IN
            <br>
       </div>
      
              <div class="bg-image">
                  <div class="content">
                      <div class="form">
                          <form action="database\addaccount.php" method="POST">
      
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
      
          </div>
          <?php
            include 'footer.php';
        
 ?>
        


      
   </body>
   </html>