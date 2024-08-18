<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
            <h1> Edição de Funcionários </h1>
    </header>
    <?php
        require_once "conexao.php";
        $sqlExibir = "SELECT * FROM funcionarios WHERE id = ?";
        $stmtSqlExibir = $conexao->prepare($sqlExibir);
        $stmtSqlExibir->bind_param("i",$_REQUEST["id"]);
        $stmtSqlExibir->execute();
        $sqlDados = $stmtSqlExibir->get_result();
        $linha = $sqlDados->fetch_array();
    ?>
    <main class="cadastro">
        <form action="editar.php" method="POST">
        <div class="divCampos">
            <label for="nome"> 
                <input type="hidden" name="id" class="formulario" value="<?php echo $linha['id'];?>" id="id">
            </label>
            </div>
            <div class="divCampos">
            <label for="nome"> Nome
                <input type="text" name="nome" class="formulario" value="<?php echo $linha['nome'];?>" id="nome" required>
            </label>
            </div>
            <div class="divCampos">
            <label for="email">E-mail
                <input type="text" name="email" class="formulario" value="<?php echo $linha['email'];?>" id="email" required>
            </label>
            </div>
            <div class="divCampos">
            <label for="cargo">Cargo
                <input type="text" name="cargo" class="formulario" value="<?php echo $linha['cargo'];?>" id="cargo" required>
            </label>
            </div>
            <div class="divCampos">
                <input type="reset" class="btn btn-warning btnEstilo" value="Cancelar">
                <input type="submit" class="btn btn-success" value="Salvar" name="salvar">
            </div>
        </form>   
    </main>
    <?php
    error_reporting(0);
    require_once "funcoes.php";
        if($_POST['salvar']){
            editar($conexao,$_POST['id'],$_POST['nome'],$_POST['email'],$_POST['cargo']);
        }
    ?>
</body>
</html>