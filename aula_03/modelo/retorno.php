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
            "B4" => 'alert-success',
            "mensagem" => 'Bem vindo meu caro ou minha cara ' . $NOME . ', A sua bebida favorita é: ' . $BEBIDA . ' e você tem ' .$IDADE. ' anos.'  
        );
    } else {
        $dados = array(
            "B4" => 'alert-danger',
            "mensagem" => 'Seja bem vindo ' . $NOME . ', você tem ' .$IDADE. 'anos e não pode beber ainda, aliás, você gosta de ' .$BEBIDA
        );
    }

}

echo json_encode($dados);