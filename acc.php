<html>
    <link href="css/acc.css" rel="stylesheet" >
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"  ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
    <?php
            include 'topmenu.php';
        
 ?>
         
        
        <div class="login">
            
    

            <div class="containerss">
      <p> <br>
       LOG IN
      <br>
 </div>

 
            <div class="content">
                <div class="form">
                    <form action="#" method="POST" onsubmit="return validate()" >

                        <label for="">Username: </label>
                        <br>
                        <input type="text" name="Username">
                        <br>
                        <label for="">Password: </label>
                        <br>
                        <input type="Password" name="Password">
                        <br>

                        <input type="Submit" name="Submit" value="Log In" id="Submit">
                        
                        <li><a href="register.php">Dont have an account? Create one</a></li>
                </div>
            </div>
        </div>
    </div>
    <?php
            include 'footer.php';
        
 ?>
         

 
    </div>
    
    

</body>  </html>