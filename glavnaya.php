<?php
session_start();
require "db.php";

$resultimage = mysqli_query($connect, "SELECT `img` FROM `send_image`");

$userid = $_SESSION['user']['userid'];
$username = $_SESSION['user']['username'];
$avatar = mysqli_query($connect, "SELECT `avatar` FROM `user` WHERE id = $userid");
$avatarka = mysqli_fetch_assoc($avatar);


if ($avatarka['avatar'] == null) {
    $avatarimg = "avatarka/avatarka.png";
} else {
    $avatarimg = $avatarka['avatar'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HabInterest - Хабинтерест</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="css/glavnaya.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body class="body-body-body">
    <!-- ШАПКА -->
    <header class="header headerlogin">
        <div class="header-container container">
            <div class="head-logo">
                <a href="glavnaya.php"><img src="image/logo.png" alt=""></a>
            </div>
            <div class="btn-logo">
                <div class="vipadmenu-block">
                    <img src="<?= $avatarimg ?>" alt="Профиль" class="avatarka">
                    <div class="vipadmenu">
                        <div>
                            <label for=""><?= $username ?></label>
                        </div>
                        <div>
                            <a href="userpanel.php">Профиль</a>
                        </div>
                        <div>
                            <a href="index.php">Выход</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="glavnaya-main container">
        <div class="containerfoto">
            <div class="login-main-pravo glavnaya-spisok-fotok">
                <?php foreach ($resultimage as $imgzametki) : ?>

                    <!-- <div class="login-main-pravo-image-block"> -->
                    <div class="l-m-p-b-i-img">
                        <a href="addzametki.php?id=<?= $imgzametki['id'] ?> ">
                            <img src="imgkorzina/zametki.png" alt="" class="imgkorzina">
                        </a>
                        <img src="<?php echo $imgzametki['img'] ?>" alt="" class="sama-fotka">
                    </div>
                    <!-- </div> -->
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/scripts.js"></script>

</html>