<?php

   include('conexao.php');
   $nome = $_POST['tNome1'];
   echo '<p>Nome do Usuário: '.$nome;

   $email = $_POST['tEmail1'];
   echo '<p>E-mail: '.$email;

   $telefone = $_POST['tTelefone1'];
   echo '<p>Telefone: '.$telefone;

   $sql = " INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
    VALUES ('".$nome. "','".$email."','".$telefone."')";
     echo'<br>';
     echo'<br>';
    $result = mysqli_query($con, $sql);
    if($result)
      echo 'Dados inseridos com sucesso';
    else
    echo 'Erro ao inserir no banco de dados: '.mysqli_error($con);
    
        

?>

<p><a href='index.php'> Voltar</a></p>