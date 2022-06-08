<?php
    include('conexao.php');
    
	$id_integer = $_GET['id_prova2'];

    $sql = 'DELETE FROM integer WHERE id_prova2='.$id_prova2;
    
	echo "<h1> Exclusão de Usuário </h1>";
	$result = mysqli_query($con, $sql);
	
	if($result)
		echo "Registro excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir usuário: ".mysqli_error($con)."<br>";
  
?>
<a href='listar_fluxo_caixa.php'> Voltar</a>