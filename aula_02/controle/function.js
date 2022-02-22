$(document).ready(function(){

    //monitorar o clique em cima do botão btn-send
    $('.btn-send').click(function(e){
        e.preventDefault()

        //coletar o que foi escrito e selecionado em nosso formulário
        let dados = $('#form').serialize()

        console.log(dados)
    })

})