<?php

    class Pessoa {

        function falar() {
            echo "Olá pessoal!";
        }
    }
   
    $adriana = new Pessoa();

    $adriana->nome = "Adriana";

    echo $adriana->nome;
    echo "<br>";

    $adriana->falar();
    
?>
