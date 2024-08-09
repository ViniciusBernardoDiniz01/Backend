<?php
// recebe as variaveis
$salario = 2500;
$hora_extra = 6;
// usa do if else elseif para descobrir se o trabalhador tem desconto
if ($salario > 2000 && $hora_extra > 5){
    echo "Trabalhador recebe um bonus de 10% <br/>";
}elseif ($salario < 2000 && $hora_extra > 10){
    echo"Trabalhador recebe um bonus de 20% <br/>";
}else{
    echo"Trabalhador não recebe bonus <br/>";
}


    
?>
