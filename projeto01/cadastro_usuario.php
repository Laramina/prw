<?php
 include ('conexao.php');
 $nome = $_POST['txtNome1'];
 $email = $_POST['txtEmail1'];
 $telefone = $_POST['txtTelefone1'];
 echo "<p>Nome do usuario: ".$nome."<BR>";
 echo "E-mail: ".$email."<BR>";
 echo "Telefone: ".$telefone."</p>";

 $sql = "INSERT INTO usuario (nome_usuario,email_usuario, telefone_usuario)
        VALUES ('".$nome."','".$email."','".$telefone."')";

        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados inseridos com sucesso";
        else
            echo "erro ao inserir no banco de dados: ".mysqli_error($con);

?>