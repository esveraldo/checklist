/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

    $("#register_form").submit(function (event) {
        event.preventDefault(); //prevent default action 
        var post_url = $(this).attr("action"); //get form action url
        var request_method = $(this).attr("method"); //get form GET/POST method
        var form_data = new FormData(this); //Encode form elements for submission

        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,

        }).done(function (response) {
            console.log(response);
            $(".resposta").html('<div class="alert alert-success">Dados gravados com sucesso! <strong><a href="inicio-formulario" class="alert-link"> Click aqui para voltar </a></strong></div>');
            //$(".resposta").html(response);
            /*var data = JSON.parse(response);
            console.log(response);
            console.log(data);
            console.log(data.status);
            if (data.status === "success") {
                $(".resposta").html('<div class="alert alert-success">Dados gravados com sucesso!</div>');
            }
            if (data.status === "failed") {
                $(".resposta").html('<div class="alert alert-danger">Erro ao gravar os dados!</div>');
            }*/
        })
        .fail(function(response){
            console.log(response);
            $(".resposta").html('<div class="alert alert-danger">Erro ao gravar os dados!</div>');
        });
    });
});


