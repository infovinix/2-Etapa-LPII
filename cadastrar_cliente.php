<?php
include "conexao.php";

if (isset($_POST['nome'])) {

  $nome = trim($_POST['nome']);
  $cpf = trim($_POST['cpf']);
  $email = trim($_POST['email']);

  $sql =  "insert into cliente(nome,cpf,email) values ('$nome', '$cpf', '$email')";
  $cadastrar = mysqli_query($conexao, $sql);

  if ($cadastrar) {
    echo " 
      <script> 
        alert('Cliente Cadastrado com sucesso!');
        window.location = 'listar_cliente.php';
      </script>
      ";
  } else {
    echo "
          <p> Banco de dados temporariamente fora do ar. <br> Contate o suporte para reportar o ocorrido.</p>
          <p> Clique <a href='alunos.php'> aqui </a> para retornar ao site.</p>";
  }
} else {
  echo "
     <p> Esta é uma página de tratamento de dados</p>
      <p> Clique <a href='cliente.php'>aqui</a> para acessar o formulário de cadastro.</p>";
}
?>