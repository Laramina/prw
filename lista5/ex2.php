<?php
    $produtos = array('mouse', 'teclado', 'mousepad', 'monitor', 'webcam', 'headset', 'fone', 'caixinha de som', 'microfone');
    $pesquisa = $_POST['txtPesquisa1'];
    $pesquisa = strtolower($pesquisa);
    $preco = array('100', '50', '80', '40', '29', '20', '10', '200', '300');

   
    $indice = array_search($pesquisa, $produtos);
    $indice++;
    if($indice) {
        echo "Produto encontrado!<br>Codigo do produto: ".($indice-1)."<br>Preço: R$".number_format($preco[$indice-1]);
    } else {
        echo "Produto não encontrado!";
    }
?>