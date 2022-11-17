<?php
session_start();


if( !isset($_SESSION['id']) ){

    header('Location: /tsi-php-2022/login');
    exit();
}