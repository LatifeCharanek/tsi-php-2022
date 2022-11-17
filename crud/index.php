<?php
//Controle de acesso/sessão
require '../controleDeSessao/controle.php';
require_once '../bancoDeDados/conecta.php';

$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos_escola');  

$alunos = [];

while( $registro = $stmt->fetch(PDO::FETCH_ASSOC) ){

    $alunos[] = $registro;
}

include 'listar.php';


