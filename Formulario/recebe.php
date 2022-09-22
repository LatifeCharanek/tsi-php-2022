<?php

echo "Seja bem-vindo " .   $_POST['nomeUsuario']. '!<br><br>';

echo "Voce tem {$_POST['idadeUsuario']} anos , CPF: {$_POST['cpfUsuario']}<br>";

echo "E o periodo escolhido foi o {$_POST['periodoUsuario']}";

$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

//$_SERVER possui muitas variaveis de ambiente que podem ser muito importante para você em algum momento
//ex: IP do requisitante 

$arquivo =fopen ('alunos.csv','a'); //abra o arquivo para append
fwrite($arquivo, "$nome;$idade;$cpf;$periodo\r\n");
fclose($arquivo);