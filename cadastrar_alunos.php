<?php
include "conexao.php";

if (isset($_POST['nome'])) {
  $nome = trim($_POST['nome']);
  $telefone = trim($_POST['telefone']);
  $email = trim($_POST['email']);

  $sql =  "insert into aluno(nome,telefone,email) values ('$nome', '$telefone', '$email')";
  $cadastrar = mysqli_query($conexao, $sql);

  if ($cadastrar) {
    echo " 
      <script> 
        alert('Aluno Cadastrado com sucesso!');
        window.location = 'listar_alunos.php';
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
      <p> Clique <a href='alunos.php'>aqui</a> para acessar o formulário de cadastro.</p>";
}
?>