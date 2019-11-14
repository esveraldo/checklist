<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../vendor/autoload.php';

use App\DI\Container;

$dados = Container::getSelectClientsChecklist();
$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$dados->setId($id);
$result = $dados->selectOne();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>Tabela de realtório de checklist</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <h1>Checklist Office Total</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Criado em</th>
                                <th scope="col">Razão social</th>
                                <th scope="col">CNPJ</th>
                                <th scope="col">Endereço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= date("d/m/Y H:i:s", strtotime($result["created_at"])) ?></td>
                                <td><?= $result["rsocial"] ?></td>
                                <td><?= $result["cnpj"] ?></td>
                                <td><?= $result["endereco"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Contato</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["contato"] ?></td>
                                <td><?= $result["telefone"] ?></td>
                                <td><?= $result["email"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>Requerimentos</h2>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Escopo de Bilhetagem:</th>
                                <th scope="col">Estrutura de relatorios:</th>
                                <th scope="col">Possui alguma listagem que associe os usuários aos seus respectivos centros de custos ou projetos?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["bilhetagem"] ?></td>
                                <td><?= $result["relatorios"] ?></td>
                                <td><?= $result["listagem"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Regras de impressão (Necessário grupo no AD):</th>
                                <th scope="col">Impressão em Pool (nuvem):</th>
                                <th scope="col">Cotas de utilização:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["regras_imp"] ?></td>
                                <td><?= $result["pool"] ?></td>
                                <td><?= $result["cotas"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Alertas de cotas:</th>
                                <th scope="col">Policy:</th>
                                <th scope="col">Liberação por crachá:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["alerta_cotas"] ?></td>
                                <td><?= $result["policy"] ?></td>
                                <td><?= $result["lib_cracha"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Chargerback:</th>
                                <th scope="col">Tracking:</th>
                                <th scope="col">Tipo de Releaser:</th>
                                <th scope="col">Dispositivos de liberação:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["chargerback"] ?></td>
                                <td><?= $result["tracking"] ?></td>
                                <td><?= $result["releaser"] ?></td>
                                <td><?= $result["instalacao"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>Ambiente e Infra Estrutura</h2>

                    <table class="table table-bordered">
                        <thead>
                            <tr>  
                                <th scope="col">Tipo de Implantação:</th>
                                <th scope="col">Tipo de Instalação:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["dispositivos_liberacao"] ?></td>
                                <td><?= $result["implementacao"] ?></td>     
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Quantidades de sites (Sede e Filiais):</th>
                                <th scope="col">Quantidades de sites com servidor de impressão:</th>
                                <th scope="col">Quantidades de sites sem servidor de impressão:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["sites"] ?></td>
                                <td><?= $result["impressao"] ?></td>
                                <td><?= $result["sem_server_imp"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Sistema operacional dos servidores de impressão:</th>
                                <th scope="col">Os sites possuem comunicação entre si?</th>
                                <th scope="col">Os usuários utilizam autenticação em suas estações?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["sis_op"] ?></td>
                                <td><?= $result["comunicacao_entre_sites"] ?></td>
                                <td><?= $result["user_autentic_estacoes"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Há impressão direta para impressoras de rede e/ou USB?</th>
                                <th scope="col">O cliente possui licença Microsoft SQL Server disponível para uso?</th>
                                <th scope="col">É permitido instalar a versão do Microsoft SQL Server Express?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["imp_rede_usb"] ?></td>
                                <td><?= $result["licenca_sql_server"] ?></td>
                                <td><?= $result["instalar_sql_server_express"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Servidores de domínio / Autenticação:</th>
                                <th scope="col">Qual o tipo de importação utilizada no domínio?</th>
                                <th scope="col">Quantidade de usuários:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["server_dominio_autenticacao"] ?></td>
                                <td><?= $result["importacao_dominio"] ?></td>
                                <td><?= $result["qtde_users"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Quantidade de contas:</th>
                                <th scope="col">Quantidade de grupos:</th>
                                <th scope="col">Quantidade de estações de trabalho:</th>
                                <th scope="col">Antivírus utilizado:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["qtde_contas"] ?></td>
                                <td><?= $result["qtde_grupos"] ?></td>
                                <td><?= $result["qtde_estacoes_trabalho"] ?></td>
                                <td><?= $result["antivirus_utilizado"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Sistema operacional das estações de trabalho:</th>
                                <th scope="col">Navegadores utilizados:</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["sis_op_est_trabalho"] ?></td>
                                <td><?= $result["navegadores_utilizados"] ?></td>     
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ERP utilizado e sua versão:</th>
                                <th scope="col">Plataforma do ERP:</th>
                                <th scope="col">Descreva a forma de impressão do ERP:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["erp_utilizado"] ?></td>
                                <td><?= $result["plataforma_erp"] ?></td>
                                <td><?= $result["impressao_erp"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">O ERP deve receber as informações do sistema de bilhetagem?</th>
                                <th scope="col">Forma desejada para que o ERP receba as informações de bilhetagem:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["bilhetagem_erp"] ?></td>
                                <td><?= $result["forma_desej_bilhetagem_erp"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="4" align="center"><h3>Impressões extraordinárias:</h3></th>
                            </tr>
                            <tr>
                                <th scope="col">Em Cluster</th>
                                <th scope="col">Em ambiente Citrixress</th>
                                <th scope="col">Em ambiente Sun Solaris</th>
                                <th scope="col">Em ambiente IBM AS/400</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["em_cluster"] ?></td>
                                <td><?= $result["em_cetrix"] ?></td>
                                <td><?= $result["solaris"] ?></td>
                                <td><?= $result["ibm"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Descreva o ambiente para impressões extraordinária:</th>
                                <th scope="col">Modelo e quantidade de impressoras de rede:</th>
                                <th scope="col">Modelo e quantidade de impressoras USB:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["amb_impressao_extraordinario"] ?></td>
                                <td><?= $result["mod_e_qtde_de_impressoras"] ?></td>
                                <td><?= $result["mod_e_qtde_de_impressoras_usb"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">O(s) servidor(es) de impressão será de responsabilidade da contratada?</th>
                                <th scope="col">Caso o(s) servidor(es) de impressão sejam de responsabilidade da contratada. Há algum tipo de restrição quanto ao fabricante do hardware e seu modelo?</th>
                                <th scope="col">Descreva a restrição:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["server_imp_resp"] ?></td>
                                <td><?= $result["restricoes_do_fabricante"] ?></td>
                                <td><?= $result["descricao_restricao"] ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Objetivo do projeto:</th>
                                <th scope="col">Observações adicionais:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result["objetivo_projeto"] ?></td>
                                <td><?= $result["observacoes_adicionais"] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
