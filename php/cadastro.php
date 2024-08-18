<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
            <h1> Cadastro de Funcionários </h1>
    </header>
    <main class="cadastro">
        <form action="cadastro.php" method="POST">
            <div class="divCampos">
            <label for="nome"> Nome
                <input type="text" name="nome" class="formulario" id="nome" required>
            </label>
            </div>
            <div class="divCampos">
            <label for="email">E-mail
                <input type="text" name="email" class="formulario" id="email" required>
            </label>
            </div>
            <div class="divCampos">
            <label for="cargo">Cargo
                <input type="text" name="cargo" class="formulario" id="cargo" required>
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
        require_once "conexao.php";
        require_once "funcoes.php";
        if($_POST['salvar']){
            cadastrar($conexao,$_POST['nome'],$_POST['email'],$_POST['cargo']);
        }
    ?>
    

</body>
</html>