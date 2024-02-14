<?php

    $pessoa = [
        'nome' => 'Adriana',
        'idade' => 50, 
        'profissao' => 'Desenvolvedora',
        'graduacao' => 'Sistema da Informação'
    ];   

    $maioridade = 18;

    // desafio
    if($pessoa['idade'] >= $maioridade) {
        echo "A pessoa é maior de idade!";
    } 
    
?>
