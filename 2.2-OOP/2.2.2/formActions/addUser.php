<?php
include '../../2.2.1/autoload.php';
include '../config/SystemConfig.php';
$test2 = new User;
$test2->addUserFromForm();
$test2->commit();
header('HTTP/1.1 200 OK'); 
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/2.2-OOP/2.2.2/index.php');