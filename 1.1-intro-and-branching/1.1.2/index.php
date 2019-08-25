<?php
$day = date("N");
$hour = date("H");
if($hour >= 6 && $hour <11 ) {
    $greeting = "Доброе утро";
    $img = "https://cdn.pixabay.com/photo/2019/08/21/09/29/norway-4420668_960_720.jpg";
} elseif ($hour >= 11 && $hour < 18) {
    $greeting = 'Добрый день!';
    $img="https://cdn.pixabay.com/photo/2019/08/21/09/29/norway-4420668_960_720.jpg";
} elseif ($hour >= 18 && $hour < 23) {
    $greeting = 'Добрый вечер!';
    $img="https://cdn.pixabay.com/photo/2019/08/21/09/29/norway-4420668_960_720.jpg";
} else {
    $greeting = 'Доброй ночи!';
    $img="https://cdn.pixabay.com/photo/2019/08/21/09/29/norway-4420668_960_720.jpg";
}
switch ($day) {
    case  1:
        $day_of_week = 'Понедельник';
        break;
    case  2:
        $day_of_week = 'Вторник';
        break;
    case  3:
        $day_of_week = 'Среда';
        break;
    case  4:
        $day_of_week = 'Четверг';
        break;
    case  5:
        $day_of_week = 'Пятница';
        break;
    case  6:
        $day_of_week = 'Суббота';
        break;
    case  7:
        $day_of_week = 'Воскресенье';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <!-- подключение стилевого файла -->
</head>
<body style = "background-image: url(<?=$img?>)">
<div class= "greeting" style = "text-align: center">
<h1><?="$greeting Сегодня - $day_of_week" ?></h1>
<div>  
</body>
</html>