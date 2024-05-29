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
            <h1> Funcionários </h1>
    </header>
    <main class="cadastro">
        <form action="cadastro.php" method="POST">
            <label for="nome">
                <input type="text" name="nome" class="formulario" id="nome">
            </label>
            <label for="email">
                <input type="text" name="email" class="formulario" id="email">
            </label>
            <label for="cargo">
                <input type="text" name="cargo" class="formulario" id="cargo">
            </label>

        </form>   
    </main>
    
    




</body>
</html>