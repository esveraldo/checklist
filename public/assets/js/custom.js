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
            $('#error_cnpj').text(cnpj);
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
             $('#bilhetagem').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
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
             $('#relatorios').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
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
             $('#regras_imp').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
        }
        
        if ($("input[name='tracking']:checked").is(":checked") == false)
        {
            error_tracking = 'Escolha uma opção';
            $('#error_tracking').text(error_tracking);
            $('#tracking').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_tracking = '';
             $('#error_tracking').text(error_tracking);
             $('#tracking').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
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
              $('#lib_cracha').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
        }
        
        if ($("input[name='dispositivos_liberacao']:checked").is(":checked") == false)
        {
            error_disp_lib = 'Escolha uma opção';
            $('#error_disp_lib').text(error_disp_lib);
            $('#disp_liberacao').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_disp_lib = '';
             $('#error_disp_lib').text(error_disp_lib);
             $('#disp_liberacao').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
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
             $('#alerta_cotas').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
        }
        


        if (error_bilhetagem != '' || error_relatorios != '' || error_regras_imp != '' || error_tracking != '' || error_cracha != '' || error_disp_lib != '' || error_cotas != '')
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
        var error_sites = '';
        var error_impressao = '';
        var error_sem_server_imp = '';
        var error_sis_op = '';
        var error_server_dominio = '';
        var error_qtde_users = '';
        var error_qtde_contas = '';
        var error_qtde_grupos = '';
        var error_qtde_estacoes_trabalho = '';
        var error_sis_op_est_trabalho = '';
        var error_navegadores_utilizados = '';
        var error_antivirus_utilizado = '';
        var error_erp_utilizado = '';
        var error_plataforma_erp = '';
        var error_impressao_erp = '';
        var error_forma_desej_bilhetagem_erp = '';
        var error_amb_impressao_extraordinario = '';
        var error_mod_e_qtde_de_impressoras = '';
        var error_mod_e_qtde_de_impressoras_usb = '';
        var error_descricao_restricao = '';
        var error_objetivo_projeto = '';
        var error_observacoes_adicionais = '';
     
        if ($.trim($('#sites').val()).length == 0)
        {
            error_sites = 'Sites é obrigatório';
            $('#error_sites').text(error_sites);
            $('#sites').addClass('has-error');
        } else
        {
            error_sites = '';
            $('#error_sites').text(error_sites);
            $('#sites').removeClass('has-error');
        }
        
        if ($.trim($('#impressao').val()).length == 0)
        {
            error_impressao = 'Impressao é obrigatório';
            $('#error_impressao').text(error_impressao);
            $('#impressao').addClass('has-error');
        } else
        {
            error_impressao = '';
            $('#error_impressao').text(error_impressao);
            $('#impressao').removeClass('has-error');
        }
        
        if ($.trim($('#sem_server_imp').val()).length == 0)
        {
            error_sem_server_imp = 'Sem servidor de impressão é obrigatório';
            $('#error_sem_server_imp').text(error_sem_server_imp);
            $('#sem_server_imp').addClass('has-error');
        } else
        {
            error_sem_server_imp = '';
            $('#error_sem_server_imp').text(error_sem_server_imp);
            $('#sem_server_imp').removeClass('has-error');
        }
        
        if ($.trim($('#sis_op').val()).length == 0)
        {
            error_sis_op = 'Sistema operacional dos servidores de impressão é obrigatório';
            $('#error_sis_op').text(error_sis_op);
            $('#sis_op').addClass('has-error');
        } else
        {
            error_sis_op = '';
            $('#error_sis_op').text(error_sem_server_imp);
            $('#sis_op').removeClass('has-error');
        }
        
        if ($("input[name='server_dominio_autenticacao']:checked").is(":checked") == false)
        {
            error_server_dominio = 'Servidore de dominio / autenticação é obrigatório';
            $('#error_server_dominio').text(error_server_dominio);
            $('#server_dominio').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_server_dominio = '';
            $('#error_server_dominio').text(error_server_dominio);
            $('#server_dominio').removeClass('has-error');
            $('#server_dominio').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
        }
        
        if ($.trim($('#qtde_users').val()).length == 0)
        {
            error_qtde_users = 'Quantidade de usuários é obrigatório';
            $('#error_qtde_users').text(error_qtde_users);
            $('#qtde_users').addClass('has-error');
        } else
        {
            error_qtde_users = '';
            $('#error_qtde_users').text(error_qtde_users);
            $('#qtde_users').removeClass('has-error');
        }
        
        if ($.trim($('#qtde_contas').val()).length == 0)
        {
            error_qtde_contas = 'Quantidade de contas é obrigatório';
            $('#error_qtde_contas').text(error_qtde_contas);
            $('#qtde_contas').addClass('has-error');
        } else
        {
            error_qtde_contas = '';
            $('#error_qtde_contas').text(error_qtde_contas);
            $('#qtde_contas').removeClass('has-error');
        }
        
        if ($.trim($('#qtde_grupos').val()).length == 0)
        {
            error_qtde_grupos = 'Quantidade de grupos é obrigatório';
            $('#error_qtde_grupos').text(error_qtde_grupos);
            $('#qtde_grupos').addClass('has-error');
        } else
        {
            error_qtde_grupos = '';
            $('#error_qtde_grupos').text(error_qtde_grupos);
            $('#qtde_grupos').removeClass('has-error');
        }
        
        if ($.trim($('#qtde_estacoes_trabalho').val()).length == 0)
        {
            error_qtde_estacoes_trabalho = 'Quantidade de estações de trabalho é obrigatório';
            $('#error_qtde_estacoes_trabalho').text(error_qtde_estacoes_trabalho);
            $('#qtde_estacoes_trabalho').addClass('has-error');
        } else
        {
            error_qtde_estacoes_trabalho = '';
            $('#error_qtde_estacoes_trabalho').text(error_qtde_estacoes_trabalho);
            $('#qtde_estacoes_trabalho').removeClass('has-error');
            $('#qtde_estacoes_trabalho').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
        }
        
        if ($("input[name='sis_op_est_trabalho']:checked").is(":checked") == false)
        {
            error_sis_op_est_trabalho = 'Sistemas operacionais de trabalho é obrigatório';
            $('#error_sis_op_est_trabalho').text(error_sis_op_est_trabalho);
            $('#sis_op_est_trabalho').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_sis_op_est_trabalho = '';
            $('#error_sis_op_est_trabalho').text(error_sis_op_est_trabalho);
            $('#sis_op_est_trabalho').removeClass('has-error');
            $('#sis_op_est_trabalho').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
        }
        
        if ($("input[name='navegadores_utilizados']:checked").is(":checked") == false)
        {
            error_navegadores_utilizados = 'Navegadores utilizados é obrigatório';
            $('#error_navegadores_utilizados').text(error_navegadores_utilizados);
            $('#navegadores_utilizados').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_navegadores_utilizados = '';
            $('#error_navegadores_utilizados').text(error_navegadores_utilizados);
            $('#navegadores_utilizados').removeClass('has-error');
            $('#navegadores_utilizados').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
        }
        
        if ($.trim($('#antivirus_utilizado').val()).length == 0)
        {
            error_antivirus_utilizado = 'Antivirus utilizado é obrigatório';
            $('#error_antivirus_utilizado').text(error_antivirus_utilizado);
            $('#antivirus_utilizado').addClass('has-error');
        } else
        {
            error_antivirus_utilizado = '';
            $('#error_antivirus_utilizado').text(error_antivirus_utilizado);
            $('#antivirus_utilizado').removeClass('has-error');
        }
        
        if ($.trim($('#erp_utilizado').val()).length == 0)
        {
            error_erp_utilizado = 'ERP utilizado é obrigatório';
            $('#error_erp_utilizado').text(error_erp_utilizado);
            $('#erp_utilizado').addClass('has-error');
        } else
        {
            error_erp_utilizado = '';
            $('#error_erp_utilizado').text(error_erp_utilizado);
            $('#erp_utilizado').removeClass('has-error');
        }
        
        if ($.trim($('#plataforma_erp').val()).length == 0)
        {
            error_plataforma_erp = 'Plataforma do ERP utilizado é obrigatório';
            $('#error_plataforma_erp').text(error_plataforma_erp);
            $('#plataforma_erp').addClass('has-error');
        } else
        {
            error_erp_utilizado = '';
            $('#error_plataforma_erp').text(error_plataforma_erp);
            $('#plataforma_erp').removeClass('has-error');
        }
        
        if ($.trim($('#impressao_erp').val()).length == 0)
        {
            error_impressao_erp = 'Impressão ERP utilizado é obrigatório';
            $('#error_impressao_erp').text(error_impressao_erp);
            $('#impressao_erp').addClass('has-error');
        } else
        {
            error_erp_utilizado = '';
            $('#error_impressao_erp').text(error_impressao_erp);
            $('#impressao_erp').removeClass('has-error');
        }
        
        if ($("input[name='forma_desej_bilhetagem_erp']:checked").is(":checked") == false)
        {
            error_forma_desej_bilhetagem_erp = 'Forma desejada de bilhetagem é obrigatório';
            $('#error_forma_desej_bilhetagem_erp').text(error_forma_desej_bilhetagem_erp);
            $('#forma_desej_bilhetagem_erp').css({
                "background-color": "#f8d7da",
                "font-weight": "bold"
            });
        } else
        {
            error_forma_desej_bilhetagem_erp = '';
            $('#error_forma_desej_bilhetagem_erp').text(error_forma_desej_bilhetagem_erp);
            $('#forma_desej_bilhetagem_erp').removeClass('has-error');
            $('#forma_desej_bilhetagem_erp').css({
                "background-color": "#fff",
                "font-weight": "bold"
            });
        }
        
        if ($.trim($('#amb_impressao_extraordinario').val()).length == 0)
        {
            error_amb_impressao_extraordinario = 'Descrever o ambiente de impressão é obrigatório';
            $('#error_amb_impressao_extraordinario').text(error_amb_impressao_extraordinario);
            $('#amb_impressao_extraordinario').addClass('has-error');
        } else
        {
            error_erp_utilizado = '';
            $('#error_amb_impressao_extraordinario').text(error_amb_impressao_extraordinario);
            $('#amb_impressao_extraordinario').removeClass('has-error');
        }
        
        if ($.trim($('#mod_e_qtde_de_impressoras').val()).length == 0)
        {
            error_mod_e_qtde_de_impressoras = 'Modelo e quantidade de impressoras de rede é obrigatório';
            $('#error_mod_e_qtde_de_impressoras').text(error_mod_e_qtde_de_impressoras);
            $('#mod_e_qtde_de_impressoras').addClass('has-error');
        } else
        {
            error_erp_utilizado = '';
            $('#error_mod_e_qtde_de_impressoras').text(error_mod_e_qtde_de_impressoras);
            $('#mod_e_qtde_de_impressoras').removeClass('has-error');
        }
        
        if ($.trim($('#mod_e_qtde_de_impressoras_usb').val()).length == 0)
        {
            error_mod_e_qtde_de_impressoras_usb = 'Modelo e quantidade de impressoras USB é obrigatório';
            $('#error_mod_e_qtde_de_impressoras_usb').text(error_mod_e_qtde_de_impressoras_usb);
            $('#mod_e_qtde_de_impressoras_usb').addClass('has-error');
        } else
        {
            error_erp_utilizado = '';
            $('#error_mod_e_qtde_de_impressoras_usb').text(error_mod_e_qtde_de_impressoras_usb);
            $('#mod_e_qtde_de_impressoras').removeClass('has-error');
        }
        
        if ($.trim($('#descricao_restricao').val()).length == 0)
        {
            error_descricao_restricao = 'Por favor, a resposta é obrigatório';
            $('#error_descricao_restricao').text(error_descricao_restricao);
            $('#descricao_restricao').addClass('has-error');
        } else
        {
            error_descricao_restricao = '';
            $('#error_descricao_restricao').text(error_descricao_restricao);
            $('#descricao_restricao').removeClass('has-error');
        }
        
        if ($.trim($('#objetivo_projeto').val()).length == 0)
        {
            error_objetivo_projeto = 'Por favor, a resposta é obrigatório';
            $('#error_objetivo_projeto').text(error_objetivo_projeto);
            $('#objetivo_projeto').addClass('has-error');
        } else
        {
            error_objetivo_projeto = '';
            $('#error_objetivo_projeto').text(error_objetivo_projeto);
            $('#objetivo_projeto').removeClass('has-error');
        }
        
        if ($.trim($('#observacoes_adicionais').val()).length == 0)
        {
            error_observacoes_adicionais = 'Por favor, a resposta é obrigatório';
            $('#error_observacoes_adicionais').text(error_observacoes_adicionais);
            $('#observacoes_adicionais').addClass('has-error');
        } else
        {
            error_observacoes_adicionais = '';
            $('#error_observacoes_adicionais').text(error_observacoes_adicionais);
            $('#observacoes_adicionais').removeClass('has-error');
        }

        

        
        
        if (error_sites != '' || error_impressao != '' || error_sem_server_imp != '' || error_sis_op != '' || error_server_dominio != '' || error_qtde_users != '' || error_qtde_contas != '' || error_qtde_grupos != '')
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


