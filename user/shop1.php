<?php 
include '../db/config.php'
?>
<html>

    <link href="shop1.css" rel="stylesheet" >
    <body>
    <header>
    <nav>
    <ul class="nav_links">
        <li><a>Checkout</a</li>
         <li><a>Wishlist  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a> </li>
        
       
             </ul>
            <img class="logo"src="fotou/LogoMakr_7lK4DC.png">
            </nav>
           

            <div class="menu">
                <div class="menu-1">
            <div class="menu-2"> 
                <li><a href="indexu.php">Home</a></li>
            </div>
                <div class="menu-3">
                <li><a href="books.php">Books</a></li>
                </div>
                <div class="menu-5">
                <li><a href="shop1.php">Shop</a></li>
            </div>
                <div class="menu-4">
                <li><a href="../index.php">LogOut</a></li>
            </div>
            
            </div>
           
            </div>
        </header>
    <div class="g1">
        <div class="g">
                <div class=g2>
                <li> <a href="error.php">  Fantasy</a></li>
                
                </div>
                <div class=g2>
                <li> <a href="error.php">  Romance</a></li>
                </div>
                <div class=g2>
                <li> <a href="error.php">  History</a></li>
                </div>
                <div class=g2>
                <li> <a href="error.php">  Thrillers</a></li>
                </div>
                <div class=g2>
                <li> <a href="error.php">  Budgeting and Finance</a></li>
                </div>
                <div class=g2>
                <li> <a href="error.php">  Science fiction</a></li>
                </div>
                <div class=g2>
                <li> <a href="error.php">  Sale</a></li>
                </div>
                
               
     </div>
             <!-- <div class="gg">
            <div class="foto">
                 <img class="foto1"src="fotou/libra1.jpg" alt="foto1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 
                <img class="foto2"src="fotou/libra2.jpg" alt="foto2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="foto3"src="fotou/libra1.jpg" alt="foto3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="foto4"src="fotou/libra1.jpg" alt="foto4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="foto5"src="fotou/libra1.jpg" alt="foto5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
            </div>
            <div class="bb">
            <p>LibraI 8$</p>
            </div>
            <div class="bb">
            <p>LibraI 8$</p>
            </div>
            <div class="bb">
            <p>LibraI 8$</p>
            </div>
            <div class="bb">
            <p>LibraI 8$</p>
            </div>
            <div class="bb">
            <p>LibraI 8$</p>
            </div>
             <div class=titulii>
            <div class="foto">
                <img class="foto1"src="fotou/libra1.jpg" alt="foto1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="foto1"src="fotou/libra2.jpg" alt="foto1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="foto1"src="fotou/libra1.jpg" alt="foto1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="foto1"src="fotou/libra1.jpg" alt="foto1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="foto1"src="fotou/libra5.jpg" alt="foto1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               

            </div>  -->
     <div class="content">

        <?php


        $sql="SELECT * FROM books ORDER BY ID desc;";
        $results=$db->query($sql);

        while($row=mysqli_fetch_assoc($results)){
        
            ?>
            <div class="book">

                    <div id="titulli">
                        <p><?php echo $row['titulli'];?></p>
                    </div>
                    <div id="image"><img src="../<?php echo $row['imagepath'];?>" alt=""width="100px";></div>
                    <div id="autori">
                        <p><?php echo $row['autori'];?> </p>
                    </div> 
                    <div id="cmimi">
                    <p><?php echo $row['cmimi'];?> </p>
                    </div>
                
                <?php  } ?>
            </div>
    </div>
</div>

</body>
</html>