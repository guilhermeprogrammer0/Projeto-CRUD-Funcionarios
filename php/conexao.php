<?php
$conexao = new mysqli("localhost","root","","crud-funcionarios");
if($conexao->connect_error){
    die("ERRO na conexao: " . $conexao->connect_ereror);
}
?>