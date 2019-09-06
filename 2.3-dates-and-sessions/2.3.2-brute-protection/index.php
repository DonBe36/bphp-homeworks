<?php
$users = [
    'admin' => 'admin1234',
    'randomUser' => 'somePassword',
    'janitor' => 'nimbus2000'
];
$login = $_POST['login'];
$password = $_POST['password'];
if ($password == $users[$login]) {
    echo 'ok';
} else {
    $timepoint = time();
    if (isset($_COOKIE['time'])) {
        $time_arr = unserialize($_COOKIE['time']);
        if (count($time_arr) > 2) {
            array_shift($time_arr);
        }
        array_push($time_arr, $timepoint);
        setcookie('time', serialize($time_arr));
        $diff1 = ($time_arr[2]) ? $time_arr[2] - $time_arr[0] : 0;
        $diff2 = $time_arr[1] - $time_arr[0];
        $diff3 = ($time_arr[2]) ? $time_arr[2] - $time_arr[1] : 0;
        if ($diff1 <= 60000 || $diff2 <= 5000 || $diff3 <= 5000) {
            echo 'Слишком часто вводите пароль. Попробуйте еще раз через минуту.';
            $handle = fopen('data.txt', 'a');
            $spotted = date('d.m.Y H:i:s', $timepoint);
            fwrite($handle, $spotted);
            fclose($handle);
        } else {
            echo 'неверный пароль';
        }
    } else {
        echo 'неверный пароль';
        $time_arr = array();
        array_push($time_arr, $timepoint);
        setcookie('time', serialize($time_arr));
    }
}