<?php

$NOME = $_REQUEST['NOME'];
$BEBIDA = $_REQUEST['BEBIDA'];
$NASC = $_REQUEST['ANO'];
$DataAtual = date("Y-m-d");
$IDADE = date_diff(date_create($NASC), date_create($hoje));

if (empty($NOME)) {
    $dados = array(
        "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
    );
} else {

    if ($IDADE->format('%y') >= 18) {
        $dados = array(
            "B4" => 'alert-success',
            "mensagem" => 'Bem vindo, ' . $NOME . ', A sua bebida favorita é: ' . $BEBIDA
        );
    } else {
        $dados = array(
            "B4" => 'alert-danger',
            "mensagem" => 'você não deveria estar aqui! ' . $NOME . ', você é de menor!'
        );
    }

}

echo json_encode($dados);