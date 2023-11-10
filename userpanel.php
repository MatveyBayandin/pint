<?php
session_start();
require "db.php";


$userid = $_SESSION['user']['userid'];
$resultimage = mysqli_query($connect, "SELECT * FROM `send_image` WHERE userid = $userid");
$userimage = mysqli_fetch_assoc($resultimage);
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HabInterest - Хабинтерест</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/stylelogin.css">

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

<body class="loginbody">
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
                            <a href="glavnaya.php">Главная</a>
                        </div>
                        <div>
                            <a href="" class="smenaavatarki-sm">Сменить аватарку</a>
                        </div>
                        <div>
                            <a href="index.php">Выход</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="login-main container">
        <div class="login-main-levo">
            <div>
                <input type="submit" value="Добавить картинку" class="login-main-levo-b1">
                <input type="submit" value="Посмотреть сохранённые картинки" class="login-main-levo-b2">
            </div>
        </div>
        <div class="login-main-pravo ">
            <?php foreach ($resultimage as $imgaa) : ?>

                <!-- <div class="login-main-pravo-image-block"> -->
                <div class="l-m-p-b-i-img">
                    <a href="deletefoto.php?id=<?= $imgaa['id'] ?> "><img src="imgkorzina/korzina.png" alt="" class="imgkorzina"> </a>
                    <img src="<?php echo $imgaa['img'] ?>" alt="" class="sama-fotka">

                </div>
                <!-- </div> -->
            <?php endforeach; ?>
        </div>
    </main>
    </div>
    <div class="popup-bg popup-load-image">
        <div class="popup popup-reg">
            <img class="close-popup-load-image" src="image/krest.png" alt="">
            <form action="dbimage.php" method="POST" id="image_b" enctype="multipart/form-data">
                <label class="input-file">
                    <input type="file" name="send_image">
                    <span class="input-file-btn">Выберите файл</span>
                    <span class="input-file-text">Максимум 10мб</span>
                </label>
                <input type="submit" value="Добавить фото" name="send_image-b" class="input-file-btn2">
            </form>
        </div>
    </div>
    <div class="popup-bg popup-add-avatar">
        <div class="popup popup-reg">
            <img class="close-popup-add-avatar" src="image/krest.png" alt="">
            <form action="dbavatarka.php" method="POST" id="image_b" enctype="multipart/form-data">
                <label class="input-file">
                    <input type="file" name="send_image">
                    <span class="input-file-btn">Выберите файл</span>
                    <span class="input-file-text">Максимум 10мб</span>
                </label>
                <input type="submit" value="Добавить фото" name="send_image-b" class="input-file-btn2">
            </form>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/scripts.js"></script>

</html>