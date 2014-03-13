<h2>Прогноз погоды для города Брянск</h2>

<?php require_once 'weather.php';

$w_city_id = 26898;
// Идентификатор города (в нашем случае Брянск)  - можно узнать по адресу http://weather.yandex.ru/static/cities.xml

$col = 4 ;
// количество дней, на сколько нужен прогноз

$day_of_the_week_array = array(
1 => 'понедельник',
2 => 'вторник',
3 => 'среда',
4 => 'четверг',
5 => 'пятница',
6 => 'суббота',
7 => 'воскресенье'
); // Массив дней недели (для вывода)

$time_of_day = array(
0 => 'утро',
1 => 'день',
2 => 'вечер',
3 => 'ночь'
); // Массив времени суток (для вывода)



$out = get_weather($w_city_id, $col, $day_of_the_week_array, $time_of_day)  ;
/*
заполняем масив при помощи функции, первый параметр обязательный - индентификатор города
другие параметры необязательны - в этом случае используется значения по умолчанию
*/
?>
<?php foreach ($out as $key => $value) { ?>
<strong><?php echo $value['day']; ?>.<?php echo $value['month']; ?>.<?php echo $value['year']; ?>,  <?php echo $value['day_of_week']; ?>  </strong>
<br />
<?php foreach ($value['weather'] as $key1 => $value1) { ?>
<?php echo $value1['time_of_day']; ?>
<img src="http://yandex.st/weather/1.1.78/i/icons/48x48/<?php echo $value1['image']; ?>.png" width="48" height="48" />
<?php echo $value1['temp_from'] ; ?> ... <?php echo $value1['temp_to'] ; ?>
<br /><br />
<?php } ?>
<br /><br />
<?php } ?>