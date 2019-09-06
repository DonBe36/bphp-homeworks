<?php
include 'autoload.php';
include 'config/SystemConfig.php';
$accessData = new JsonFileAccessModel('data_to_access');
$accessData->write('hello');
echo $accessData->read();