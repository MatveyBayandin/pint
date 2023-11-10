<?php
session_start();
require "db.php";

$login = $_POST['matvey_l_1'];
$password = $_POST['matvey_l_2'];



$NameFromBD = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
// $NameFromBD = $zaproslog->fetchAll(PDO::FETCH_COLUMN);

if (mysqli_num_rows($NameFromBD) > 0) {

    $user = mysqli_fetch_assoc($NameFromBD);
    $_SESSION['user'] = [
        "userid" => $user['id'],
        "username" => $user['login']
    ];
    header("Location:userpanel.php");
    
} else {
    header("Location:index.php");
}


?>