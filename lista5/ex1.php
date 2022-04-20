<?php
    $produtos = array('mouse', 'teclado', 'mousepad', 'monitor', 'webcam', 'headset', 'fone', 'caixinha de som', 'microfone');
    $pesquisa = $_POST['txtPesquisa1'];
    $pesquisa = strtolower($pesquisa);

    $indice = array_search($pesquisa, $produtos);
    $indice++;
    if($indice) {
        echo "Produto encontrado!<br>Código do produto: ".($indice-1);
    } else {
        echo "Produto não encontrado!";
    }