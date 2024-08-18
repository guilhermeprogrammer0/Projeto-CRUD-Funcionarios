<?php
function cadastrar($conexao,$nome,$email,$cargo){
    $sqlVerificar = "SELECT email FROM funcionarios WHERE email = ?";
    $stmtVerificar = $conexao->prepare($sqlVerificar);
    $stmtVerificar->bind_param("s",$email);
    $stmtVerificar->execute();
    $resultado = $stmtVerificar->get_result();
    if($resultado->num_rows>0){
        ?>
        <script>alert("E-mail indisponível! Tente outro.");</script>
        <?php
        $stmtVerificar->close();
    }
    else{
        $sqlCadastrar = "INSERT INTO funcionarios VALUES(DEFAULT,?,?,?)";
        $stmtCadastrar = $conexao->prepare($sqlCadastrar);
        $stmtCadastrar->bind_param("sss",$nome,$email,$cargo);
        if($stmtCadastrar->execute()){
            ?>
            <script>alert("Funcionário cadastrado com sucesso!");
              window.location.href="principal.php";
            </script>
            <?php
        }
        else{
            ?>
            <script>alert("Erro o cadastrar! Tente novamente.");</script>
            <?php
        }
    }
    $stmtCadastrar->close();
}
function editar($conexao,$id,$nome,$email,$cargo){
    $sqlAtualizar = "UPDATE funcionarios set nome=?, email=?, cargo=? WHERE id = ?";
    $stmtAtualizar = $conexao->prepare($sqlAtualizar);
    $stmtAtualizar->bind_param("sssi",$nome,$email,$cargo,$id);
    if( $stmtAtualizar->execute()){
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
    $stmtAtualizar->close();
}
function excluir($conexao,$id){
   $sqlExcluir = "DELETE FROM funcionarios WHERE id=?";
   $stmtExcluir = $conexao->prepare($sqlExcluir);
   $stmtExcluir->bind_param("i",$id);
   if($stmtExcluir->execute()){
    ?>
        <script>alert("Funcionário excluido com sucesso!");</script>
        <?php
   }
   else{
    ?>
    <script>alert("Erro ao excluir! Tente novamente.");</script>
    <?php
   }
   $stmtExcluir->close();
}

?>