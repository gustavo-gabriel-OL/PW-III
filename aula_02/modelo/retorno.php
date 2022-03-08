<?php

    $NOME = $_REQUEST ['NOME'];
    $ANIMAL =$_REQUEST ['ANIMAL'];

    if(empty($NOME)){
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
        );
    }else{

        switch($ANIMAL){
            case '1': $dados = array(
                "tipo" => 'cachorro.jpg',
                "mensagem" => 'Seja bem  vindo, '.$NOME.' , sabemos que o seu animal de preferência é o cachorro'
            );
            break;
            case '2': $dados = array(
                "tipo" => 'gato.jpg',
                "mensagem" => 'Seja bem  vindo, '.$NOME.' , sabemos que o seu animal de preferência é o gato'
            );
            break;
            case '3': $dados = array(
                "tipo" => 'peixe.jpg',
                "mensagem" => 'Seja bem  vindo, '.$NOME.' , sabemos que o seu animal de preferência é o peixe'
            );
            break;
            case '4': $dados = array(
                "tipo" => 'leão.jpg',
                "mensagem" => 'Seja bem  vindo, '.$NOME.' , sabemos que o seu animal de preferência é o leão'
            );
            break;
            case '5': $dados = array(
                "tipo" => 'foca.jpg',
                "mensagem" => 'Seja bem  vindo, '.$NOME.' , sabemos que o seu animal de preferência é a foca'
            );
            break;
            case '6': $dados = array(
                "tipo" => 'leopardo.jpeg',
                "mensagem" => 'Seja bem  vindo, '.$NOME.' , sabemos que o seu animal de preferência é o leopardo'
            );
            break;
            case '7': $dados = array(
                "tipo" => 'Elefante.jpg',
                "mensagem" => 'Seja bem  vindo, '.$NOME.' , sabemos que o seu animal de preferência é o elefante'
            );
            break;
            case '8': $dados = array(
                "tipo" => 'urso.jpg',
                "mensagem" => 'Seja bem  vindo, '.$NOME.' , sabemos que o seu animal de preferência é o urso'
            );
            break;
            case '9': $dados = array(
                "tipo" => 'harpia.jpg',
                "mensagem" => 'Seja bem  vindo, '.$NOME.' , sabemos que o seu animal de preferência é a harpia'
            );
            break;
        }

    }

    echo json_encode($dados);