<?php

 $numero = $_REQUEST['numero'];

 for ($i=0; $i < 11; $i++) {

   $conta = $numero * $i;

   echo $numero . " x " . $i . " = " . $conta;

   echo '</br>';

}