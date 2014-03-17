<?php

/**
 * User: 112
 * Created: 13.03.14, 9:23
 *
 * Получение списка комментариев гостевой книги
 */

header("Content-Type: text/html; charset=utf-8");

$dbName = "gbook";
$hostname = "127.0.0.1:3306";
$username = "root";
$password = "";

$link = mysql_connect($hostname, $username, $password) OR DIE("Не могу создать соединение");

mysql_select_db("$dbName") or die("Не могу выбрать базу данных ");
mysql_query("SET NAMES utf-8");
mysql_query('SET CHARACTER SET utf8');

$sql = "SELECT * FROM book;" or die ("Ошибка запроса: ");
$results = mysql_query($sql);

if (!$results) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($results) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
else {
    echo "<table cellpadding='10'>";
    echo "<tr><th>Имя</th><th>Email</th><th>Отзыв</th></tr>";

    while ($row = mysql_fetch_assoc($results)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>" ;
        echo "<td>".$row['review']."</td>";
        echo "</tr>";
    }

    echo "</table>";
}

mysql_free_result($results);

mysql_close();