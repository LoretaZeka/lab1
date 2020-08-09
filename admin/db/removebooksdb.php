<?php 
    include '../db/config.php';


    if(isset($_POST['remove'])){

        
        $ID = $_POST['ID'];


        

            $sql="DELETE FROM books WHERE ID=$ID";
            $db->query($sql);

            header('Location:removebooks.php');
        

    }else{
        header('Location:removebooks.php?error');
    }