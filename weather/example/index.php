<?php header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE HTML>

<html>

<head>
  <title></title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="example.js"></script>
 <meta charset="utf-8" />
</head>

<body>

    <?php

 $data_file = 'http://weather.yandex.ru/static/cities.xml';
 $xml = simplexml_load_file($data_file);
  ?>


  <select id="country">
   <option value="0">--Выберите страну--</option>
   <?php foreach ( $xml->country  as $country )  { ?>
  <option value="<?php echo $country['name']; ?>"><?php echo $country['name']; ?></option>
<?php } ?>
  </select>




  <select id="city">
    <option value="0">--Выберите город--</option>
  </select>


  <div id="result">

  </div>

</body>

</html>