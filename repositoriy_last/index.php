 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/css/style.css">
</head>
<body>
<header>
<div class="head wi">
  <ul>
    <li><a href="/">Главная</a></li>
    <li><a href="/about.php">Обо мне</a></li>
    <li><a href="/foto.php">Фото</a></li>
    <li><a href="/dostijeniya.php">Достижения</a></li>
    <li><a href="/contact.php">Контакты</a></li>
    <li><a href="/guestbook.php">Гостевая книга</a></li>
  </ul>
</div>

</header>
<div class="main">
 <br>   
<div>

<div class="wi">
	<h5>Вступление</h5>
 <p> Это мой личный сайт-визитка, здесь я расскажу о себе, о моём городе и увлечениях, так же вы сможете оставить свой комментарий в гостевой книге </p>
</div>
</div>
</br>
<br>
<div class="wi">
  <h5>О городе</h5>
  Уфа - один из самых красивых городов в России, там есть очень много красивых и уникальных сооружений, по типу монумента дружбы
  или памятника Салавату Юлаеву, Мечети Ар-Рахима. Также у нас в 
  городе есть множество парков, арт обьектов и больших торговых центров, такие как Арт Квадрат, Гостиный Двор и Парк Якутова.
  К тому же в Уфе есть набержная, которую построили относительно недавно, там очень красивые пейзажы и виды на Белую Реку.
  Загородом у нас красивые леса и поля, сады, реки и озёра - одним словом природа невиданной красоты.
</div>
</br>
<br>
<div class="wi">
<?php
    $url = 'https://www.youtube.com/watch?v=IPmkIW0f8Kk';

    $parsed_url = parse_url($url);
    parse_str($parsed_url['query'], $parsed_query);
    echo '<iframe src="http://www.youtube.com/embed/' . $parsed_query['v'] . '" type="text/html" width="700" height="300" frameborder="0"></iframe>';
?>
</div>
</br>
<br>
<div class="wi">
<script type="text/javascript" charset="utf-8" async src=
"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abb3b749923d88
45161d15437a336f3ab847b94f4cb3b464fafc693972f733007&amp;
width=700&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
</div>
</br>

</div>
</body>
</html> 

