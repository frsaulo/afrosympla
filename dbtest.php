<?php
try {
    $connect = mysqli_connect('127.0.0.1', 'root', 'root');
    if (!$connect) {
        echo 'Failed: ' . mysqli_connect_error();
    } else {
        echo 'Success!';
    }
} catch (Exception $e) {
    echo 'Exception: ' . $e->getMessage();
}
