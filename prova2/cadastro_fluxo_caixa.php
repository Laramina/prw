<?php 
   include('conexao.php');

    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    echo "<h1> Cadastro </h1>";
    echo "<p> Data: " . $data . "<br>";
    echo "<p> Tipo: " . $tipo . "<br>";
    echo "<p> Valor: " . $valor . "<br>";
    echo "<p> Histórico: " . $historico . "<br>";
    echo "<p> Cheque: " . $cheque . "<br>";

	
	$sql = "INSERT INTO integer (data,tipo,valor,historico,cheque) 
	        VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>