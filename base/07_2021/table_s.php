<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../../config/connect.php';

/*
 * Сессия пользователя
 */

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css"> 
    <title>Zolka-Table</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
<header class="header">
    <h1 class="header__title">Переброска, загрузка и выгрузка сырья</h1>
    <p class="header__subtitle">в отделении зольная-резка</p>
    <a class="date-table" href="http://192.168.23.43:8080/zolka-nova/main_s.php">
    <div id="current_date_time_block"></div>
        <script type="text/javascript">
            
            /* функция добавления ведущих нулей */
            /* (если число меньше десяти, перед числом добавляем ноль) */
            function zero_first_format(value)
            {
                if (value < 10)
                {
                    value='0'+value;
                }
                return value;
            }

            /* функция получения текущей даты и времени */
            function date_time()
            {
                var current_datetime = new Date();
                var day = zero_first_format(current_datetime.getDate());
                var month = zero_first_format(current_datetime.getMonth()+1);
                var year = current_datetime.getFullYear();

                return day+"."+month+"."+year;
            }

            /* выводим текущую дату и время на сайт в блок с id "current_date_time_block" */
            document.getElementById('current_date_time_block').innerHTML = date_time();
        </script>
    </a>
    <a class="taimer" href="http://192.168.23.13/Scada/View.aspx?viewID=1221">Scada - золение
    </a>
</header>
<div class="table-base">
        <a class="table-base__item" href="#"> Январь </a>
        <a class="table-base__item" href="#"> Февраль </a>
        <a class="table-base__item" href="#"> Март </a>
        <a class="table-base__item" href="#"> Апрель </a>
        <a class="table-base__item" href="#"> Май </a>
        <a class="table-base__item" href="#"> Июнь </a>
        <a class="table-base__item-mod" href="http://192.168.23.43:8080/zolka-nova/base/07_2021/table_s.php"> Июль </a>
        <a class="table-base__item" href="http://192.168.23.43:8080/zolka-nova/base/08_2021/table_s.php"> Август </a>
        <a class="table-base__item" href="http://192.168.23.43:8080/zolka-nova/base/09_2021/table_s.php"> Сентябрь </a>
        <a class="table-base__item" href="#"> Октябрь </a>
        <a class="table-base__item" href="#"> Ноябрь </a>
        <a class="table-base__item" href="#"> Декабрь </a>
    </div>
    <table>
        <tr class="table-raw__tr">
            <th>Партия</th>
            <th>Тип сырья, т</th>
            <th>Начало золки</th>
            <th>Перезолка-1</th>
            <th>Перезолка-2</th>
            <th>Перезолка-3</th>
            <th>Перезолка-4</th>
            <th>Перезолка-5</th>
            <th>Промывное</th>
            <th>Варочная</th>
            <th>Выгрузка</th>
            <th>*</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "gelatin_07-2021", командой ORDER BY делаем сортировку по значению part_num
             */

            $products = mysqli_query($connect, "SELECT * FROM `gelatin_07-2021` ORDER BY `gelatin_07-2021`.`part_num` ASC");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - номер партии
             * Ключ 2 - id_сырья
             * Ключ 3 - количество сырья (тонна)
             * Ключи 4-11 - золка; перезолка-1; перезолка-2; перезолка-3; перезолка-4; перезолка-5; промывное-конроллер; варка-котел; 
             * Ключи 12-19 (дата) - золка; перезолка-1; перезолка-2; перезолка-3; перезолка-4; перезолка-5; промывное-конроллер; варка-котел;
             * Ключ 20 - дата выгрузки 
             */

            foreach ($products as $product):
                ?>
                    <tr>
                        <style>

                        </style>
                        <td>Сер. № <?= $product[1] ?></td>
                        <td class="span-style-s"><?= $product[2] ?>, <?= $product[3] ?> т</td>
                        <td><span class="span-style"> <?= $product[12] ?> </span> <br> Зол.№ <?= $product[4] ?></td>
                        <td><span class="span-style"> <?= $product[13] ?> </span> <br> Зол.№ <?= $product[5] ?></td>
                        <td><span class="span-style"> <?= $product[14] ?> </span> <br> Зол.№ <?= $product[6] ?></td>
                        <td><span class="span-style"> <?= $product[15] ?> </span> <br> Зол.№ <?= $product[7] ?></td>
                        <td><span class="span-style"> <?= $product[16] ?> </span> <br> Зол.№ <?= $product[8] ?></td>
                        <td><span class="span-style"> <?= $product[17] ?> </span> <br> Зол.№ <?= $product[9] ?></td>
                        <td><span class="span-style"> <?= $product[18] ?> </span> <br> Кон-р № <?= $product[10] ?></td>
                        <td><span class="span-style"> <?= $product[19] ?> </span> <br> Котел № <?= $product[11] ?></td>
                        <td><span class="span-style-s"> <?= $product[20] ?> </span></td>
                        <td><a href=""></a></td>
                    </tr>
                    <tr>
                        <th>Анализы</th>
                        <td> NH3: <br>
                             CaO: <br>
                             pH: <br>
                             выплавка: <br>
                        </td>
                        <td><p class="span-style-r"><?= $product[21] ?></p>
                            <p class="span-style-r"><?= $product[22] ?></p>
                            <p class="span-style-r"><?= $product[23] ?></p>
                            <p class="span-style-r"><?= $product[24] ?></p>
                        </td>
                        <td><p class="span-style-r"><?= $product[21] ?></p>
                            <p class="span-style-r"><?= $product[22] ?></p>
                            <p class="span-style-r"><?= $product[23] ?></p>
                            <p class="span-style-r"><?= $product[24] ?></p>
                        </td>
                        <td><p class="span-style-r"><?= $product[21] ?></p>
                            <p class="span-style-r"><?= $product[22] ?></p>
                            <p class="span-style-r"><?= $product[23] ?></p>
                            <p class="span-style-r"><?= $product[24] ?></p>
                        </td>
                        <td><p class="span-style-r"><?= $product[21] ?></p>
                            <p class="span-style-r"><?= $product[22] ?></p>
                            <p class="span-style-r"><?= $product[23] ?></p>
                            <p class="span-style-r"><?= $product[24] ?></p>
                        </td>
                        <td><p class="span-style-r"><?= $product[21] ?></p>
                            <p class="span-style-r"><?= $product[22] ?></p>
                            <p class="span-style-r"><?= $product[23] ?></p>
                            <p class="span-style-r"><?= $product[24] ?></p>
                        </td>
                        <td><p class="span-style-r"><?= $product[21] ?></p>
                            <p class="span-style-r"><?= $product[22] ?></p>
                            <p class="span-style-r"><?= $product[23] ?></p>
                            <p class="span-style-r"><?= $product[24] ?></p>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php
            endforeach
        ?>

    </table>

    <!--  
    =============================== ВСПЛЫВАЮЩЕЕ ОКНО ДЛЯ ПЕРВОЙ ЗАГРУЗКИ СЫРЬЯ В ЗОЛЬНИК
        -->

        <div class="popup" id="popup1">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close">X</a>
                <div class="popup__title">Загрузка сырья в зольник</div>
                <form action="vendor/create.php" method="POST">
                    <div class="popup__textforms">
                        <div class="forms">
                            <p><b>Сырье:</b></p>
                            <input class="download__item-1" type="text" name="type_material">
                        </div>
                        <div class="ash-pans">
                            <div class="quantity">
                                <p><b>Кол-во (т)</b></p>
                                <input class="download__item-1" name="tonna" type="number">
                                <p class="download__item"><b>№ партии</b></p>
                                <input class="download__item-1" name="part_num" type="number">
                            </div>
                            <div class="number">
                                <p><b>Зол. №</b></p>
                                <input class="download__item-1" name="zol_num" size="1" required="required" type="number" placeholder="золка">
                                <p class="download__item"><b>Дата</b></p>
                                <input class="download__item-1" name="date_zolka" size="1" type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="sumbit">
                            <button class="sumbit1" type="submit">Потвердить</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    <!--  
    =============================== ВСПЛЫВАЮЩЕЕ ОКНО ДЛЯ ПЕРВОЙ ЗАГРУЗКИ СЫРЬЯ В ЗОЛЬНИК
        -->
        <!-- <div class="log-in">
        <img class="profile-ava" src="../../images/bg.png" alt="Tyler">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a class="email-profile" href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="../../vendor/logout.php" class="logout">выход</a>
        <p class=sot></p>
        </div> -->
<!--  =============================== СКРИПТЫ JS ====================================== --> 
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/main.js"></script>

</body>
</html>
