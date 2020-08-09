<?php 
    include '../db/config.php';


    if(isset($_POST['remove'])){

        $ID = $_POST['ID'];
        $titulli = $_POST['titulli'];
        $autori = $_POST['autori'];
        $cmimi = $_POST['cmimi'];
    
        $imagepath = $_FILES['imagepath'] ['name'];
        $finaldestination = 'pictures/'.$imagepath;
    
        if(empty($imagepath)){
            $finaldestination = $_POST['oldimagepath'];
        }

  $sql="UPDATE books SET titulli ='$titulli', imagepath = '$finaldestination', autori = '$autori' ,cmimi=$cmimi WHERE ID = $ID;";
        $db->query($sql);

        header('Location:./editBooks.php?super');
        

    }else{
        header('Location:./editBooks.php?error');
    }
    
?>