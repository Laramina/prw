<?php
   include('conexao.php');
   $id_usuario = $_GET['id_usuario'];
   $sql = 'SELECT * FROM usuario where id_usuario ='.$id_usuario;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilo.css"> 
</head>
<body>
     <h1>Alteração de Usuario</h1>
     <form method="post" action="cadastro_usuario.php">
      <fieldset><legend>Preencha as informações abaixos</legend>  
     <div>
        <label for="nome">Nome:</label>
        <input name="tNome1"  value="<?php echo $row['nome_usuario']?>" type="text" placeholder="informe seu nome" size="50">
    </div>
</br>
    <div>
        <label for="email">E-mail:</label>
        <input name="tEmail1" value="<?php echo $row['email_usuario']?>"  type="text" placeholder="@gmail.com" size="50">
    </div>
</br>
    <div>
        <label for="telefone">Telefone:</label>
        <input name="tTelefone1" value="<?php echo $row['telefone_usuario']?>"  type="text" placeholder="numero" size="30">
    </div>
</br>
    <div id="botao">            
        <button  type="submit">enviar</button>
    </div>
    </fieldset>
   </form>
</body>
</html>