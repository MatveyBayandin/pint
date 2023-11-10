<?php
session_start();
require "db.php";


if(isset($_GET['id'])){
    $idimgzametki = $_GET['id']; 
    // mysqli_query($connect,"INSERT INTO `zametki_img`(`userid`, `idimg`) VALUES ('???','$idimgzametki')");
    
}

header("Location: glavnaya.php");


?>