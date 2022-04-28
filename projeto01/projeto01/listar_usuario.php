<?php
  include('conexao.php');
  $sql = 'SELECT * FROM usuario';
  $result = mysqli_query($con, $sql);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Usuario</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <h1>Listagem de Usuario</h1>
    <table align="center" border="1" width=500>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result))
        {
           echo"<tr>"; 
           echo"<th>". $row['id_usuario']. "</th>"; 
           echo"<th>". $row['nome_usuario']. "</th>";
           echo"<th>". $row['email_usuario']. "</th>"; 
           echo"<th>". $row['telefone_usuario']. "</th>";  
           echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>