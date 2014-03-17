<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Отзывы моей гостевой книги</title>
    <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
    <h1>Отзывы моей гостевой книги</h1>
    <div class="review">
        <?php
            include 'php/get_comments.php';
        ?>
    </div>
</body>
</html>