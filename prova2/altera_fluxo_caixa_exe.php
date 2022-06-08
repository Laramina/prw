<?php
    include('conexao.php');

    $id_prova2 = $_POST['id_prova2'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
        
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Data: " . $data . "<p>";    
  if(strlen($fotoNome)>0){
    $sql = "UPDATE prova2 SET
            data='".$data."',
            tipo='".$tipo."',
            valor='".$valor."',
            historico='".$historico."',
            cheque='".$cheque."',
            WHERE id_prova2=".$id_prova2;
  }
  else{
    $sql = "UPDATE prova2 SET
            data='".$data."',
            tipo='".$tipo."',
            valor='".$valor."',
            historico='".$historico."',
            cheque='".$cheque."',
            WHERE id_prova2=".$id_prova2;
  }
        
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
<a href='index.php'> Voltar</a>