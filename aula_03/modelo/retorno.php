<?php

$NOME = $_REQUEST['NOME'];
$BEBIDA = $_REQUEST['BEBIDA'];
$NASC = $_REQUEST['ANO'];
$DataAtual = date("Y-m-d");
$IDADE = date_diff(date_create($NASC), date_create($DataAtual));

if (empty($NOME)) {
    $dados = array(
        "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
    );
} else {

    if ($IDADE->format('%y') >= 18) {
        $dados = array(
            "tipo" => 'maior.jpg',
            "B4" => 'alert-warning',
            "mensagem" => 'Bem vindo meu caro ' . $NOME . ', A sua bebida favorita é ' . $BEBIDA . ' e você é maior de idade, você pode encher a cara meu amigo!'  
        );
    } else {
        $dados = array(
            "tipo" => 'menor.jpg',
            "B4" => 'alert-warning',
            "mensagem" => 'Bem vindo meu caro ' . $NOME . ', A sua bebida favorita é: ' . $BEBIDA . ' e você é menor de idade, é melhor você sair daqui, antes que eu ligue para a polícia!'
        );
    }

}

echo json_encode($dados);