<?php
session_start();
require "db.php";

if(isset($_GET['id'])){
    $idimg = $_GET['id']; 
    mysqli_query($connect," DELETE FROM `send_image` WHERE `id` = $idimg");
}
header("Location: userpanel.php");
?>