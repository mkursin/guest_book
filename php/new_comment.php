<?php

header("Content-Type: text/html; charset=utf-8");

$dbName   = "gbook";
$hostname = "127.0.0.1:3306";
$username = "root";
$password = "";

$link = mysql_connect($hostname, $username, $password) OR DIE("Не могу создать соединение");

mysql_select_db("$dbName") or die("Не могу выбрать базу данных ");
mysql_query("SET NAMES utf-8");
mysql_query('SET CHARACTER SET utf8');

$name   = $_POST['name'];
$email  = $_POST['email'];
$review = $_POST ['review'];

if (!empty($name) && !empty($email) && !empty($review)) {
    $name   = htmlspecialchars(trim($name));
    $email  = htmlspecialchars(trim($email));
    $review = htmlspecialchars(trim($review));

    $sql = "INSERT INTO book ( name, email, review) VALUES ('$name', '$email', '$review')";
    mysql_query($sql);

    if ($sql == true) {
        header('Location: ../review.php');
    } else {
        echo "Ошибка добавления комментария";
    }
} else {
    echo "Заполните соответствующие поля!";
}

mysql_close();



