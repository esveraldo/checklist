/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

    $('#btn_info_gerais').click(function () {

        var rsocial = '';
        var cnpj = '';
        var endereco = '';
        var contato = '';
        var contato = '';
        var telefone = '';
        var email = '';
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if ($.trim($('#rsocial').val()).length == 0)
        {
            rsocial = 'Razão social é obrigatorio.';
            $('#error_rsocial').text(rsocial);
            $('#rsocial').addClass('has-error');
        } else
        {
            rsocial = '';
            $('#error_rsocial').text(rsocial);
            $('#rsocial').removeClass('has-error');
        }

        if ($.trim($('#cnpj').val()).length == 0)
        {
            cnpj = 'CNPJ é obrigatorio.';
            $('#error_cnpj').text(rsocial);
            $('#cnpj').addClass('has-error');
        } else
        {
            cnpj = '';
            $('#error_cnpj').text(cnpj);
            $('#cnpj').removeClass('has-error');
        }

        if ($.trim($('#endereco').val()).length == 0)
        {
            endereco = 'Endereço é obrigatorio.';
            $('#error_endereco').text(endereco);
            $('#endereco').addClass('has-error');
        } else
        {
            endereco = '';
            $('#error_endereco').text(endereco);
            $('#endereco').removeClass('has-error');
        }

        if ($.trim($('#contato').val()).length == 0)
        {
            contato = 'Contato é obrigatorio.';
            $('#error_contato').text(contato);
            $('#contato').addClass('has-error');
        } else
        {
            contato = '';
            $('#error_contato').text(contato);
            $('#contato').removeClass('has-error');
        }

        if ($.trim($('#telefone').val()).length == 0)
        {
            telefone = 'Telefone é obrigatorio.';
            $('#error_telefone').text(telefone);
            $('#telefone').addClass('has-error');
        } else
        {
            telefone = '';
            $('#error_telefone').text(telefone);
            $('#telefone').removeClass('has-error');
        }

        if ($.trim($('#email').val()).length == 0)
        {
            email = 'Email é obrigatorio.';
            $('#error_email').text(email);
            $('#email').addClass('has-error');
        } else
        {
            email = '';
            $('#error_email').text(email);
            $('#email').removeClass('has-error');
        }





        if (rsocial != '' || cnpj != '' || endereco != '' || contato != '' || telefone != '' || email != '')
        {
            return false;
        } else
        {
            $('#list_login_details').removeClass('active active_tab1');
            $('#list_login_details').removeAttr('href data-toggle');
            $('#login_details').removeClass('active');
            $('#list_login_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
        }
    });

    $('#previous_btn_personal_details').click(function () {
        $('#list_personal_details').removeClass('active active_tab1');
        $('#list_personal_details').removeAttr('href data-toggle');
        $('#personal_details').removeClass('active in');
        $('#list_personal_details').addClass('inactive_tab1');
        $('#list_login_details').removeClass('inactive_tab1');
        $('#list_login_details').addClass('active_tab1 active');
        $('#list_login_details').attr('href', '#login_details');
        $('#list_login_details').attr('data-toggle', 'tab');
        $('#login_details').addClass('active in');
    });

    $('#btn_personal_details').click(function () {
        var error_bilhetagem = '';
        var error_relatorios = '';
        var error_regras_imp = '';
        var error_tracking = '';
        var error_cracha = '';
        var error_disp_lib = '';
        var error_cotas = '';
        
        if ($("input[name='bilhetagem']:checked").is(":checked") == false)
        {
            error_bilhetagem = 'Escolha uma opção';
            $('#error_bilhetagem').text(error_bilhetagem);
            $('#bilhetagem').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_bilhetagem = '';
             $('#error_bilhetagem').text(error_bilhetagem);
        }
        
        if ($("input[name='relatorios']:checked").is(":checked") == false)
        {
            error_relatorios = 'Escolha uma opção';
            $('#error_relatorios').text(error_relatorios);
            $('#relatorios').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_relatorios = '';
             $('#error_relatorios').text(error_relatorios);
        }
        
        if ($("input[name='regras_imp']:checked").is(":checked") == false)
        {
            error_regras_imp = 'Escolha uma opção';
            $('#error_regras_imp').text(error_regras_imp);
            $('#regras_imp').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_regras_imp = '';
             $('#error_regras_imp').text(error_regras_imp);
        }
        
        if ($("input[name='tracking']:checked").is(":checked") == false)
        {
            error_tracking = 'Escolha uma opção';
            $('#error_poll').text(error_tracking);
            $('#tracking').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_tracking = '';
             $('#error_tracking').text(error_tracking);
        }
        
        if ($("input[name='lib_cracha']:checked").is(":checked") == false)
        {
            error_cracha = 'Escolha uma opção';
            $('#error_cracha').text(error_cracha);
            $('#lib_cracha').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_cracha = '';
             $('#error_cracha').text(error_cracha);
        }
        
        if ($("input[name='disp_liberacao']:checked").is(":checked") == false)
        {
            error_disp_lib = 'Escolha uma opção';
            $('#error_disp_lib').text(error_cracha);
            $('#disp_liberacao').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_disp_lib = '';
             $('#error_disp_lib').text(error_disp_lib);
        }
        
        if ($("input[name='alerta_cotas']:checked").is(":checked") == false)
        {
            error_cotas = 'Escolha uma opção';
            $('#error_cotas').text(error_cotas);
            $('#alerta_cotas').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_cotas = '';
             $('#error_cotas').text(error_cotas);
        }
        
        

        
       

        if (error_bilhetagem != '' || error_last_name != '')
        {
            return false;
        } else
        {
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_contact_details').removeClass('inactive_tab1');
            $('#list_contact_details').addClass('active_tab1 active');
            $('#list_contact_details').attr('href', '#contact_details');
            $('#list_contact_details').attr('data-toggle', 'tab');
            $('#contact_details').addClass('active in');
        }
    });

    $('#previous_btn_contact_details').click(function () {
        $('#list_contact_details').removeClass('active active_tab1');
        $('#list_contact_details').removeAttr('href data-toggle');
        $('#contact_details').removeClass('active in');
        $('#list_contact_details').addClass('inactive_tab1');
        $('#list_personal_details').removeClass('inactive_tab1');
        $('#list_personal_details').addClass('active_tab1 active');
        $('#list_personal_details').attr('href', '#personal_details');
        $('#list_personal_details').attr('data-toggle', 'tab');
        $('#personal_details').addClass('active in');
    });

    $('#btn_contact_details').click(function () {
        var error_address = '';
        var error_mobile_no = '';
        var mobile_validation = /^\d{10}$/;
        if ($.trim($('#address').val()).length == 0)
        {
            error_address = 'Address is required';
            $('#error_address').text(error_address);
            $('#address').addClass('has-error');
        } else
        {
            error_address = '';
            $('#error_address').text(error_address);
            $('#address').removeClass('has-error');
        }

        if ($.trim($('#mobile_no').val()).length == 0)
        {
            error_mobile_no = 'Mobile Number is required';
            $('#error_mobile_no').text(error_mobile_no);
            $('#mobile_no').addClass('has-error');
        } else
        {
            if (!mobile_validation.test($('#mobile_no').val()))
            {
                error_mobile_no = 'Invalid Mobile Number';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').addClass('has-error');
            } else
            {
                error_mobile_no = '';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').removeClass('has-error');
            }
        }
        if (error_address != '' || error_mobile_no != '')
        {
            return false;
        } else
        {
            $('#btn_contact_details').attr("disabled", "disabled");
            $(document).css('cursor', 'prgress');
            $("#register_form").submit();
        }

    });

});


