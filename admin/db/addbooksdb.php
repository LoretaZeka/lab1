<?php 


include '../db/config.php';

if(isset($_POST['submit'])){


    $titulli = $_POST['titulli'];
    $autori = $_POST['autori'];
    $cmimi = $_POST['cmimi'];

    $imagepath = $_FILES['imagepath'] ['name']; //emrin e file prej qatij pathi
    $filetmpname = $_FILES['imagepath']['tmp_name']; //vendodhja momentale

    $finaldestination = 'foto/'.$imagepath;


    if(move_uploaded_file($filetmpname, $finaldestination)){


        $sql="INSERT INTO books (titulli,imagepath,autori,cmimi) values ('$titulli', '$finaldestination', '$autori',$cmimi);";
             $db->query($sql);
     
             header('Location:./addbooks.php');
         }
         else{
         header('Location:./addbooks.php?error');
         }
     
    
}