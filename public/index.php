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
            <form method="post" id="register_form">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Informações gerais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Requerimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Contact Details</a>
                    </li>
                </ul>
                <div class="tab-content" style="margin-top:16px;">
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
                                    <input type="text" name="cnpj" id="cnpj" class="form-control" />
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
                                    <input type="text" name="telefone" id="telefone" class="form-control" />
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
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="personal_details">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Requerimentos do projeto</h3></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label id="bilhetagem">Escopo de Bilhetagem:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="bilhetagem" value="impressao">
                                        <label class="form-check-label" for="impressao">
                                            Impressão
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="bilhetagem" value="copia">
                                        <label class="form-check-label" for="copia">
                                            Cópia
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="bilhetagem" value="digitalizacao">
                                        <label class="form-check-label" for="digitalizacao">
                                            Digitalização
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="bilhetagem" value="fax">
                                        <label class="form-check-label" for="fax">
                                            Fax
                                        </label>
                                    </div>
                                    <span id="error_bilhetagem" class="text-danger"></span>
                                </div>


                                <div class="form-group">
                                    <label id="relatorios">Os relatórios deverão ser estruturados por:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="relatorios" value="usuarios" >
                                        <label class="form-check-label" for="usuarios">
                                            Usuários
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="relatorios" value="impressoras">
                                        <label class="form-check-label" for="impressoras">
                                            Impressoras
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="relatorios" value="departamentos">
                                        <label class="form-check-label" for="departamentos">
                                            Departamentos
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="relatorios" value="centro_de_custo">
                                        <label class="form-check-label" for="centro_de_custo">
                                            Centro de custo
                                        </label>
                                    </div>
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
                                        <input class="form-check-input" type="checkbox" name="regras_imp" value="monocromatica">
                                        <label class="form-check-label" for="monocromatica">
                                            Forçar impressão colorida para monocromática
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="regras_imp" value="duplex">
                                        <label class="form-check-label" for="duplex">
                                            Forçar impressão para duplex
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="regras_imp" value="nao_utilizar">
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
                                        <input class="form-check-input" type="checkbox" name="alerta_cotas" value="email">
                                        <label class="form-check-label" for="email">
                                            Por email
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="alerta_cotas" value="pop-up">
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
                                        <input class="form-check-input" type="checkbox" name="lib_cracha" value="hid_13.56">
                                        <label class="form-check-label" for="hid_13.56">
                                            HID 13.56 MHZ
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lib_cracha" value="hid_125">
                                        <label class="form-check-label" for="hid_125">
                                            HID 125 KHZ
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lib_cracha" value="mifare">
                                        <label class="form-check-label" for="mifare">
                                            Mifare
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lib_cracha" value="indala">
                                        <label class="form-check-label" for="indala">
                                            Indala
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lib_cracha" value="nao_utilizar">
                                        <label class="form-check-label" for="nao_utilizar">
                                            Não utilizar
                                        </label>
                                    </div>
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
                                        <input class="form-check-input" type="checkbox" name="tracking" value="personalizado">
                                        <label class="form-check-label" for="tracking">
                                            Texto Personalizado - Imprime nome do usuário, data, hora, entre outros
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tracking" value="rastreio">
                                        <label class="form-check-label" for="rastreio">
                                            Código de Rastreio - Imprime um código para posterior identificação do usuário.
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tracking" value="nao_utilizar">
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
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao" value="web">
                                        <label class="form-check-label" for="liberacao">
                                            Web
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao" value="mobile">
                                        <label class="form-check-label" for="liberacao">
                                            Mobile
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao" value="tablet">
                                        <label class="form-check-label" for="liberacao">
                                            Tablet
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao" value="embarcados">
                                        <label class="form-check-label" for="liberacao">
                                            Embarcados
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao" value="leitor_usb">
                                        <label class="form-check-label" for="liberacao">
                                            Leitor usb
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dispositivos_liberacao" value="leitor_de_rede">
                                        <label class="form-check-label" for="liberacao">
                                            Leitor de rede
                                        </label>
                                    </div>
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
                    <div class="tab-pane fade" id="contact_details">
                        <div class="panel panel-default">
                            <div class="panel-heading">Fill Contact Details</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Enter Address</label>
                                    <textarea name="address" id="address" class="form-control"></textarea>
                                    <span id="error_address" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label>Enter Mobile No.</label>
                                    <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
                                    <span id="error_mobile_no" class="text-danger"></span>
                                </div>
                                <br />
                                <div align="center">
                                    <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                                    <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </body>
    <script src="assets/js/custom.js"></script>
</html>


