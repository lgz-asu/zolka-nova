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
    <title>Update Product</title>
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
    <div class="body">
    <script language="JavaScript">
    pass = prompt('Enter Password, please:');
    if (pass=='12345') { alert('Пароль введен верно!') } else { alert('Ошибка пароля!'), top.location.href="table.php" }
    </script>
    <h3>Обновить данные</h3>
    <form class="perezol1" action="vendor/update.php" method="post"> 
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <fieldset>
            <legend>Перезолка-1</legend>
                    <span>№ зольника</span>
                    <input type="text" name="perezol1_num" value="<?= $product['perezol1_num'] ?>">
                    <br>
                    <span>Дата перезолки-1</span>
                    <input type="text" name="date_perezol1" value="<?= $product['date_perezol1'] ?>">
                    <br>
                    </fieldset>
                    <br>
            <fieldset>
                <legend>Перезолка-2</legend>
                    <span>№ зольника</span>
                    <input type="text" name="perezol2_num" value="<?= $product['perezol2_num'] ?>">
                    <br>
                    <span>Дата перезолки-1</span>
                    <input type="text" name="date_perezol2" value="<?= $product['date_perezol2'] ?>">
                    <br>
                    </fieldset> 
                    <br>
            <fieldset>
                <legend>Перезолка-3</legend>
                    <span>№ зольника</span>
                    <input type="text" name="perezol3_num" value="<?= $product['perezol3_num'] ?>">
                    <br>
                    <span>Дата перезолки-1</span>
                    <input type="text" name="date_perezol3" value="<?= $product['date_perezol3'] ?>">
                    <br>
                    </fieldset> 
                    <br>
            <fieldset>
                <legend>Перезолка-4</legend>
                    <span>№ зольника</span>
                    <input type="text" name="perezol4_num" value="<?= $product['perezol4_num'] ?>">
                    <br>
                    <span>Дата перезолки-1</span>
                    <input type="text" name="date_perezol4" value="<?= $product['date_perezol4'] ?>">
                    <br>
                    </fieldset> 
                    <br>
            <fieldset>
                <legend>Перезолка-5</legend>
                    <span>№ зольника</span>
                    <input type="text" name="perezol5_num" value="<?= $product['perezol5_num'] ?>">
                    <br>
                    <span>Дата перезолки-1</span>
                    <input type="text" name="date_perezol5" value="<?= $product['date_perezol5'] ?>">
                    <br>
                    </fieldset> 
                    <br>
            <fieldset>
                <legend>Промывное</legend>
                    <span>№ конроллера</span>
                    <input type="text" name="promiv_num" value="<?= $product['promiv_num'] ?>">
                    <br>
                    <span>Дата загрузки</span>
                    <input type="text" name="date_promiv" value="<?= $product['date_promiv'] ?>">
                    <br>
                    </fieldset> 
                    <br>
            <fieldset>
                <legend>Варочное</legend>
                    <span>№ котла</span>
                    <input type="text" name="varka_num" value="<?= $product['varka_num'] ?>">
                    <br>
                    <span>Дата загрузки</span>
                    <input type="text" name="date_varka" value="<?= $product['date_varka'] ?>">
                    </fieldset> 
                    <br>
            <fieldset>
                <legend>Выгрузка</legend>
                    <span>Дата</span>
                    <input type="text" name="date_vigruz" value="<?= $product['date_vigruz'] ?>">
                    </fieldset>
                    <br>
        <button type="submit">Обновить</button>
    </form>
    </div>
</body>
</html>