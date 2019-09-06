<?php
include '../2.2.1/autoload.php';
include './config/SystemConfig.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Форма</title>
  <style type="text/css">
    label {
      display: block;
      margin-top: 10px;
    }
	  button {
		  margin-top: 10px;
	  }
    .name {
      margin-top: 20px;
      margin-bottom: 20px;
      font-weight: bold;
    }
    .data {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
<form action="formActions/addUser.php" method="post">
  <label>Имя: <input type="text" name="name"></label>
  <label>Пароль: <input type="password" name="password"></label>
  <label>Электронная почта: <input type="email" name="email"></label>
  <label>Рейтинг: <input type="text" name="rate"></label>
  <button type="submit">Добавить пользователя</button>
</form>
<div>
<?php
$list = new Users;
$list->displaySortedList();
?>
</div>
</body>
</html>