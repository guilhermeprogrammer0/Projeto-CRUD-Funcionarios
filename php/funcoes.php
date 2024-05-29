<?php
function cadastrar($conexao,$nome,$email,$cargo){
    $sqlVerificar = "SELECT email FROM funcionarios WHERE email = '$email'";
    $sqlVerificado = mysqli_query($conexao,$sqlVerificar);
    $qtdLinhas = mysqli_num_rows($sqlVerificado);
    if($qtdLinhas>=1){
        ?>
        <script>alert("E-mail indisponível! Tente outro.");</script>
        <?php
    }
    else{
        $sqlCadastrar = "INSERT INTO funcionarios VALUES(DEFAULT,'$nome','$email','$cargo')";
        $sqlCadastrado = mysqli_query($conexao,$sqlCadastrar);
        if($sqlCadastrado){
            ?>
            <script>alert("Funcionário cadastrado com sucesso!");</script>
            <?php
        }
        else{
            ?>
            <script>alert("Erro o cadastrar! Tente novamente.");</script>
            <?php
        }
    }
}
function editar($conexao,$id,$nome,$email,$cargo){
    $sqlAtualizar = "UPDATE funcionarios set nome='$nome', email='$email', cargo='$cargo' WHERE id = '$id'";
    $sqlAtualizado = mysqli_query($conexao,$sqlAtualizar);
    if($sqlAtualizado){
        ?>
        <script>alert("Funcionário editado com sucesso!");
        window.location.href="principal.php";
        </script>
        
        <?php
    }
    else{
        ?>
        <script>alert("Erro ao editar! Tente novamente.");</script>
        <?php
    }
}
function excluir($conexao,$id){
   $sqlExcluir = "DELETE FROM funcionarios WHERE id='$id'";
   $sqlExcluido = mysqli_query($conexao,$sqlExcluir);
   if($sqlExcluido){
    ?>
        <script>alert("Funcionário excluido com sucesso!");</script>
        <?php
   }
   else{
    ?>
    <script>alert("Erro ao excluir! Tente novamente.");</script>
    <?php
   }
}



?>