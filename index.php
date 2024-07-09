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
    <!--НЕВИДИМЫЙ БЛОК КОТОРЫЙ ОТКРЫВАЕТСЯ ПО КНОПКЕ-->
    <div id="popup-overlay">
        <form action="config/sub.php" method="post" id="popup" class="map-select">
            <h2 style="text-align: center;">Заполните форму</h2>
            <div class="full">
            <div class="samarablya">
            <div class="window">
           <h3>Выберите специальность:</h3>
            <select name="prof" onchange="showSecondSelect()" id="prof">
                <option value="">Не выбрано</option>
                <option value="Терапевт">Терапевт</option>
                <option value="Дефектолог">Дефектолог</option>
                <option value="Психолог">Психолог</option>
                <option value="Логопед">Логопед</option>
            </select>
        </div>
        <div class="window">
            <h3>Выберите специалиста:</h3>
             <select disabled name="doctor" id="doctor">
                <option value="">Не выбрано</option>
                <?php terapevts() ?>
                <?php defectologs() ?>
                <?php logopeds() ?>
                <?php psyhologs() ?>
             </select>
         </div>
         <div class="window">
            <h3>Выберите дату посещения:</h3>
             <input class="date" type="date" name="date" id="">
         </div></div>

         <div class="samarablya">
            <div class="window">
           <h3>Введите Ваше ФИО</h3>
            <input type="text" class="date" name="fio" style="width: 300px;">
        </div>
        <div class="window">
            <h3>Введите Ваш номер телефона:</h3>
            <input type="text" class="date" name="number" style="width: 300px;">
         </div>
         <div class="window">
            <h3>Опишите проблему:</h3>
             <textarea style="width: 300px; height: 150px;" name="problem" class="date" id=""></textarea>
         </div></div>
        </div>
        <button class="blue-button" type="submit">Отправить</button>
        <br>
        </form>
        <button id="close" class="blue-button" onclick="hidePopup()">Закрыть</button>
      </div>







      <div id="popup-overlay2">
        <form action="config/sub.php" method="post" id="popup2" class="map-select">
            <h2 style="text-align: center;">Заполните форму</h2>
            <div class="full">
            <div class="samarablya">
            <div class="window">
        </div>
        <div class="window">
            <h3>Выберите специалиста:</h3>
             <select name="doctor" id="doctor">
                <option value="">Не выбрано</option>
                <?php allspec() ?>
             </select>
         </div>
         <div class="window">
            <h3>Выберите дату посещения:</h3>
             <input class="date" type="date" name="date" id="">
         </div></div>

         <div class="samarablya">
            <div class="window">
           <h3>Введите Ваше ФИО</h3>
            <input type="text" class="date" name="fio" style="width: 300px;">
        </div>
        <div class="window">
            <h3>Введите Ваш номер телефона:</h3>
            <input type="text" class="date" name="number" style="width: 300px;">
         </div>
         <div class="window">
            <h3>Опишите проблему:</h3>
             <textarea style="width: 300px; height: 150px;" name="problem" class="date" id=""></textarea>
         </div></div>
        </div>
        <button class="blue-button" type="submit">Отправить</button>
        <br>
        </form>
        <button id="close2" class="blue-button" onclick="hidePopup2()">Закрыть</button>
      </div>






      <div id="popup-overlay3">
        <form action="config/sub.php" method="post" id="popup3" class="map-select">
            <h2 style="text-align: center;">Заполните форму</h2>
            <div class="full">
            <div class="samarablya">
            <div class="window">
           <h3>Дисфункция:</h3>
            <select name="prof" onchange="showSecondSelect2()" id="prof1">
                <option value="">Не выбрано</option>
                <option value="Терапевт">Двигательная дисфункция</option>
                <option value="Дефектолог">Задержка психического развития</option>
                <option value="Дефектолог">Детский церебральный паралич</option>
                <option value="Психолог">Психологическое расстройство</option>
                <option value="Психолог">Апатия</option>
                <option value="Дефектолог">Расстройство внимания</option>
                <option value="Логопед">Нарушение речи</option>
                
            </select>
        </div>
        <div class="window">
            <h3>Выберите специалиста:</h3>
             <select disabled name="doctor" id="doctor1">
                <option value="">Не выбрано</option>
                <?php terapevts() ?>
                <?php defectologs() ?>
                <?php logopeds() ?>
                <?php psyhologs() ?>
             </select>
         </div>
         <div class="window">
            <h3>Выберите дату посещения:</h3>
             <input class="date" type="date" name="date" id="">
         </div></div>

         <div class="samarablya">
            <div class="window">
           <h3>Введите Ваше ФИО</h3>
            <input type="text" class="date" name="fio" style="width: 300px;">
        </div>
        <div class="window">
            <h3>Введите Ваш номер телефона:</h3>
            <input type="text" class="date" name="number" style="width: 300px;">
         </div>
         <div class="window">
            <h3>Опишите проблему:</h3>
             <textarea style="width: 300px; height: 150px;" name="problem" class="date" id=""></textarea>
         </div></div>
        </div>
        <button class="blue-button" type="submit">Отправить</button>
        <br>
        </form>
        <button id="close3" class="blue-button" onclick="hidePopup3()" >Закрыть</button>
      </div>









      <!--ЗДЕСЬ СКРИПТ-->
      <script src="script1.js"></script>
      <!--ЗДЕСЬ СКРИПТ-->


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
            <a href="#special">Наши специалисты</a>
            <a href="verif.html">Админ-панель</a>
            <a href="#contact">Контакты</a>
        </div>
        </div>
    </header>


    <div class="container">
        <div class="welcome"><h1>ЗАПИСЬ НА<br>ПРИЕМ ТЕПЕРЬ ОНЛАЙН!</h1>
            <p>Команда наших специалистов психологов,<br> дефектологов, терапевтов, гениев, миллиардеров,<br> филантропов готовы помочь вам! оставьте <br>заявку на прием нажав на кнопку ниже</p>
            <a href="#vybor" class="blue-button">Перейти ></a>
        </div>
        <div class="foto"></div>
    </div>
    <div class="block-info">
        <div class="foto-woman">
            <div class="back"></div>
        </div>
        <div class="text">
            <div class="onlytext">
                <h1>НАШИ СПЕЦИАЛИСТЫ</h1>
                <p>Другая Команда наших специалистов психологов, дефектологов, терапевтов, гениев, миллиардеров, филантропов готовы помочь вам! оставьте заявку на прием нажав на кнопку ниже  Другая Команда наших специалистов психологов, дефектологов, терапевтов, гениев, миллиардеров, филантропов готовы помочь вам! оставьте заявку на прием нажав на кнопку ниже </p>
            </div>
            <div class="end"><a href="#special" class="white-button">Перейти ></a></div>
        </div>
    </div>
    <h1 class="zag">Преимущества нашей компании:</h1>
    <div class="center">
        <div class="block"><h3>Гибкий график</h3><p>Комплекс позволяет заниматься с ребенком, когда удобно вам, без привязки к расписанию детского центра или специалиста. </p></div>
        <div class="block"><h3>Дистанционное обучение</h3><p>Комплекс позволяет заниматься с ребенком, когда удобно вам, без привязки к расписанию детского центра или специалиста. </p></div>
        <div class="block"><h3>Персональная программа</h3><p>Комплекс позволяет заниматься с ребенком, когда удобно вам, без привязки к расписанию детского центра или специалиста. </p></div>
        <div class="block"><h3>Для детей с особенностями в развитии</h3><p>Комплекс позволяет заниматься с ребенком, когда удобно вам, без привязки к расписанию детского центра или специалиста. </p></div>
    </div>


    <div id="vybor" class="vybor">
        <div class="block1">
            <div class="select"><h3>Выбор по специальности</h3><p>Уже не в первый раз в "Институте коррекционной
                педагогики" и интересует конкретный специалист? Выберите его здесь!</p> <button class="blue-button" onclick="showPopup()" >Перейти ></button>
            </p></div>
            <div class="imag" style="height: 100%;"><img src="img/plus.png" width ="100px" height="100px;"></img></div>
        </div>
        <div class="block1">
            <div class="select"><h3>Выбор по дисфункции</h3><p>Уже не в первый раз в "Институте коррекционной
                педагогики" и интересует конкретный специалист? Выберите его здесь!</p> <button onclick="showPopup3()" class="blue-button" >Перейти ></button>
            </p></div>
            <div class="imag" style="height: 100%;"><img src="img/plus.png" width ="100px" height="100px;"></img></div>
        </div>
        <div class="block1">
            <div class="select"><h3>Список специалистов</h3><p>Уже не в первый раз в "Институте коррекционной
                педагогики" и интересует конкретный специалист? Выберите его здесь!</p> <button onclick="showPopup2()" class="blue-button" >Перейти ></button>
            </p></div>
            <div class="imag" style="height: 100%;"><img src="img/plus.png" width ="100px" height="100px;"></img></div>
        </div>
        
       
    </div>

    

    <div class="slider" id="special">
        <button class="slid-btn" id="prevBtn">Left</button>
        <div class="slide">            
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: green;"> <img src="img/олеся.png" alt="">  </div><h4 style="margin-bottom: 0;">Сачко Олеся Александровна</h4><p style="margin-top: 10px;">терапевт</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: brown;"> <img src="img/максон.png" alt="">  </div><h4 style="margin-bottom: 0;">Хлебников Максим Витальевич</h4><p style="margin-top: 10px;">психолог</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: orange;"><img src="img/аслан.png" alt=""> </div><h4 style="margin-bottom: 0;">Мациев Асланбек Магомедович</h4><p style="margin-top: 10px;">дефектолог</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: #8f3e6e;">  <img src="img/sticker.png" alt=""> </div><h4 style="margin-bottom: 0;">Герасимов Михаил Михайлович</h4><p style="margin-top: 10px;">терапевт</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>

        </div>
        
        <div class="slide">
        <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: blue;"> <img src="img/жора.png" alt=""> </div><h4 style="margin-bottom: 0;">Текоев Георгий Олегович</h4><p style="margin-top: 10px;">логопед</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: yellowgreen;"><img src="img/pirat.png" alt=""> </div><h4 style="margin-bottom: 0;">Пиратов Сергей Дедович</h4><p style="margin-top: 10px;">терапевт</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: orange;"><img src="img/stray.png" alt=""> </div><h4 style="margin-bottom: 0;">Бочаров Олег Гансович</h4><p style="margin-top: 10px;">дефектолог</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: lightgrey;">  <img src="img/ava.png" alt=""> </div><h4 style="margin-bottom: 0;">Кочкин Сергей Анатольевич</h4><p style="margin-top: 10px;">терапевт</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
        </div>

        <div class="slide">
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: green;"> <img src="img/ava.png" alt="">  </div><h4 style="margin-bottom: 0;">Сачко Олеся Александровна</h4><p style="margin-top: 10px;">терапевт</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: yellow;"> <img src="img/ava.png" alt="">  </div><h4 style="margin-bottom: 0;">Фомичёв Арсений Павлович</h4><p style="margin-top: 10px;">терапевт</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: blue;"> <img src="img/ava.png" alt="">  </div><h4 style="margin-bottom: 0;">Волков Александр Евгеньевич</h4><p style="margin-top: 10px;">терапевт</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
            <div class="card"><div style="height: 200px; border-radius: 20px; width: 100%; background-color: red;"> <img src="img/ava.png" alt="">  </div><h4 style="margin-bottom: 0;">Тодурова Полина Николаевна</h4><p style="margin-top: 10px;">терапевт</p><div class="invisible"><button class="blue-button">Подробнее ></button></div></div>
        </div>

        <button class="slid-btn" id ="nextBtn">right</button>

       
    </div>

    
          <script src="slider.js"></script>
        
    <br>
    



    
    <br>
    <div class="map" id="contact">
        <div class="quest">
            <div class="adress"><h3>Наш адрес:</h3><p>г Москва, ул. <br>Погодинская, д.8к1</p></div>
            <div class="adress"><h3>Остались вопросы?</h3><br><p>Напишите нам на <br>электронную почту:</p><a style="font-size: 18px; color: #005FA4;" href="">info@ikp.email</a> <p style="margin-top: 10px;">или свяжитесь по телефону:</p><h3 style="margin-top: 0;">+7(499) 245-04-52</h3></div>
        </div>
        <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d561.609944252546!2d37.568237169676586!3d55.73348749831733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bbd64cb3627%3A0x27eed1f05929a315!2z0JjQvdGB0YLQuNGC0YPRgiDQutC-0YDRgNC10LrRhtC40L7QvdC90L7QuSDQv9C10LTQsNCz0L7Qs9C40LrQuA!5e0!3m2!1sru!2sru!4v1712861044296!5m2!1sru!2sru" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>

    <div id="otzyv" class="vybor">
        <div class="block2">
            <div class="krug" style="background-color: lightpink;"></div>
            <div class="ocenka"><div class="fioo"><h3>Захарченко Егор</h3><h4>г. Астана, Казахстан</h4></div><div class="ball"><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""></div>   
        </div><div class="text_otz">Комплекс позволяет заниматься с ребенком, когда удобно вам, без привязки к расписанию детского центра или специалиста. </div></div>
        
        <div class="block2">
            <div class="krug"></div>
            <div class="ocenka"><div class="fioo"><h3>Буслаев Никита</h3><h4>г. Астана, Казахстан</h4></div><div class="ball"><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""></div>
            
        </div><div class="text_otz">Комплекс позволяет заниматься с ребенком, когда удобно вам, без привязки к расписанию детского центра или специалиста. </div></div>
        <div class="block2">
            <div class="krug" style="background-color: orange;"></div>
            <div class="ocenka"><div class="fioo"><h3>Орлов Алексей</h3><h4>г. Астана, Казахстан</h4></div><div class="ball"><img src="img/otz.png".png alt=""><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""><img src="img/otz.png" alt=""> </div>
            
        </div><div class="text_otz">Комплекс позволяет заниматься с ребенком, когда удобно вам, без привязки к расписанию детского центра или специалиста. </div></div>
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
                <a href="https://t.me/ikpru"><img src="img/tg.png" alt=""></a>
                <a href="https://vk.com/ikpru"><img src="img/vk.png" style="margin-left: 40px;" alt=""></a>
            </div>
            <h3>ikp.rao@gmail.com</h3>
            <div class="russia">
                <img src="img/minob.png" alt="">
                <img src="img/ikp2.jpg" style="border-radius: 50%;" alt="">
            </div>
        </div>
    </footer>
    
    
    <h5 style="text-align: center; padding: 10px;">© 2023 Федеральное государственное бюджетное научное учреждение «Институт коррекционной педагогики»</h5>
</body>
</html>