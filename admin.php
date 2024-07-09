<?php
require_once('config/db.php');
require_once('config/elements.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запись на прием ИКП</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,300&family=Roboto+Slab&family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<body>
<header>
        <div class="top-head">
            <div class="white">
                <img src="img/minob.png" style="height: 80px; margin-right: 20px;">
                <img src="img/ikp.jpg" style="height: 64px;">
            </div>
            <div class="bukv">КОНСУЛЬТАЦИИ<br> СПЕЦИАЛИСТОВ ИКП</div>
            <div class="tel">
                <div class="number">+7 (499) 245-04-52</div>
                <div class="adres">г. Москва, ул. Погодинская, д.8, корп.1</div>
            </div>
        
            <a class="white-button" href="#vybor">Онлайн запись</a>
        </div>
        <div class="bot-head">
            <div class="menu">
            <a href="index.php">Главная</a>
            <a href="">Наши специалисты</a>
            <a href="admin.php">Админ-панель</a>
            <a href="">Контакты</a>
        </div>
        </div>
    </header>

<div class="admin">
    <?php
    require_once("config/db.php");
    $sql = mysqli_query($conn, "SELECT * FROM `application`");
    if (mysqli_num_rows($sql) > 0) {
        while ($app = mysqli_fetch_assoc($sql)){
            echo('<div class="myreport">
                            <div><p>Заявку подал(а):</p><p>'.$app['fio'].'</p></div>
                            <div><p>Номер телефона</p><p>'.$app['number'].'</p></div>
                            <div><p>Врач:</p><p>'.$app['doctor'].'</p></div>
                            <div><p>Дата:</p><p>'.$app['date'].'</p></div>
                            <div><p>Описание:</p><details><summary>Подробнее:</summary><p>'.$app['problem'].'</p></details></div>
                            <div><form method="post" action="config/delete.php"><input type="hidden" name="id" value="'.$app['id'].'"><button type="submit">Удалить заявку</button></form></div>
                            </div>');
        }
        
        
    }else{
        echo('<div style="height: 450px;"><h1 style="text-align:center;">Заявок нет!</h1></div>');
    }
    ?>

</div>


<footer>
        <div class="voprosy">
            <h3>Клиентам</h3>
            <a href="">Новости</a>
            <a href="">Политика конфиденциальности</a>
            <a href="">Помощь</a>
            <a href="">Обратная связь</a>
            <a href="">Часто задаваемые вопросы</a>
        </div>
        <div class="voprosy">
            <h3>Клиентам</h3>
            <a href="">Новости</a>
            <a href="">Политика конфиденциальности</a>
            <a href="">Помощь</a>
            <a href="">Обратная связь</a>
            <a href="">Часто задаваемые вопросы</a>
        </div>
        <div class="voprosy">
            <h3>Наши соцсети:</h3>
            <div class="social">
                <img src="img/tg.png" alt="">
                <img src="img/vk.png" style="margin-left: 40px;" alt="">
            </div>
            <h3>ikp.rao@gmail.com</h3>
            <div class="russia">
                <img src="img/minob.png" alt="">
                <img src="img/ikp2.jpg" style="border-radius: 50%;" alt="">
            </div>
        </div>
    </footer>
</body>