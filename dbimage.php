<?php
session_start();
require "db.php";
$path = 'uploadsimage/' . time() . $_FILES['send_image']['name'];

if(!move_uploaded_file($_FILES['send_image']['tmp_name'], $path)){
    echo"Ошибка";
}

$userid = $_SESSION['user']['userid'];

mysqli_query($connect, "INSERT INTO `send_image`(`img`, `userid`) values ('$path', '$userid')");



header("Location:userpanel.php");


?>