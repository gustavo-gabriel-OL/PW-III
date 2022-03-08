$(document).ready(function(){

    //monitorar o clique em cima do botão btn-send
    $('.btn-send').click(function(e){
        e.preventDefault()

        //coletar o que foi escrito e selecionado em nosso formulário
        let dados = $('#form').serialize()

        $.ajax({
            type:'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/retorno.php',
            success: function(){

            }

        })   
    })

})