<?php

    $NOME = $_REQUEST['NOME'];
    $DATA = $_REQUEST['DATA'];
    $BEBIDA = $_REQUEST['BEBIDA'];

    $IDADE = 2022 - ("Y", $DATA);

    if(empty($NOME)){
        $dados = array(
            "tipo" => "error", 
            "mensagem" => "Existe(m) campo(s) obrigatório(s) não preenchido(s)."
        );
    }
    else{
        if($IDADE <= 17){ $dados=array(
            "tipo" => "menor.png",
            "mensagem" => "Você é menor de idade meu/minha consagrado(a), você NÃO pode beber bebidas alcoólicas S! Pois você tem só " .$IDADE. " anos."
        );
        }
        else { $dados=array(
            "tipo" => "maior.png",
            "mensagem" => "Pode beber meu/minha consagrado(a), você é maior de idade, além do mais, você tem " .$IDADE. " anos."
        );
        }
    }

    echo json_encode($dados);