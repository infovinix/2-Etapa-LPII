
<?php

include "conexao.php";

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "update produto set descricao = '$descricao', preco = '$preco' , estoque = '$estoque' where id = '$id'";
    $alterar = mysqli_query($conexao, $sql);

    if ($alterar) {
        echo "
            
            <script> 
                alert('Registro Alterado com Sucesso!');
                window.location = 'listar_produtos.php';
            </script>
            ";
    }
} else {
    echo "
        <p> Banco de Dados temporariamente fora do ar. Tente novamente mais tarde </p>
        <p> Clique <a href='produtos.php'> aqui </a> para acessar o formulário de cadastro </p>
        ";
}
?>