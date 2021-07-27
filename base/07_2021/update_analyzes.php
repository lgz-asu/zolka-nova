<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once '../../config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $part_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($connect, "SELECT * FROM `gelatin_07-2021` WHERE `id` = '$part_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);

/*
 * Сессия пользователя
 */
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../../index.php');
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Данные анализа</title>
</head>

<style>
form.perezol1
{width: 30%;}
.body{
    padding-top: 5px;
    padding-left: 60px;
}
</style>

<body>

<!-- Скрипт на доступ к странцие -->

<script language="JavaScript">
pass = prompt('Enter Password, please:');
if (pass=='12345') { alert('Пароль введен верно!') } else { alert('Ошибка пароля!'), top.location.href="table.php" }
</script>

    <h3>Внести данные анализов</h3>
    <form class="perezol1" action="vendor/update_analyzes.php" method="post"> 
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <fieldset>
        <legend>NH3</legend>
                <input type="text" name="NH3_zolka" value="<?= $product['NH3_zolka'] ?>">
                <br>
        </fieldset>        
        <fieldset>
            <legend>CaO</legend>
                <input type="text" name="CaO_zolka" value="<?= $product['CaO_zolka'] ?>">
                <br>
        </fieldset>     
        <fieldset>
            <legend>pH</legend>
                <input type="text" name="pH_zolka" value="<?= $product['pH_zolka'] ?>">
                <br>
        </fieldset> 
                <br>
        <fieldset>
            <legend>Выплавка</legend>
                <input type="text" name="vik_zolka" value="<?= $product['vik_zolka'] ?>">
                <br>
        </fieldset> 
                <br>
        <button type="submit">Обновить</button>
    </form>
</body>
</html>