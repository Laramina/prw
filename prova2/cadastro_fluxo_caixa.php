<?php
  include('conexao.php');
        
        $data = $_POST['data'];
        echo '<p>Data: '.$data;
        
        $tipo = $_POST['tipo'];
        echo '<p>Tipo: '.$tipo;
        
        $valor = $_POST['valor'];
        echo '<p>valor: '.$valor;
        
        $historico = $_POST['historico'];
        echo '<p>Histórico: '.$historico;
        
        $cheque = $_POST['cheque'];
        echo '<p>Cheque: '.$cheque;
    
    $sql = " INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)
    VALUES ('".$data. "','".$tipo."','".$valor."','".$historico."','".$cheque."')";
     echo'<br>';
     echo'<br>';
    $result = mysqli_query($con, $sql);
    if($result)
      echo 'Dados inseridos com sucesso';
    else
    echo 'Erro ao inserir no banco de dados: '.mysqli_error($con);
        

?>