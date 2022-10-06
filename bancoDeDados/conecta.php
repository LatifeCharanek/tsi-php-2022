<?php 

//Dados para nos conectarmos ao SGBD
$dsn =  'mysql:dbname=senac;host=localhost;port=3308';
$user = 'root';
$pass = '';

//Conectamnos ao SGBD
$bd = new PDO ($dsn, $user,$pass);
