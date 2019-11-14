<?php

require_once '../vendor/autoload.php';

use App\DI\Container;
$dados = Container::getSelectClientsChecklist();
$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$dados->setId($id);
$result = $dados->selectOne();

//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once("./libs/dompdf/autoload.inc.php");

//Criando a Instancia
$dompdf = new Dompdf(['isHtml5ParserEnabled' => true]);
$dompdf->setPaper('A4', 'landscape');

// Carrega seu HTML
$dompdf->load_html('
    
<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Checklist</title>
    <style>
      body {
        font: 75%/1.6 "Myriad Pro", Frutiger, "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", Verdana, sans-serif;
      }
      table {
        border-spacing: 0;
        border-collapse: collapse;
      }
      td,
      th {
        padding: 0;
      }

      thead {
          display: table-header-group;
        }

      .table {
          border-collapse: collapse !important;
        }
        .table td,
        .table th {
          background-color: #fff !important;
        }
        .table-bordered th,
        .table-bordered td {
          border: 1px solid #ddd !important;
        }

      table {
        background-color: transparent;
      }

      .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
      }
      .table > thead > tr > th,
      .table > tbody > tr > th,
      .table > tfoot > tr > th,
      .table > thead > tr > td,
      .table > tbody > tr > td,
      .table > tfoot > tr > td {
        padding: 8px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: 1px solid #ddd;
      }
      .table > thead > tr > th {
        vertical-align: bottom;
        border-bottom: 2px solid #ddd;
      }
      .table > caption + thead > tr:first-child > th,
      .table > colgroup + thead > tr:first-child > th,
      .table > thead:first-child > tr:first-child > th,
      .table > caption + thead > tr:first-child > td,
      .table > colgroup + thead > tr:first-child > td,
      .table > thead:first-child > tr:first-child > td {
        border-top: 0;
      }
      .table > tbody + tbody {
        border-top: 2px solid #ddd;
      }
      .table .table {
        background-color: #fff;
      }

      .table-bordered {
        border: 1px solid #ddd;
      }
      .table-bordered > thead > tr > th,
      .table-bordered > tbody > tr > th,
      .table-bordered > tfoot > tr > th,
      .table-bordered > thead > tr > td,
      .table-bordered > tbody > tr > td,
      .table-bordered > tfoot > tr > td {
        border: 1px solid #ddd;
      }
      .table-bordered > thead > tr > th,
      .table-bordered > thead > tr > td {
        border-bottom-width: 2px;
      }

      .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #f9f9f9;
      }
      .table-hover > tbody > tr:hover {
        background-color: #f5f5f5;
      }
      table col[class*="col-"] {
        position: static;
        display: table-column;
        float: none;
      }
      table td[class*="col-"],
      table th[class*="col-"] {
        position: static;
        display: table-cell;
        float: none;
      }
      .table > thead > tr > td.active,
      .table > tbody > tr > td.active,
      .table > tfoot > tr > td.active,
      .table > thead > tr > th.active,
      .table > tbody > tr > th.active,
      .table > tfoot > tr > th.active,
      .table > thead > tr.active > td,
      .table > tbody > tr.active > td,
      .table > tfoot > tr.active > td,
      .table > thead > tr.active > th,
      .table > tbody > tr.active > th,
      .table > tfoot > tr.active > th {
        background-color: #f5f5f5;
      }
      .table-hover > tbody > tr > td.active:hover,
      .table-hover > tbody > tr > th.active:hover,
      .table-hover > tbody > tr.active:hover > td,
      .table-hover > tbody > tr:hover > .active,
      .table-hover > tbody > tr.active:hover > th {
        background-color: #e8e8e8;
      }
      .table > thead > tr > td.success,
      .table > tbody > tr > td.success,
      .table > tfoot > tr > td.success,
      .table > thead > tr > th.success,
      .table > tbody > tr > th.success,
      .table > tfoot > tr > th.success,
      .table > thead > tr.success > td,
      .table > tbody > tr.success > td,
      .table > tfoot > tr.success > td,
      .table > thead > tr.success > th,
      .table > tbody > tr.success > th,
      .table > tfoot > tr.success > th {
        background-color: #dff0d8;
      }
      .table-hover > tbody > tr > td.success:hover,
      .table-hover > tbody > tr > th.success:hover,
      .table-hover > tbody > tr.success:hover > td,
      .table-hover > tbody > tr:hover > .success,
      .table-hover > tbody > tr.success:hover > th {
        background-color: #d0e9c6;
      }
      .table > thead > tr > td.info,
      .table > tbody > tr > td.info,
      .table > tfoot > tr > td.info,
      .table > thead > tr > th.info,
      .table > tbody > tr > th.info,
      .table > tfoot > tr > th.info,
      .table > thead > tr.info > td,
      .table > tbody > tr.info > td,
      .table > tfoot > tr.info > td,
      .table > thead > tr.info > th,
      .table > tbody > tr.info > th,
      .table > tfoot > tr.info > th {
        background-color: #d9edf7;
      }
      .table-hover > tbody > tr > td.info:hover,
      .table-hover > tbody > tr > th.info:hover,
      .table-hover > tbody > tr.info:hover > td,
      .table-hover > tbody > tr:hover > .info,
      .table-hover > tbody > tr.info:hover > th {
        background-color: #c4e3f3;
      }
      .table > thead > tr > td.warning,
      .table > tbody > tr > td.warning,
      .table > tfoot > tr > td.warning,
      .table > thead > tr > th.warning,
      .table > tbody > tr > th.warning,
      .table > tfoot > tr > th.warning,
      .table > thead > tr.warning > td,
      .table > tbody > tr.warning > td,
      .table > tfoot > tr.warning > td,
      .table > thead > tr.warning > th,
      .table > tbody > tr.warning > th,
      .table > tfoot > tr.warning > th {
        background-color: #fcf8e3;
      }
      .table-hover > tbody > tr > td.warning:hover,
      .table-hover > tbody > tr > th.warning:hover,
      .table-hover > tbody > tr.warning:hover > td,
      .table-hover > tbody > tr:hover > .warning,
      .table-hover > tbody > tr.warning:hover > th {
        background-color: #faf2cc;
      }
      .table > thead > tr > td.danger,
      .table > tbody > tr > td.danger,
      .table > tfoot > tr > td.danger,
      .table > thead > tr > th.danger,
      .table > tbody > tr > th.danger,
      .table > tfoot > tr > th.danger,
      .table > thead > tr.danger > td,
      .table > tbody > tr.danger > td,
      .table > tfoot > tr.danger > td,
      .table > thead > tr.danger > th,
      .table > tbody > tr.danger > th,
      .table > tfoot > tr.danger > th {
        background-color: #f2dede;
      }
      .table-hover > tbody > tr > td.danger:hover,
      .table-hover > tbody > tr > th.danger:hover,
      .table-hover > tbody > tr.danger:hover > td,
      .table-hover > tbody > tr:hover > .danger,
      .table-hover > tbody > tr.danger:hover > th {
        background-color: #ebcccc;
      }
      .table-responsive {
        min-height: .01%;
        overflow-x: auto;
      }
      @media screen and (max-width: 767px) {
        .table-responsive {
          width: 100%;
          margin-bottom: 15px;
          overflow-y: hidden;
          -ms-overflow-style: -ms-autohiding-scrollbar;
          border: 1px solid #ddd;
        }
        .table-responsive > .table {
          margin-bottom: 0;
        }
        .table-responsive > .table > thead > tr > th,
        .table-responsive > .table > tbody > tr > th,
        .table-responsive > .table > tfoot > tr > th,
        .table-responsive > .table > thead > tr > td,
        .table-responsive > .table > tbody > tr > td,
        .table-responsive > .table > tfoot > tr > td {
          white-space: nowrap;
        }
        .table-responsive > .table-bordered {
          border: 0;
        }
        .table-responsive > .table-bordered > thead > tr > th:first-child,
        .table-responsive > .table-bordered > tbody > tr > th:first-child,
        .table-responsive > .table-bordered > tfoot > tr > th:first-child,
        .table-responsive > .table-bordered > thead > tr > td:first-child,
        .table-responsive > .table-bordered > tbody > tr > td:first-child,
        .table-responsive > .table-bordered > tfoot > tr > td:first-child {
          border-left: 0;
        }
        .table-responsive > .table-bordered > thead > tr > th:last-child,
        .table-responsive > .table-bordered > tbody > tr > th:last-child,
        .table-responsive > .table-bordered > tfoot > tr > th:last-child,
        .table-responsive > .table-bordered > thead > tr > td:last-child,
        .table-responsive > .table-bordered > tbody > tr > td:last-child,
        .table-responsive > .table-bordered > tfoot > tr > td:last-child {
          border-right: 0;
        }
        .table-responsive > .table-bordered > tbody > tr:last-child > th,
        .table-responsive > .table-bordered > tfoot > tr:last-child > th,
        .table-responsive > .table-bordered > tbody > tr:last-child > td,
        .table-responsive > .table-bordered > tfoot > tr:last-child > td {
          border-bottom: 0;
        }
      }

      tr.collapse.in {
        display: table-row;
      }
      tbody.collapse.in {
        display: table-row-group;
      }
      .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition-timing-function: ease;
             -o-transition-timing-function: ease;
                transition-timing-function: ease;
        -webkit-transition-duration: .35s;
             -o-transition-duration: .35s;
                transition-duration: .35s;
        -webkit-transition-property: height, visibility;
             -o-transition-property: height, visibility;
                transition-property: height, visibility;
      }

    </style>
    </head>
<body>

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
      <td>'.date("d/m/Y H:i:s", strtotime($result["created_at"])).'</td>
      <td>'.$result["rsocial"].'</td>
      <td>'.$result["cnpj"].'</td>
      <td>'.$result["endereco"].'</td>
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
      <td>'.$result["contato"].'</td>
      <td>'.$result["telefone"].'</td>
      <td>'.$result["email"].'</td>
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
      <td>'.$result["bilhetagem"].'</td>
      <td>'.$result["relatorios"].'</td>
      <td>'.$result["listagem"].'</td>
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
      <td>'.$result["regras_imp"].'</td>
      <td>'.$result["pool"].'</td>
      <td>'.$result["cotas"].'</td>
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
      <td>'.$result["alerta_cotas"].'</td>
      <td>'.$result["policy"].'</td>
      <td>'.$result["lib_cracha"].'</td>
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
      <td>'.$result["chargerback"].'</td>
      <td>'.$result["tracking"].'</td>
      <td>'.$result["releaser"].'</td>
      <td>'.$result["instalacao"].'</td>
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
      <td>'.$result["dispositivos_liberacao"].'</td>
      <td>'.$result["implementacao"].'</td>     
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
      <td>'.$result["sites"].'</td>
      <td>'.$result["impressao"].'</td>
      <td>'.$result["sem_server_imp"].'</td>
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
      <td>'.$result["sis_op"].'</td>
      <td>'.$result["comunicacao_entre_sites"].'</td>
      <td>'.$result["user_autentic_estacoes"].'</td>
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
      <td>'.$result["imp_rede_usb"].'</td>
      <td>'.$result["licenca_sql_server"].'</td>
      <td>'.$result["instalar_sql_server_express"].'</td>
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
      <td>'.$result["server_dominio_autenticacao"].'</td>
      <td>'.$result["importacao_dominio"].'</td>
      <td>'.$result["qtde_users"].'</td>
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
      <td>'.$result["qtde_contas"].'</td>
      <td>'.$result["qtde_grupos"].'</td>
      <td>'.$result["qtde_estacoes_trabalho"].'</td>
      <td>'.$result["antivirus_utilizado"].'</td>
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
      <td>'.$result["sis_op_est_trabalho"].'</td>
      <td>'.$result["navegadores_utilizados"].'</td>     
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
      <td>'.$result["erp_utilizado"].'</td>
      <td>'.$result["plataforma_erp"].'</td>
      <td>'.$result["impressao_erp"].'</td>
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
      <td>'.$result["bilhetagem_erp"].'</td>
      <td>'.$result["forma_desej_bilhetagem_erp"].'</td>
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
      <td>'.$result["em_cluster"].'</td>
      <td>'.$result["em_cetrix"].'</td>
      <td>'.$result["solaris"].'</td>
      <td>'.$result["ibm"].'</td>
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
      <td>'.$result["amb_impressao_extraordinario"].'</td>
      <td>'.$result["mod_e_qtde_de_impressoras"].'</td>
      <td>'.$result["mod_e_qtde_de_impressoras_usb"].'</td>
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
      <td>'.$result["server_imp_resp"].'</td>
      <td>'.$result["restricoes_do_fabricante"].'</td>
      <td>'.$result["descricao_restricao"].'</td>
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
      <td>'.$result["objetivo_projeto"].'</td>
      <td>'.$result["observacoes_adicionais"].'</td>
    </tr>
  </tbody>
</table>

</body>
</html>'

    );

//Renderizar o html
$dompdf->render();

//Exibibir a página
$dompdf->stream(
    $result["rsocial"]."pdf", array(
    "Attachment" => false //Para realizar o download somente alterar para true
        )
);

