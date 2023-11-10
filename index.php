<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HabInterest - Хабинтерест</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">

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

<body>
    <div class="page">
        <!-- Шапка -->
        <header class="header">
            <div class="header-container container">
                <div class="head-logo">
                    <a href="index.php"><img src="image/logo.png" alt=""></a>
                </div>
                <div class="btn-logo">
                    <a href="#" class="open-popup-login open-login-diz">Войти</a>
                    <a href="#" class="open-popup-reg open-reg-diz">Регистрация</a>
                </div>
            </div>
        </header>
        <main class="glavnayastranica fullscreen">
            <div class="glavnayastranica-container container">
                <div class="main-levo">
                    <div class="main-fig">
                        <div class="fig1 fig_style"><img src="image/щ1.jpg" alt=""></div>
                        <div class="fig2 fig_style"><img src="image/щ2.jpg" alt=""></div>
                        <div class="fig3 fig_style"><img src="image/щ4.jpg" alt=""></div>
                        <div class="fig4 fig_style"><img src="image/щ3.jpg" alt=""></div>
                        <div class="fig5 fig_style"><img src="image/щ5.jpg" alt=""></div>
                    </div>

                </div>
                <div class="main-pravo">
                    <div class="main-pravo-vhod">
                        <h2>HabInterest</h2>
                        <p>Размещай фотки и становись</br> популярнее с каждой секундой</p>
                        <a href="#" class="open-popup-reg open-reg-diz">Попробовать</a>
                    </div>
                </div>
            </div>
        </main>

    <!-- Попап логин -->
    <div class="popup-bg popup-bg-login">
        <div class="popup popup-login">
            <img class="close-popup-login" src="image/krest.png" alt="">
            <form action="login.php" method="POST" id="login_form">
                <input type="text" name="matvey_l_1" placeholder="Логин" class="polya">
                <label for="" class="placeholder1">Логин</label>
                <input type="password" name="matvey_l_2" placeholder="Пароль" class="polya">
                <label for="" class="placeholder2">Пароль</label>
                <button class="popup-vhod-btn1" form="login_form">Войти</button>
                <button class="popup-vhod-btn2 open-popup-reg close-popup-login">Ещё не
                    зарегистрировались?Зарегестрироваться</button>
            </form>
        </div>
    </div>
    <!-- Попап авторизация -->
    <div class="popup-bg popup-bg-reg">
        <div class="popup popup-reg">
            <img class="close-popup-reg" src="image/krest.png" alt="">
            <form action="register.php" method="POST" id="register_form">
                <input type="text" placeholder="Email" name="matvey_r_4" class="polya">
                <label for="" class="placeholder1">Email</label>
                <input type="text" name="matvey_r_1" placeholder="Логин" class="polya">
                <label for="" class="placeholder2">Логин</label>
                <input type="password" name="matvey_r_2" placeholder="Пароль" class="polya">
                <label for="" class="placeholder3">Пароль</label>
                <input type="password" name="matvey_r_3" placeholder="Повтор пароля" class="polya">
                <label for="" class="placeholder4">Повтор пароля</label>
                <button class="popup-vhod-btn1" form="register_form">Зарегестрироваться</button>
                <button class="popup-vhod-btn2 open-popup-login close-popup-reg">Зарегистрировались? </br>Войти</button>
            </form>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/scripts.js"></script>

</html>