<?php
    include('conexao.php');
    
	$id_fluxo_caixa = $_GET['id_fluxo_caixa'];

    $sql = 'DELETE FROM fluxo_caixa WHERE id_fluxo_caixa='.$id_fluxo_caixa;
    
	echo "<h1> Exclusão de Usuário </h1>";
	$result = mysqli_query($con, $sql);
	
	if($result)
		echo "Registro excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir usuário: ".mysqli_error($con)."<br>";
  
?>
<br>
<a href='listar_fluxo_caixa.php'> Voltar</a>


