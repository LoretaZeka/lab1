<?php
include '../db/config.php';

    $ID = $_GET['ID'];

    $sql = "DELETE FROM users WHERE ID = $ID;";
    $db->query($sql);

    header("location: removeuser.php");