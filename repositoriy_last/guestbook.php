<?php
require_once __DIR__ .'/db.class.php';
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guestbook';
DB::$host = 'localhost';
DB::$encoding = 'utf8';
?>
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
        <h5>Гостевая книга</h5>

<?php
if(isset($_GET['name']) && isset($_GET['message'])){
  DB::insert('guestbook', [
    'name' => $_GET['name'],
    'message' => $_GET['message']
  ]);
  echo 'Отправлено';
  }


  
$db = DB::query("SELECT * FROM guestbook");
foreach ($db as $key => $value) {
  echo 'Дата: '.$value['date'].'<br>';
  echo 'Имя: '.$value['name'].'<br>';
  echo 'Сообщение: '.$value['message'].'<br><br><hr><br>';
}

?>




<div class="wi">
  <form action="/guestbook.php" method="get">
    <h3>введите сообщение и нажмите отправить</h3>
    <input type="text" name="name" placeholder="Имя" required>
    <textarea placeholder="Комментарий" name="message" id="" cols="30" rows="10" required></textarea>
    <input type="submit" value="Отправить">
  </form>
</div>
      </div>


    </div>
</body>

</html>