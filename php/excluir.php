<?php
require_once "conexao.php";
require_once "funcoes.php";
excluir($conexao,$_REQUEST['id']);
?>
<script>window.location.href="principal.php"</script>