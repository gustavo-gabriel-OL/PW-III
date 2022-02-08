<?php

$numero = $_REQUEST ['numero'];

if($numero % 2 == 0){
    echo "o número ".$numero." é par.";
}else{
    echo "o número ".$numero." é ímpar.";
}