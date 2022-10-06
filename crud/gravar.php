<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php'; 


//Dados provenientes do furmulario HTML
$nome =$_POST['nome'];
$turno =$_POST['turno'];
$inicio =$_POST['inicio'];


$consulta =
    $bd ->prepare('INSERT INTO alunos_escola
                (nome,turno, inicio)
                VALUE
                    (:nome, :turno, :inicio)');
                    
/*A funcao $bd->prepare()retorna outra variavel(objeto),
 essa outra variavel consegue juntar os dados do usuario
com a consulta SQL*/


$consulta->bindParam(':nome', $nome);
$consulta->bindParam(':turno', $turno); 
$consulta->bindParam(':inicio', $inicio); 

/*
A funcao $consulta->bindParam()substitui os
rotulos(ex:":nome")pelos dados inseguros 
*/

if($consulta ->execute()){
    echo "Gravou com sucesso!";
}else{
    echo "ERRO ao gravar no banco de dados";
}
//Finalmente executamos a consulta no SGBD 

