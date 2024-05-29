<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
            <h1> Funcionários </h1>
    </header>
    <main class="lista">
        <section class="btnCadastrar">
           <a href="cadastro.php"> <button class="botaoCadastrar">Cadastrar</button></a>
        </section>
        <section class="tabelaDados">
        <table class="table table-striped">
        <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Cargo</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <?php 
  require_once "conexao.php";
  $sqlExibir = "SELECT * FROM funcionarios";
  $sqlDados = mysqli_query($conexao,$sqlExibir);
  while($linha = mysqli_fetch_array($sqlDados)){
  ?>
  <tbody>
    <tr>
        <td><?php echo $linha['id'];?></td>
        <td><?php echo $linha['nome'];?></td>
        <td><?php echo $linha['email'];?></td>
        <td><?php echo $linha['cargo'];?></td>
        <td><button class="btn btn-warning" onclick="editar(<?php echo $linha['id'];?>)">Editar </td>           
        <td><button class="btn btn-danger" onclick="excluir(<?php echo $linha['id'];?>)"> Excluir</td>
    </tr>
    <?php }?>
  </tbody>
        </table>
    </section>
    </main>
    
    



    <script src="../js/acoes.js"></script>
</body>
</html>