<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    echo "<h1> Cadastro Agenda</h1>";
    echo "<p> Nome: " . $nome . "<br>";
    echo "<p> Apelido: " . $apelido . "<br>";
    echo "<p> Endereço: " . $endereco . "<br>";
    echo "<p> Bairro: " . $bairro . "<br>";
    echo "<p> Cidade: " . $cidade . "<br>";
    echo "<p> Estado: " . $estado . "<br>";
    echo "<p>Telefone: " . $telefone . "</p>";
    echo "<p> Celular: " . $celular . "<br>";
    echo "<p> Email: " . $email . "<br>";

	
	$sql = "INSERT INTO agenda (nome,apelido,endereco,bairro,cidade,estado,telefone,celular,email) 
	        VALUES ('".$nome."','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>