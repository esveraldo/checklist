/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    
    $('#btn_contact_details').on('click', function(e){
        e.preventDefault();
        var data = $('#register_form').serialize();
        $(".resposta").html('<h5 class="text-success">Enviando sua mensagem...</h5>');
        var url = 'result.php';
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            dataType: 'json',
            error: function (error) {
                //alert('Erro ao tentar enviar requisição.');
                console.log(error);
                $(".resposta").html('<div class="alert alert-danger">Erro ao tentar enviar requisição.' + error + '</div>');
            },

            success: function (data) {
                if (data['status'] === "success") {
                    $(".resposta").html('<h5 class="text-success">' + data['message'] + '</h5>');
                    $(".loading").fadeOut();
                    $("#register_form")[0].reset();
                } 
                if (data['status'] === "failed") {
                    $(".resposta").html('<h5 class="text-danger">' + data['message'] + '</h5>');
                    $(".loading").fadeOut();
                }
                $(".resposta").html('<h5 class="text-success">Sua mensagem foi enviada com sucesso.</h5>');
            },
            beforeSend: function () {
                //Loader
                    $(".loading").html('<img src="assets/images/45.gif" />');
            },
            complete: function () {
            }
        });
    });
    
});


