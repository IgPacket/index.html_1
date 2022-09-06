<?php
    header('Content-type: text/html; charset=utf-8');
    echo "Моя первая программа на PHP!";
    $f=$_GET['f'];
    if ($f==1) {
        $zg="Введите данные студента";
        $str="Привет, Студент!";
    }
    else {
        $zg="Введите данный преподавателя";
        $str="Здравствуйте!";
    }
?>
<html>
    <head>
        <style type="text/css">
            hr {
                width: 50%;
                margin-right: auto;
                margin-left: auto;
                margin-top: 5px;
                margin-bottom: 5px;
                border-width: 2px;
                border-color: black;
            }
            h1 {
                text-align: center;
            }
            textarea {
                resize: none;
            }
        </style>
        <title><?=$zg?></title>
    </head>
    <body>
        <h1><?=$str?></h1>
        <div class="links">
            <a href="">Главная</a><br>
            <a href="">Проекты</a><br>
            <a href="">Фотогалерея</a><br>
            <a href="">Контакты</a>
        </div>
        <hr>
        <div>
            <p>На этом сайте вы можете прочитать: </p>
            <ul>
                <li>О моих увлечениях</li>
                <li>О выполненных мной проектах</li>
                <li>Подробнее обо мне</li>
            </ul>
            <p><strong>Насколько интересна Вам информация, представленная на странице?</strong></p>
            <label for="radio_1">Интересно!</label><input id="radio_1" name="radio"type="radio"><br>
            <label for="radio_2">Заманчиво!</label><input id="radio_2" name="radio"type="radio"><br>
            <label for="radio_3">Не очень Интересно.</label><input id="radio_3" name="radio"type="radio"><br>
        </div>
        <div>
            <p><strong>Введите ваш отзыв:</strong></p>
            <textarea cols="50" rows="10"><?=$zg?></textarea>
        </div>
        <div>
            <table>
                <p><strong>ВХОД</strong></p>
                <tr>
                    <td><label for="login">Логин</label></td><td><input id="login"type="text"></td></tr>
                <tr>
                    <td><label for="password">Пароль</label></td><td><input id="password"type="text"></td></tr>
            </table>
            <label for="checkbox_1">Скрыть пароль</label><input id="checkbox_1" name="checkbox"type="checkbox">
        </div>
        <footer>
            <div>
                <p>
                    &#169<em>Устинов И. 2022.<br>
                    Цитирование опубликованных на сайте материалов без разрешения атвора не допускается.</em>
                </p>
            </div>
        </footer>
    </body>
</html>