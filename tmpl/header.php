<!DOCTYPE html >

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1251"/>
    <title>HelpeR</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="<?= SITE ?>/default.css" rel="stylesheet" type="text/css"/>
    <link href="<?= SITE ?>/slider.css" rel="stylesheet" type="text/css"/>
    <script src="<?= SITE ?>/js/jquery-2.1.3.js"></script>
    <script src="<?= SITE ?>/js/slider.js"></script>
    <link rel="shortcut icon" href="<?= SITE ?>/images/favicon.ico">

</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <img width="195" height="195" src="<?= SITE ?>/images/logo.png" alt=""/>
        </div>

        <div id="top_navig">
            <div id="number">
                <h1>HelpeR - Ваш надежный помошник</h1><br>

                <div class="work_time">
                    <pre>Часы работы магазина:<br>Пн.-Пт.  10:00-17:30<br>Сб.      11:00-17:00<br>Вс.      выходной</pre>
                </div>
                <div class="top_mail">
                    <pre>Наши контакты:<br>Email: sale@helper.com<br>Тел. (044) 747 747 747 </pre>
                </div>
            </div>
            <div id="avtoriz">
                <p class="login-text">Авторизация на сайте</p>

                <form method='post' action="#">
                    <input type='text' onFocus="if(this.value=='Логин')this.value=''"
                           onblur="if(this.value=='')this.value='Логин'" name='username' value='Логин'
                           class='text_input'/>
                    <input type='password' onFocus="if(this.value=='Пароль')this.value=''"
                           onblur="if(this.value=='')this.value='Пароль'" name='password' value='Пароль'
                           class='text_input'/>
                    <br><input class="submit" type='submit' value='Войти' name='login'/>
                </form>
                <a class="forgot" href='#'> Регистрация </a> &nbsp &nbsp <a class="forgot" href='#'> Забыли пароль? </a>
            </div>
            <ul class="dropdown">
                <li class="dropdown-top"><a class="dropdown-top" href="<?=SITE?>/News">Новости</a>
                    <ul class="dropdown-inside">
                        <li><a href="<?=SITE?>/News/Education_news">Образование</a></li>
                        <li><a href="<?=SITE?>/News/Technology_news">Технологии</a></li>
                    </ul>
                </li>
                <li class="dropdown-top"><a class="dropdown-top" href="<?=SITE?>/Product">Магазин</a>
                    <ul class="dropdown-inside">
                        <li><a href="<?=SITE?>/Product/get_Tshirt">Футболки</a></li>
                        <li><a href="<?=SITE?>/Product/get_caps">Кепки</a></li>
                    </ul>
                </li>
                <li class="dropdown-top"><a class="dropdown-top" href="<?=SITE?>/Contacts">Контакты</a></li>
                <li class="dropdown-top"><a class="dropdown-top" href="<?=SITE?>/Delivery">Доставка</a></li>
                <li class="dropdown-top"><a class="dropdown-top" href="#">Корзина</a></li>
                <li class="dropdown-top"><a class="dropdown-top" href="<?=SITE?>/Mail">Написать нам</a></li>
            </ul>
        </div>
    </div>
