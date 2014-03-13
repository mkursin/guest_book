<?php
/**
 * Created by PhpStorm.
 * User: 112
 * Date: 13.03.14
 * Time: 9:23
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

$sql = "SELECT * FROM book" or die ("Ошибка запроса: ");
$results = mysql_query($sql);

/*foreach ($results as  $value )
{
   echo $value['name'];
   echo $value['email'];
   echo $value['review'];
}*/

while ($data = mysql_fetch_array($results))
{
    echo $data ['name']  . "<br />";
    echo $data['email'] . "<br />";
    echo $data ['review'] . "<br />";
}

mysql_close();