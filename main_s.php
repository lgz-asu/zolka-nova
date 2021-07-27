<p class="none"><?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

/*
 * Сессия пользователя
 */

// session_start();
// if (!$_SESSION['user']) {
//     header('Location: index.php');
// }

?>
</p>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
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
<style>
    th, td {
        padding: 10px;
    }

    th {
        margin: 13px;
        background: #606060;
        color: #fff;
    }

    td {
       
        background: #b5b5b5;
    }
    .table-area{
        margin-top: 20px;
  display:flex;
  justify-content:center;
  align-items:center;
}

.table-year {
  position: relative;
}
h1{
    margin-top: 15px;
    text-align: center;
    font-weight: 700;
}
</style>
<body>
<header class="header">
        <span class="header__title">Переброска, загрузка и выгрузка сырья</span>
        <br>
        <span class="header__subtitle">в отделениях зольная-промывное-варочная</span>
</header>
<h1>Календарь</h1>
<div class="table-area">

<table class="table-year">
        <tr class="table-raw__tr">
            <th colspan="3">2021</th>
            <th colspan="3">2022</th>
            <th colspan="3">2023</th>
        </tr>
        <tr class="table-raw__tr">
            <td>Январь</td>
            <td>Февраль</td>
            <td>Март</td>
            <td>Январь</td>
            <td>Февраль</td>
            <td>Март</td>
            <td>Январь</td>
            <td>Февраль</td>
            <td>Март</td>
        </tr>
        <tr class="table-raw__tr">
            <td>Апрель</td>
            <td>Май</td>
            <td>Июнь</td>
            <td>Апрель</td>
            <td>Май</td>
            <td>Июнь</td>
            <td>Апрель</td>
            <td>Май</td>
            <td>Июнь</td>
        </tr>
        <tr class="table-raw__tr">
            <td><a href="http://192.168.23.43:8080/zolka-nova/base/07_2021/table_s.php"> Июль </a></td>
            <td><a href="http://192.168.23.43:8080/zolka-nova/base/08_2021/table_s.php"> Август </a></td>
            <td><a href="http://192.168.23.43:8080/zolka-nova/base/09_2021/table_s.php"> Сентябрь </a></td>
            <td>Июль</td>
            <td>Август</td>
            <td>Сентябрь</td>
            <td>Июль</td>
            <td>Август</td>
            <td>Сентябрь</td>
        </tr>
        <tr class="table-raw__tr">
            <td>Октябрь</td>
            <td>Ноябрь</td>
            <td>Декабрь</td>
            <td>Октябрь</td>
            <td>Ноябрь</td>
            <td>Декабрь</td>
            <td>Октябрь</td>
            <td>Ноябрь</td>
            <td>Декабрь</td>
        </tr>
        <tr class="table-raw__tr">
            <th colspan="3">2024</th>
            <th colspan="3">2025</th>
            <th colspan="3">2026</th>
        </tr>
        <tr class="table-raw__tr">
            <td>Январь</td>
            <td>Февраль</td>
            <td>Март</td>
            <td>Январь</td>
            <td>Февраль</td>
            <td>Март</td>
            <td>Январь</td>
            <td>Февраль</td>
            <td>Март</td>
        </tr>
        <tr class="table-raw__tr">
            <td>Апрель</td>
            <td>Май</td>
            <td>Июнь</td>
            <td>Апрель</td>
            <td>Май</td>
            <td>Июнь</td>
            <td>Апрель</td>
            <td>Май</td>
            <td>Июнь</td>
        </tr>
        <tr class="table-raw__tr">
            <td>Июль</td>
            <td>Август</td>
            <td>Сентябрь</td>
            <td>Июль</td>
            <td>Август</td>
            <td>Сентябрь</td>
            <td>Июль</td>
            <td>Август</td>
            <td>Сентябрь</td>
        </tr>
        <tr class="table-raw__tr">
            <td>Октябрь</td>
            <td>Ноябрь</td>
            <td>Декабрь</td>
            <td>Октябрь</td>
            <td>Ноябрь</td>
            <td>Декабрь</td>
            <td>Октябрь</td>
            <td>Ноябрь</td>
            <td>Декабрь</td>
        </tr>
        <tr class="table-raw__tr">
            <th colspan="3">2027</th>
            <th colspan="3">2028</th>
            <th colspan="3">2029</th>
        </tr>
        <tr class="table-raw__tr">
            <td>Январь</td>
            <td>Февраль</td>
            <td>Март</td>
            <td>Январь</td>
            <td>Февраль</td>
            <td>Март</td>
            <td>Январь</td>
            <td>Февраль</td>
            <td>Март</td>
        </tr>
        <tr class="table-raw__tr">
            <td>Апрель</td>
            <td>Май</td>
            <td>Июнь</td>
            <td>Апрель</td>
            <td>Май</td>
            <td>Июнь</td>
            <td>Апрель</td>
            <td>Май</td>
            <td>Июнь</td>
        </tr>
        <tr class="table-raw__tr">
            <td>Июль</td>
            <td>Август</td>
            <td>Сентябрь</td>
            <td>Июль</td>
            <td>Август</td>
            <td>Сентябрь</td>
            <td>Июль</td>
            <td>Август</td>
            <td>Сентябрь</td>
        </tr>
        <tr class="table-raw__tr">
            <td>Октябрь</td>
            <td>Ноябрь</td>
            <td>Декабрь</td>
            <td>Октябрь</td>
            <td>Ноябрь</td>
            <td>Декабрь</td>
            <td>Октябрь</td>
            <td>Ноябрь</td>
            <td>Декабрь</td>
        </tr>
</table>
</div>



<!-- Форма авторизации -->

            <!-- Профиль -->
        <!-- <style>
        .log-in{
            display: inline;
            position: absolute;
            left: 67%;
            bottom: 93%;
        }
        </style> -->
        <!-- <div class="log-in">
        <img class="profile-ava" src="images/bg.png" alt="Tyler">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a class="email-profile" href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">выход</a>
        <p class=sot></p>
        </div> -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>