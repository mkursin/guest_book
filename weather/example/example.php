<?php require_once '../weather.php';

$city = $_POST["city_id"];

 if ($city != '0') {
$out = get_weather($city)  ;


foreach ($out as $key => $value) { ?>
<div style="float: left; border: 1px solid #AAA; border-radius: 5px; margin: 10px; padding: 10px; width: 250px;">
<strong><?php echo $value['day']; ?>.<?php echo $value['month']; ?>.<?php echo $value['year']; ?>,  <?php echo $value['day_of_week']; ?>  </strong>
<br />
<?php foreach ($value['weather'] as $key1 => $value1) { ?>
<?php echo $value1['time_of_day']; ?>
<img src="http://yandex.st/weather/1.1.78/i/icons/48x48/<?php echo $value1['image']; ?>.png" width="48" height="48" />
<?php echo $value1['temp_from'] ; ?> ... <?php echo $value1['temp_to'] ; ?>
<br /><br />
<?php } ?>
</div>
<?php }}   ?>


