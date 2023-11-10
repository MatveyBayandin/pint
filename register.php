<?php
    require "db.php";


    $login = $_POST['matvey_r_1'];
    $password = $_POST['matvey_r_2'];
    $password2 = $_POST['matvey_r_3'];
    $email = $_POST['matvey_r_4'];
    $nameBool = true;
    
    $NameFromBD = mysqli_query($connect,"SELECT `login` FROM `user`");
    
    // $zapros = $pdo->query("select login from user");
    // $NameFromBD = $zapros->fetchAll();


    foreach($NameFromBD as $NamBD){
        if($login == $NamBD['login']){
            $nameBool = false;
            echo "данное имя уже используется";
        }
    }

    if( $nameBool == true && $password == $password2){
        mysqli_query($connect, "INSERT INTO user(`login`, `password`, `email`) VALUES('$login', '$password', '$email')");
       
    }
    else{
        echo "пароли не совпадают";
    }

    header("Location:index.php");

?>