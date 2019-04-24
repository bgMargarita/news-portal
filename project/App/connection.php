<?php
$host = 'localhost';
$user = 'user_bd';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'News';
$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}
?>