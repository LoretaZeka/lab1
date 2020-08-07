<?php
$db = new mysqli('localhost','root', '', 'useraccounts');

if($db->connect_error){
    echo "lidhja  nuk eshte mir";

}
?>