<?php


require_once '../bancoDeDados/conecta.php';

$id = $_POST['id'] ?? 0;

$stmt = $bd->prepare('SELECT 
                        id, nome, turno, inicio 
                        FROM 
                        alunos
                        WHERE 
                        id = :id');

$stmt->bindParam(':id', $id);

$stmt->execute();

$aluno = $stmt->fetch(PDO:: FETCH_ASSOC);

//Fazer em casa
//mostrar um formulario HTML para o usuário com os dados do aluno selecionado para ser editado
//ao clicar "gravar" no formulario fazer o update no banco e voltar para a index com uma mensagem de erro ou sucesso

var_dump($aluno);




