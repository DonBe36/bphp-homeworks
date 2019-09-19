<?php
require './Person.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 3.2.1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<? $newPerson = new Person('Иван', 'Иванов', '') ?>
<h2><span class="gender-<?php echo $newPerson->getGender()?>"><?php echo $newPerson->getGenderSymbol()?></span> <?php echo $newPerson->GetFIO() ?></h2>
</body>
</html>