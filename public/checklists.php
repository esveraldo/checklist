<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Checklist Office Total</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/custom.css" />
        <style>
            .box
            {
                width:800px;
                margin:0 auto;
            }
            .active_tab1
            {
                background-color:#fff;
                color:#333;
                font-weight: 600;
            }
            .inactive_tab1
            {
                background-color: #f5f5f5;
                color: #333;
                cursor: not-allowed;
            }
            .has-error
            {
                border-color:#cc0000;
                background-color:#fff;
            }
            .form-check-label {
                font-weight: normal;
            }
            .nowrap {
                white-space: nowrap;
                font-weight: normal;
            }
        </style>
    </head>
    <body>

        <br />
        <div class="container box">
            <br />
            <h2 align="center">Checklist de Soluções - Billing & Outsourcing</h2><br />
            <h3 align="center">Obrigado por preencher o checklist de soluções da OfficeTotal!</h3><br />
            <h4 align="center">É importante que nos seja fornecido o máximo de informação, para que possamos melhor entender as necessidades e expectativas com a solução apresentada, bem como, conhecermos melhor o ambiente em que ela será implementada.</h4><br />
            <h4 align="center">Equipe de soluções OfficeTotal. </h4><br />
            <form method="post" id="register_form" action="helpers/record-checklist.php">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Informações gerais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Requerimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Ambiente e Infra Estrutura</a>
                    </li>
                </ul>
                <div class="tab-content" style="margin-top:16px;">
                    <!--PRIMEIRO BLOCO-->
                    <div class="tab-pane active" id="login_details">
                        <div class="panel panel-default">
                            <div class="panel-heading">Informações detalhadas</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Razão social</label>
                                    <input type="text" name="rsocial" id="rsocial" class="form-control" />
                                    <span id="error_rsocial" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>CNPJ</label>
                                    <input type="text" name="cnpj" id="cnpj" class="form-control" onkeydown="Mascara(this, Cnpj);" onkeypress="Mascara(this, Cnpj);" onkeyup="Mascara(this, Cnpj);" maxlength="18"/>
                                    <span id="error_cnpj" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control" />
                                    <span id="error_endereco" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Contato</label>
                                    <input type="text" name="contato" id="contato" class="form-control" />
                                    <span id="error_contato" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control" onkeydown="Mascara(this, TelefoneCall);" onkeypress="Mascara(this, TelefoneCall);" onkeyup="Mascara(this, TelefoneCall);" maxlength="15"/>
                                    <span id="error_telefone" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" id="email" class="form-control" />
                                    <span id="error_email" class="text-danger"></span>
                                </div>

                                <br />
                                <div align="center">
                                    <button type="button" name="btn_personal_details" id="btn_info_gerais" class="btn btn-info btn-lg">Next</button>
                                </div>
                                <br />
                                <div align="center" class="resposta"></div>
                            </div>
                        </div>
                    </div>
                    <!--FIM DO PRIMEIRO BLOCO-->
                    <!--SEGUNDO BLOCO-->
                    <div class="tab-pane fade" id="personal_details">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Requerimentos do projeto</h3></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label id="bilhetagem">Escopo de Bilhetagem:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="bilhetagem[]" value="impressao">
                                        <label class="form-check-label" for="impressao">
                                            Impressão
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="bilhetagem[]" value="copia">
                                        <label class="form-check-label" for="copia">
                                            Cópia
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="bilhetagem[]" value="digitalizacao">
                                        <label class="form-check-label" for="digitalizacao">
                                            Digitalização
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="bilhetagem[]" value="fax">
                                        <label class="form-check-label" for="fax">
                                            Fax
                                        </label>
                                    </div>
                                    <span id="error_bilhetagem" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label id="relatorios">Os relatórios deverão ser estruturados por:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="relatorios[]" value="usuarios" >
                                        <label class="form-check-label" for="usuarios">
                                            Usuários
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="relatorios[]" value="impressoras">
                                        <label class="form-check-label" for="impressoras">
                                            Impressoras
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="relatorios[]" value="departamentos">
                                        <label class="form-check-label" for="departamentos">
                                            Departamentos
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="relatorios[]" value="centro_de_custo">
                                        <label class="form-check-label" for="centro_de_custo">
                                            Centro de custo
                                        </label>
                                    </div>
                                    
                                    <label for="outros" class="nowrap">Outros:
                                        <input type="text" name="relatorios[]" id="outros"/>
                                    </label>
                                    <span id="error_relatorios" class="text-danger"></span>
                                </div>



                                <div class="form-group">
                                    <label id="listagem">Possui alguma listagem que associe os usuários aos seus respectivos centros de custos ou projetos?</label>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="listagem" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="listagem" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_listagem" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label id="regras_imp">Regras de impressão (Necessário grupo no AD):</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="regras_imp[]" value="monocromatica">
                                        <label class="form-check-label" for="monocromatica">
                                            Forçar impressão colorida para monocromática
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="regras_imp[]" value="duplex">
                                        <label class="form-check-label" for="duplex">
                                            Forçar impressão para duplex
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="regras_imp[]" value="nao_utilizar">
                                        <label class="form-check-label" for="nao_utilizar">
                                            Não utilizar
                                        </label>
                                    </div>
                                    <span id="error_regras_imp" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label>Impressão em Pool (nuvem):</label>
                                    <small>A impressão em “nuvem” consiste em o usuário liberar a impressão retida em qualquer equipamento compatível do grupo criado (ou pool).</small>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="pool" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="pool" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_poll" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label>Cotas de utilização:</label>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="cotas" value="informativa" checked="checked"> Informativa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="cotas" value="bloqueante"> Bloqueante
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="cotas" value="nao"> Não utilizar
                                        </label>
                                    </div>
                                    <span id="error_poll" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label id="alerta_cotas">Alertas de cotas:</label>
                                    <small>Somente responda em caso de utilização de cotas (Informativa ou Bloqueante).</small>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="alerta_cotas[]" value="email">
                                        <label class="form-check-label" for="email">
                                            Por email
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="alerta_cotas[]" value="pop-up">
                                        <label class="form-check-label" for="pop-up">
                                            Pop up
                                        </label>
                                    </div>
                                    <span id="error_cotas" class="text-danger"></span>
                                </div>



                                <div class="form-group">
                                    <label>Policy:</label>
                                    <small>Controle e limitação de impressões sob regras (politicas) de usuários e impressoras.</small>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="policy" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="policy" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_policy" class="text-danger"></span>
                                </div>




                                <div class="form-group">
                                    <label id="lib_cracha">Liberação por crachá:</label>
                                    <small>Cartão de aproximação</small>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lib_cracha[]" value="hid_13.56">
                                        <label class="form-check-label" for="hid_13.56">
                                            HID 13.56 MHZ
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lib_cracha[]" value="hid_125">
                                        <label class="form-check-label" for="hid_125">
                                            HID 125 KHZ
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lib_cracha[]" value="mifare">
                                        <label class="form-check-label" for="mifare">
                                            Mifare
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lib_cracha[]" value="indala">
                                        <label class="form-check-label" for="indala">
                                            Indala
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lib_cracha[]" value="nao_utilizar">
                                        <label class="form-check-label" for="nao_utilizar">
                                            Não utilizar
                                        </label>
                                    </div>
                                    
                                    <label for="outros" class="nowrap">Outros:
                                        <input type="text" name="lib_cracha[]" id="outros"/>
                                    </label>
                                    <span id="error_cracha" class="text-danger"></span>
                                </div>



                                <div class="form-group">
                                    <label>Chargerback:</label>
                                    <small>Apontamento de uso para trabalhos de impressão: PARTICULAR, ORGANIZAÇÃO ou CONTAS.</small>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="chargerback" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="chargerback" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_chargerback" class="text-danger"></span>
                                </div>



                                <div class="form-group">
                                    <label id="tracking">Tracking:</label>
                                    <small>Impressão de informações na borda da página para rastreamento da origem de impressão.</small>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tracking[]" value="personalizado">
                                        <label class="form-check-label" for="tracking">
                                            Texto Personalizado - Imprime nome do usuário, data, hora, entre outros
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tracking[]" value="rastreio">
                                        <label class="form-check-label" for="rastreio">
                                            Código de Rastreio - Imprime um código para posterior identificação do usuário.
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tracking[]" value="nao_utilizar">
                                        <label class="form-check-label" for="nao_utilizar">
                                            Não utilizar
                                        </label>
                                    </div>

                                    <span id="error_tracking" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label>Tipo de Releaser:</label>
                                    <br />
                                    <small>Definirá o tipo de instalação e licença a ser utilizada.</small>
                                    <br />
                                    <small>Esta informação deve ser acordada comercialmente, pois definirá o valor de custo do serviço.</small>
                                    <br />
                                    <br />
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="releaser" value="sim" checked> Standard - Apenas a impressão segura de documentos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="releaser" value="nao"> Full - Impressão segura + Documentos públicos, salvar, compartilhamento, digitalizações e delegação
                                        </label>
                                    </div>
                                    <span id="error_releaser" class="text-danger"></span>
                                </div>




                                <div class="form-group">
                                    <label id="disp_liberacao">Dispositivos de liberação:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao[]" value="web">
                                        <label class="form-check-label" for="web">
                                            Web
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao[]" value="mobile">
                                        <label class="form-check-label" for="mobile">
                                            Mobile
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao[]" value="tablet">
                                        <label class="form-check-label" for="tablet">
                                            Tablet
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao[]" value="embarcados">
                                        <label class="form-check-label" for="embarcados">
                                            Embarcados
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao[]" value="leitor_usb">
                                        <label class="form-check-label" for="leitor_usb">
                                            Leitor usb
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao[]" value="leitor_de_rede">
                                        <label class="form-check-label" for="leitor_de_rede">
                                            Leitor de rede
                                        </label>
                                    </div>
                                    
                                    <label for="outros" class="nowrap">Outros:
                                        <input type="text" name="dispositivos_liberacao[]" id="outros"/>
                                    </label>
                                    <span id="error_disp_lib" class="text-danger"></span>

                                </div>
                                <br />
                                <div align="center">
                                    <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                                    <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                    <!--FIM DO SEGUNDO BLOCO-->
                    <!--TERCEIRO BLOCO-->
                    <div class="tab-pane fade" id="contact_details">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Ambiente e Infra Estrutura</h3><small> Informações sobre o ambiente do cliente em que a solução será implementada.</small></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Tipo de Implantação:</label>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="implementacao" value="nova" checked> Nova
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="implementacao" value="migracao"> Migração
                                        </label>
                                    </div>
                                    <span id="error_implementacao" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label>Tipo de Instalação:</label>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="instalacao" value="data_center" checked> Data center
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="instalacao" value="local"> Local
                                        </label>
                                    </div>
                                    <span id="error_instalacao" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label>Quantidades de sites (Sede e Filiais):</label>
                                    <input type="text" name="sites" id="sites" class="form-control" placeholder="O valor deve ser um número" onkeydown="Mascara(this, Integer);" onkeypress="Mascara(this, Integer);" onkeyup="Mascara(this, Integer);"/>
                                    <span id="error_sites" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Quantidades de sites com servidor de impressão:</label>
                                    <input type="text" name="impressao" id="impressao" class="form-control" placeholder="O valor deve ser um número" onkeydown="Mascara(this, Integer);" onkeypress="Mascara(this, Integer);" onkeyup="Mascara(this, Integer);"/>
                                    <span id="error_impressao" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Quantidades de sites sem servidor de impressão:</label>
                                    <input type="text" name="sem_server_imp" id="sem_server_imp" class="form-control" placeholder="O valor deve ser um número" onkeydown="Mascara(this, Integer);" onkeypress="Mascara(this, Integer);" onkeyup="Mascara(this, Integer);"/>
                                    <span id="error_sem_server_imp" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Sistema operacional dos servidores de impressão:</label>
                                    <input type="text" name="sis_op" id="sis_op" class="form-control" placeholder="Sua resposta" />
                                    <span id="error_sis_op" class="text-danger"></span>
                                </div>



                                <div class="form-group">
                                    <label>Os sites possuem comunicação entre si?</label>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="comunicacao_entre_sites" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="comunicacao_entre_sites" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_comunicacao_entre_sites" class="text-danger"></span>
                                </div>



                                <div class="form-group">
                                    <label>Os usuários utilizam autenticação em suas estações?</label>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="user_autentic_estacoes" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="user_autentic_estacoes" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_user_autentic_estacoes" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Há impressão direta para impressoras de rede e/ou USB?</label>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="imp_rede_usb" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="imp_rede_usb" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_imp_rede_usb" class="text-danger"></span>
                                </div>

                                <h4>Sobre o Microsoft SQL Server:</h4>

                                <div class="form-group">
                                    <label for="licenca">O cliente possui licença Microsoft SQL Server disponível para uso?</label>
                                    <select class="form-control" name="licenca_sql_server" id="licenca">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="instalar">É permitido instalar a versão do Microsoft SQL Server Express?</label>
                                    <select class="form-control" name="instalar_sql_server_express" id="instalar">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label id="server_dominio">Servidores de domínio / Autenticação:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="server_dominio_autenticacao[]" value="active_directory">
                                        <label class="form-check-label" for="active_directory">
                                            Active Directory
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="server_dominio_autenticacao[]" value="windows_nt">
                                        <label class="form-check-label" for="windows_nt">
                                            Windows NT
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="server_dominio_autenticacao[]" value="novell">
                                        <label class="form-check-label" for="novell">
                                            Novel
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="server_dominio_autenticacao[]" value="ldap">
                                        <label class="form-check-label" for="ldap">
                                            LDAP
                                        </label>
                                    </div>
                                    
                                    <label for="outros" class="nowrap">Outros:
                                        <input type="text" name="server_dominio_autenticacao[]" id="outros"/>
                                    </label>
                                    <span id="error_server_dominio" class="text-danger"></span>

                                </div>

                                <div class="form-group">
                                    <label>Qual o tipo de importação utilizada no domínio?</label>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="importacao_dominio" value="contas" checked> Contas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="importacao_dominio" value="grupos"> Grupos
                                        </label>
                                    </div>
                                    
                                    <label for="outros" class="nowrap">Outros:
                                        <input type="text" name="importacao_dominio" id="outros"/>
                                    </label>
                                    <span id="error_importacao_dominio" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Quantidade de usuários:</label>
                                    <input type="text" name="qtde_users" id="qtde_users" class="form-control" placeholder="O valor deve ser um número" onkeydown="Mascara(this, Integer);" onkeypress="Mascara(this, Integer);" onkeyup="Mascara(this, Integer);"/>
                                    <span id="error_qtde_users" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Quantidade de contas:</label>
                                    <input type="text" name="qtde_contas" id="qtde_contas" class="form-control" placeholder="O valor deve ser um número" onkeydown="Mascara(this, Integer);" onkeypress="Mascara(this, Integer);" onkeyup="Mascara(this, Integer);"/>
                                    <span id="error_qtde_contas" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Quantidade de grupos:</label>
                                    <input type="text" name="qtde_grupos" id="qtde_grupos" class="form-control" placeholder="O valor deve ser um número" onkeydown="Mascara(this, Integer);" onkeypress="Mascara(this, Integer);" onkeyup="Mascara(this, Integer);"/>
                                    <span id="error_qtde_grupos" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Quantidade de estações de trabalho:</label>
                                    <input type="text" name="qtde_estacoes_trabalho" id="qtde_estacoes_trabalho" class="form-control" placeholder="O valor deve ser um número" onkeydown="Mascara(this, Integer);" onkeypress="Mascara(this, Integer);" onkeyup="Mascara(this, Integer);"/>
                                    <span id="error_qtde_estacoes_trabalho" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label id="sis_op_est_trabalho">Sistema operacional das estações de trabalho:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sis_op_est_trabalho[]" value="windows_2000">
                                        <label class="form-check-label" for="windows_2000">
                                            Windows 2000
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sis_op_est_trabalho[]" value="windows_xp">
                                        <label class="form-check-label" for="windows_xp">
                                            Windows XP
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sis_op_est_trabalho[]" value="windows_vista">
                                        <label class="form-check-label" for="windows_vista">
                                            Windows Vista
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sis_op_est_trabalho[]" value="windows_seven">
                                        <label class="form-check-label" for="windows_seven">
                                            Windows 7
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sis_op_est_trabalho[]" value="windows_oito">
                                        <label class="form-check-label" for="windows_oito">
                                            Windows 8 / 8.1
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sis_op_est_trabalho[]" value="windows_dez">
                                        <label class="form-check-label" for="windows_dez">
                                            Windows 10
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sis_op_est_trabalho[]" value="mac_os">
                                        <label class="form-check-label" for="mac_os">
                                            Mac OS
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sis_op_est_trabalho[]" value="linux">
                                        <label class="form-check-label" for="linux">
                                            Linux
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sis_op_est_trabalho[]" value="novell_netware">
                                        <label class="form-check-label" for="novell_netware">
                                            Novel Netware
                                        </label>
                                    </div>
                                    
                                    <label for="outros" class="nowrap">Outros:
                                        <input type="text" name="sis_op_est_trabalho[]" id="outros"/>
                                    </label>
                                    <span id="error_sis_op_est_trabalho" class="text-danger"></span>

                                </div>

                                <div class="form-group">
                                    <label id="navegadores_utilizados">Navegadores utilizados:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="navegadores_utilizados[]" value="internet_explorer">
                                        <label class="form-check-label" for="internet_explorer">
                                            Internet explorer
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="navegadores_utilizados[]" value="google_chrome">
                                        <label class="form-check-label" for="google_chrome">
                                            Google Chrome
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="navegadores_utilizados[]" value="firefox">
                                        <label class="form-check-label" for="firefox">
                                            Firefox
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="navegadores_utilizados[]" value="microsoft_edge">
                                        <label class="form-check-label" for="microsoft_edge">
                                            Microsoft Edge
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="navegadores_utilizados[]" value="safari">
                                        <label class="form-check-label" for="safari">
                                            Safari
                                        </label>
                                    </div>
                                    
                                    <label for="outros" class="nowrap">Outros:
                                        <input type="text" name="navegadores_utilizados[]" id="outros"/>
                                    </label>
                                    <span id="error_navegadores_utilizados" class="text-danger"></span>

                                </div>


                                <div class="form-group">
                                    <label>Antivírus utilizado:</label>
                                    <input type="text" name="antivirus_utilizado" id="antivirus_utilizado" class="form-control" placeholder="Insira sua resposta" />
                                    <span id="error_antivirus_utilizado" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>ERP utilizado e sua versão:</label>
                                    <input type="text" name="erp_utilizado" id="erp_utilizado" class="form-control" placeholder="Insira sua resposta" />
                                    <span id="error_erp_utilizado" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Plataforma do ERP:</label>
                                    <input type="text" name="plataforma_erp" id="plataforma_erp" class="form-control" placeholder="Insira sua resposta" />
                                    <span id="error_plataforma_erp" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Descreva a forma de impressão do ERP:</label>
                                    <textarea class="form-control" rows="5" name="impressao_erp" id="impressao_erp" placeholder="Insira sua resposta"></textarea>
                                    <span id="error_impressao_erp" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>O ERP deve receber as informações do sistema de bilhetagem?</label>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="bilhetagem_erp" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="bilhetagem_erp" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_imp_rede_usb" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label id="forma_desej_bilhetagem_erp">Forma desejada para que o ERP receba as informações de bilhetagem:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="forma_desej_bilhetagem_erp[]" value="csv">
                                        <label class="form-check-label" for="csv">
                                            CSV
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="forma_desej_bilhetagem_erp[]" value="txt">
                                        <label class="form-check-label" for="txt">
                                            TXT
                                        </label>
                                    </div>

                                    <span id="error_forma_desej_bilhetagem_erp" class="text-danger"></span>

                                </div>

                                <h4>Impressões extraordinárias:</h4>

                                <div class="form-group">
                                    <label for="em_cluster">Em Cluster</label>
                                    <select class="form-control" name="em_cluster" id="em_cluster">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="em_cetrix">Em ambiente Citrixress</label>
                                    <select class="form-control" name="em_cetrix" id="em_cetrix">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="solaris">Em ambiente Sun Solaris</label>
                                    <select class="form-control" name="solaris" id="solaris">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="ibm">Em ambiente IBM AS/400</label>
                                    <select class="form-control" name="ibm" id="ibm">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Descreva o ambiente para impressões extraordinária:</label>
                                    <br />
                                    <small>
                                        Somente responda caso tenha selecionado "Sim" em alguma das respostas na questão anterior.<br />
                                        Descreva o ambiente de impressão extraordinária, citando o modelo e quantidade de servidores.
                                    </small>
                                    <br />
                                    <textarea class="form-control" rows="5" name="amb_impressao_extraordinario" id="amb_impressao_extraordinario" placeholder="Insira sua resposta"></textarea>
                                    <span id="error_amb_impressao_extraordinario" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Modelo e quantidade de impressoras de rede:</label>
                                    <br />
                                    <small>
                                        EX: Fabricante e modelo 1 (10 impressoras); Fabricante e modelo 2 (03 impressoras).
                                    </small>
                                    <br />
                                    <textarea class="form-control" rows="5" name="mod_e_qtde_de_impressoras" id="mod_e_qtde_de_impressoras" placeholder="Insira sua resposta"></textarea>
                                    <span id="error_mod_e_qtde_de_impressoras" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Modelo e quantidade de impressoras USB:</label>
                                    <br />
                                    <small>
                                        EX: Fabricante e modelo 1 (10 impressoras); Fabricante e modelo 2 (03 impressoras).
                                    </small>
                                    <br />
                                    <textarea class="form-control" rows="5" name="mod_e_qtde_de_impressoras_usb" id="mod_e_qtde_de_impressoras_usb" placeholder="Insira sua resposta"></textarea>
                                    <span id="error_mod_e_qtde_de_impressoras_usb" class="text-danger"></span>
                                </div>

                                <h4>Fechamento</h4>

                                <small>
                                    Informações, observações e sugestões para entendimento do projeto.
                                </small>
                                <br />
                                <br />

                                <div class="form-group">
                                    <label>O(s) servidor(es) de impressão será de responsabilidade da contratada?</label>
                                    <br />
                                    <small>
                                        Caso "Sim", deve ser acordado previamente com o comercial da OfficeTotal, pois isso altera o escopo do projeto e seu valor para loação do serviço.
                                    </small>
                                    <br />
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="server_imp_resp" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="server_imp_resp" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_server_imp_resp" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Caso o(s) servidor(es) de impressão sejam de responsabilidade da contratada. Há algum tipo de restrição quanto ao fabricante do hardware e seu modelo?</label>
                                    <br />
                                    <small>
                                        Somente responda caso tenha selecionado "Sim" na questão anterior.
                                    </small>
                                    <br />
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="restricoes_do_fabricante" value="sim" checked> Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="radio-inline">
                                            <input type="radio" name="restricoes_do_fabricante" value="nao"> Não
                                        </label>
                                    </div>
                                    <span id="error_server_imp_resp" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label>Descreva a restrição:</label>
                                    <br />
                                    <small>
                                        Somente responda caso tenha selecionado "Sim" na questão anterior.
                                    </small>
                                    <br />
                                    <textarea class="form-control" rows="5" name="descricao_restricao" id="descricao_restricao" placeholder="Insira sua resposta"></textarea>
                                    <span id="error_descricao_restricao" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Objetivo do projeto:</label>
                                    <br />
                                    <small>
                                        Descreva brevemente o objetivo do projeto, para entendermos a expectativa quanto a solução.<br />
                                        Ex: Controle de impressão, cópia, digitalizações e fax. Controle de suprimentos e etc... 
                                    </small>
                                    <br />
                                    <textarea class="form-control" rows="5" name="objetivo_projeto" id="objetivo_projeto" placeholder="Insira sua resposta"></textarea>
                                    <span id="error_objetivo_projeto" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Observações adicionais:</label>
                                    <textarea class="form-control" rows="5" name="observacoes_adicionais" id="observacoes_adicionais" placeholder="Insira sua resposta"></textarea>
                                    <span id="error_observacoes_adicionais" class="text-danger"></span>
                                </div>



                                <br />
                                <div align="center">
                                    <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                                    <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
                                </div>
                                <br />
                                <br />
                                <div align="center" class="resposta"></div>
                                <br />
                            </div>
                        </div>
                    </div>
                    <!--FIM DO TERCEIRO BLOCO-->
                </div>
            </form>
        </div>


    </body>
    <script src="assets/js/checklist.js"></script>
    <script src="assets/js/send.js"></script>
    <script>

                                        /*Função Pai de Mascaras*/
                                        function Mascara(o, f) {
                                            v_obj = o
                                            v_fun = f
                                            setTimeout("execmascara()", 1)
                                        }

                                        /*Função que Executa os objetos*/
                                        function execmascara() {
                                            v_obj.value = v_fun(v_obj.value)
                                        }

                                        /*Função que Determina as expressões regulares dos objetos*/
                                        function leech(v) {
                                            v = v.replace(/o/gi, "0")
                                            v = v.replace(/i/gi, "1")
                                            v = v.replace(/z/gi, "2")
                                            v = v.replace(/e/gi, "3")
                                            v = v.replace(/a/gi, "4")
                                            v = v.replace(/s/gi, "5")
                                            v = v.replace(/t/gi, "7")
                                            return v
                                        }

                                        /*Função que permite apenas numeros*/
                                        function Integer(v) {
                                            return v.replace(/\D/g, "")
                                        }

                                        /*Função que padroniza telefone (11) 4184-1241*/
                                        function Telefone(v) {
                                            v = v.replace(/\D/g, "")
                                            v = v.replace(/^(\d\d)(\d)/g, "($1) $2")
                                            v = v.replace(/(\d{4})(\d)/, "$1-$2")
                                            return v
                                        }

                                        /*Função que padroniza telefone (11) 94184-1241*/
                                        function TelefoneCel(v) {
                                            v = v.replace(/\D/g, "")
                                            v = v.replace(/^(\d\d)(\d)/g, "($1) $2")
                                            v = v.replace(/(\d{5})(\d)/, "$1-$2")
                                            return v
                                        }

                                        /*Função que padroniza telefone (11) 41841241*/
                                        function TelefoneCall(v) {
                                            v = v.replace(/\D/g, "")
                                            v = v.replace(/^(\d\d)(\d)/g, "($1) $2")
                                            return v
                                        }

                                        /*Função que padroniza CNPJ*/
                                        function Cnpj(v) {
                                            v = v.replace(/\D/g, "")
                                            v = v.replace(/(\d{2})(\d)/, "$1.$2")
                                            v = v.replace(/(\d{3})(\d)/, "$1.$2")
                                            v = v.replace(/(\d{3})(\d)/, "$1/$2")

                                            v = v.replace(/(\d{4})(\d{1,2})$/, "$1-$2")

                                            return v
                                        }

    </script>
</html>


