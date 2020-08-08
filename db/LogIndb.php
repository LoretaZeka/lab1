<?php


Session_start();
require "config.php";

    if (isset($_POST['submit'])) {
        //Preventing SQL injections
        $username = $db->real_escape_string($_POST['username']);
        $password = $db->real_escape_string($_POST['password']);

        if (empty(trim($username))) {
            header('Location:..\acc.php');
        } else if (empty(trim($password))) {
                header('Location:..\acc.php');
        } else{

                $sql = "SELECT * FROM users WHERE username = '$username';";
                $results = $db->query($sql);
                $number = mysqli_num_rows($results);


                if ($number == 1) {
                    $row = mysqli_fetch_array($results);
                    // $row llogaritet sikur celes per me verifiku password-in e dhene me ate te ruajtur ne db
                    //password verify verifikon se passwordi i dhene a perdoret si celes per hashed passwordin
                  //  if (password_verify("$password", $row['password'])) {

                        //krijimi nje sesioni dhe marrja nga databaza qe te identifikohet current loged in user
                        $_SESSION['ID'] = $row['ID'];
                        $_SESSION['firstname'] = $row['name'];
                        $_SESSION['lastname'] = $row['surname'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['phonenumber'] = $row['phone'];
                        $_SESSION['username'] = $row['username']; 
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['admin'] = $row['admin'];

                        if($_SESSION['admin'] == '1'){
                            header("location:../admin/indexa.php");
                        }else{
                            header("location:../user/indexu.php");  
                       
                        }

                      /*  
                    } else {
                        header("location:..\acc.php?pwincorrect");
                 }*/
                }
                 else {
                    header("location:..\acc.php");
                }

            }

    } else{
        header('Location:..\acc.php');
    }
        
?>