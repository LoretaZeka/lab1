
<?php 

include 'config.php';


if(isset($_POST['Submit'])){

    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    


    if(empty(trim($name))){
        header("location:register.php?InvalidForm");
    }
    else if(empty(trim($surname))){
        header("location:register.php?InvalidForm");
    }
 else if(empty(trim($email))){
        header("location:register.php?InvalidForm");
    }
    else if(empty(trim($username))){
        header("location:register.php?InvalidForm");
    }
    else if(empty(trim($phone))){
        header("location:register.php?InvalidForm");
    }
    else if(empty(trim($password))){
        header("location:register.php?InvalidForm");
    }
    else{
        $sql ="INSERT INTO users (firstname,lastname,email,phonenumber,username,password) values('$name','$surname','$email','$phone','$username','$password');";
        $db->query($sql);
        header("location:index.php");
    }

}else{
    echo "notworking";
}
?>