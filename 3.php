<?php

$valor = 13;

switch ($valor){
    case $valor % 2 == 0:
        echo "Par";
        break;
    
    case $valor % 2 != 0:
        echo "impar";
    }
?>