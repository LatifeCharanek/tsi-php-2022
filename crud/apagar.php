<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php'; 

//Apenas para ficar mais facil de trabalhar com o dado
//enviado pelo usuario 
$id = $_GET['id'] ?? 0;
//Evito que seja recebido em $id qualquer coisa que seja
//diferente de números (dígitos)
$id = preg_replace('/\D/', '',$id);

if ($bd ->exec("DELETE FROM alunos_escola WHERE id = $id")){

     $apagado = true;

}else{

     $apagado = false; 
}

include 'index.php';
