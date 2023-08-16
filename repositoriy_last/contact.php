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
<div class="wi">
  <form action="/contact.php" method="get">
    <h3>введите данные и нажмите отправить</h3>
    <p>Я отвечу Вам в ближайщее время</p>
    <input type="text" name="name" placeholder="Имя" required>
    <input type="text" name="phone" placeholder="Телефон" required>
    <input type="text" name="email" placeholder="E-mail" required>
    <textarea placeholder="Комментарий" name="message" id="" cols="30" rows="10" required></textarea>
    <input type="submit" value="Отправить">
  </form>
</div>
<?php
if(isset($_GET['email']) &&  isset($_GET['phone']) && isset($_GET['message'])){
$to = "makar072008@mail.ru";
$tema = "Форма обратной связи на PHP"; 
$message = "Ваше имя: ".$_GET['name']."<br>";
$message .= "E-mail: ".$_GET['email']."<br>"; 
$message .= "Номер телефона: ".$_GET['phone']."<br>"; 
$message .= "Сообщение: ".$_GET['message']."<br>"; 
$headers = 'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
mail($to, $tema, $message, $headers); 


echo 'Отправлено';
}
?>
</div>
</body>
</html> 

