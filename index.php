<p class="none"><?php

/*
 * Сессия пользователя
 */

session_start();
if ($_SESSION['user']) {
    header('Location: main.php');
}

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>
</p>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/main.css">
    <title>LGZ-Zolka</title>
</head>
<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
    font-size: inherit;
    font-weight: inherit;
    }
    .authorization {
        display: flex;
        justify-content: center;
        margin: 10% auto;
    }
    .form-autoryz{
        display: flex;
        justify-content: center;
        font-weight: 700;
    }
    body .header {
    text-align: center;
    color: #f3ecec;
    background-color: #5c5a53;
    padding: 20px;
    }
    body .header__title {
        font-size: 25px;
        font-weight: 700;
    }

    body .header__subtitle {
    font-size: 20px;
    }

</style>
<body>
<header class="header">
        <span class="header__title">Переброска, загрузка и выгрузка сырья</span>
        <br>
        <span class="header__subtitle">в отделениях зольная-промывное-варочная</span>
</header>

<!-- Форма авторизации -->

<div class="authorization">
    <form>
    <fieldset>
    <span class="form-autoryz">Авторизация пользователя</span>
        <p>Логин <input type="text" name="login"></p>
        <p>Пароль <input type="password" name="password"></p>
        <button class="login-btn" type="submit">Войти</button>
        </fieldset>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>
    </form>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>