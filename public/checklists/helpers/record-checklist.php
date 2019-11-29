<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../../../vendor/autoload.php';

use App\DI\Container;
use App\Helpers\PHPMailer\Email;

$rsocial = filter_input(INPUT_POST, 'rsocial', FILTER_DEFAULT);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_DEFAULT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_DEFAULT);
$contato  = filter_input(INPUT_POST, 'contato', FILTER_DEFAULT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
if(count($_POST['bilhetagem']) > 1){
    $bilhetagem = implode(",", $_POST['bilhetagem']);
}else{
    $bilhetagem = implode("", $_POST['bilhetagem']);
}
if(count($_POST['relatorios']) > 1){
    $relatorios = implode(",", $_POST['relatorios']);
}else{
    $relatorios = implode("", $_POST['relatorios']);
}
$outros_relatorios = filter_input(INPUT_POST, 'outros_relatorios', FILTER_DEFAULT);
$listagem = filter_input(INPUT_POST, 'listagem', FILTER_DEFAULT);
if(count($_POST['regras_imp']) > 1){
    $regras_imp = implode(",", $_POST['regras_imp']);
}else{
    $regras_imp = implode("", $_POST['regras_imp']);
}
$pool = filter_input(INPUT_POST, 'pool', FILTER_DEFAULT);
$cotas = filter_input(INPUT_POST, 'cotas', FILTER_DEFAULT);
if(count($_POST['alerta_cotas']) > 1){
    $alerta_cotas = implode(",", $_POST['alerta_cotas']);
}else{
    $alerta_cotas = implode("", $_POST['alerta_cotas']);
}
$policy = filter_input(INPUT_POST, 'policy', FILTER_DEFAULT);
if(count($_POST['lib_cracha']) > 1){
    $lib_cracha = implode(",", $_POST['lib_cracha']);
}else{
    $lib_cracha = implode("", $_POST['lib_cracha']);
}
$outros_lib_cracha = filter_input(INPUT_POST, 'outros_lib_cracha', FILTER_DEFAULT);
$chargerback = filter_input(INPUT_POST, 'chargerback', FILTER_DEFAULT);
if(count($_POST['tracking']) > 1){
    $tracking = implode(",", $_POST['tracking']);
}else{
    $tracking = implode("", $_POST['tracking']);
}
$releaser = filter_input(INPUT_POST, 'releaser', FILTER_DEFAULT);
if(count($_POST['dispositivos_liberacao']) > 1){
    $dispositivos_liberacao = implode(",", $_POST['dispositivos_liberacao']);
}else{
    $dispositivos_liberacao = implode("", $_POST['dispositivos_liberacao']);
}
$outros_dispositivos_liberacao = filter_input(INPUT_POST, 'outros_dispositivos_liberacao', FILTER_DEFAULT);
$implementacao = filter_input(INPUT_POST, 'implementacao', FILTER_DEFAULT);
$instalacao = filter_input(INPUT_POST, 'instalacao', FILTER_DEFAULT);
$sites = filter_input(INPUT_POST, 'sites', FILTER_DEFAULT);
$impressao = filter_input(INPUT_POST, 'impressao', FILTER_DEFAULT);
$sem_server_imp = filter_input(INPUT_POST, 'sem_server_imp', FILTER_DEFAULT);
$sis_op = filter_input(INPUT_POST, 'sis_op', FILTER_DEFAULT);
$comunicacao_entre_sites = filter_input(INPUT_POST, 'comunicacao_entre_sites', FILTER_DEFAULT);
$user_autentic_estacoes = filter_input(INPUT_POST, 'user_autentic_estacoes', FILTER_DEFAULT);
$imp_rede_usb = filter_input(INPUT_POST, 'imp_rede_usb', FILTER_DEFAULT);
$licenca_sql_server = filter_input(INPUT_POST, 'licenca_sql_server', FILTER_DEFAULT);
$instalar_sql_server_express = filter_input(INPUT_POST, 'instalar_sql_server_express', FILTER_DEFAULT);
if(count($_POST['server_dominio_autenticacao']) > 1){
    $server_dominio_autenticacao = implode(",", $_POST['server_dominio_autenticacao']);
}else{
    $server_dominio_autenticacao = implode("", $_POST['server_dominio_autenticacao']);
}
$outros_server_dominio_autenticacao = filter_input(INPUT_POST, 'outros_server_dominio_autenticacao', FILTER_DEFAULT);
$outros_importacao_dominio = filter_input(INPUT_POST, 'outros_importacao_dominio', FILTER_DEFAULT);
$importacao_dominio = filter_input(INPUT_POST, 'importacao_dominio', FILTER_DEFAULT);
$qtde_users = filter_input(INPUT_POST, 'qtde_users', FILTER_DEFAULT);
$qtde_contas = filter_input(INPUT_POST, 'qtde_contas', FILTER_DEFAULT);
$qtde_grupos = filter_input(INPUT_POST, 'qtde_grupos', FILTER_DEFAULT);
$qtde_estacoes_trabalho = filter_input(INPUT_POST, 'qtde_estacoes_trabalho', FILTER_DEFAULT);
if(count($_POST['sis_op_est_trabalho']) > 1){
    $sis_op_est_trabalho = implode(",", $_POST['sis_op_est_trabalho']);
}else{
    $sis_op_est_trabalho = implode("", $_POST['sis_op_est_trabalho']);
}
$outros_sis_op_est_trabalho = filter_input(INPUT_POST, 'outros_sis_op_est_trabalho', FILTER_DEFAULT);
if(count($_POST['navegadores_utilizados']) > 1){
    $navegadores_utilizados = implode(",", $_POST['navegadores_utilizados']);
}else{
    $navegadores_utilizados = implode("", $_POST['navegadores_utilizados']);
}
$outros_navegadores_utilizados = filter_input(INPUT_POST, 'outros_navegadores_utilizados', FILTER_DEFAULT);
$antivirus_utilizado = filter_input(INPUT_POST, 'antivirus_utilizado', FILTER_DEFAULT);
$erp_utilizado = filter_input(INPUT_POST, 'erp_utilizado', FILTER_DEFAULT);
$plataforma_erp = filter_input(INPUT_POST, 'plataforma_erp', FILTER_DEFAULT);
$impressao_erp = filter_input(INPUT_POST, 'impressao_erp', FILTER_DEFAULT);
$bilhetagem_erp = filter_input(INPUT_POST, 'bilhetagem_erp', FILTER_DEFAULT);
if(count($_POST['forma_desej_bilhetagem_erp']) > 1){
    $forma_desej_bilhetagem_erp = implode(",", $_POST['forma_desej_bilhetagem_erp']);
}else{
    $forma_desej_bilhetagem_erp = implode("", $_POST['forma_desej_bilhetagem_erp']);
}
$em_cluster = filter_input(INPUT_POST, 'em_cluster', FILTER_DEFAULT);
$em_cetrix = filter_input(INPUT_POST, 'em_cetrix', FILTER_DEFAULT);
$solaris = filter_input(INPUT_POST, 'solaris', FILTER_DEFAULT);
$ibm = filter_input(INPUT_POST, 'ibm', FILTER_DEFAULT);
$amb_impressao_extraordinario = filter_input(INPUT_POST, 'amb_impressao_extraordinario', FILTER_DEFAULT);
$mod_e_qtde_de_impressoras = filter_input(INPUT_POST, 'mod_e_qtde_de_impressoras', FILTER_DEFAULT);
$mod_e_qtde_de_impressoras_usb = filter_input(INPUT_POST, 'mod_e_qtde_de_impressoras_usb', FILTER_DEFAULT);
$server_imp_resp = filter_input(INPUT_POST, 'server_imp_resp', FILTER_DEFAULT);
$restricoes_do_fabricante = filter_input(INPUT_POST, 'restricoes_do_fabricante', FILTER_DEFAULT);
$descricao_restricao = filter_input(INPUT_POST, 'descricao_restricao', FILTER_DEFAULT);
$objetivo_projeto = filter_input(INPUT_POST, 'objetivo_projeto', FILTER_DEFAULT);
$observacoes_adicionais = filter_input(INPUT_POST, 'observacoes_adicionais', FILTER_DEFAULT);


$fields = array($rsocial, $cnpj, $endereco, $contato, $telefone, $email, $bilhetagem, $relatorios, $outros_relatorios, $listagem, $regras_imp,
                $pool, $cotas, $alerta_cotas, $policy, $lib_cracha, $outros_lib_cracha, $chargerback, $tracking, $releaser, $dispositivos_liberacao, $outros_dispositivos_liberacao,
                $implementacao, $instalacao, $sites, $impressao, $sem_server_imp, $sis_op, $comunicacao_entre_sites, 
                $user_autentic_estacoes, $imp_rede_usb, $licenca_sql_server, $instalar_sql_server_express, $server_dominio_autenticacao, $outros_server_dominio_autenticacao,
                $importacao_dominio, $outros_importacao_dominio, $qtde_users, $qtde_contas, $qtde_grupos, $qtde_estacoes_trabalho, $sis_op_est_trabalho, $outros_sis_op_est_trabalho, $navegadores_utilizados, $outros_navegadores_utilizados,
                $antivirus_utilizado, $erp_utilizado, $plataforma_erp, $impressao_erp, $bilhetagem_erp, $forma_desej_bilhetagem_erp, 
                $em_cluster, $em_cetrix, $solaris, $ibm, $amb_impressao_extraordinario, $mod_e_qtde_de_impressoras, $mod_e_qtde_de_impressoras_usb,
                $server_imp_resp, $restricoes_do_fabricante, $descricao_restricao, $objetivo_projeto, $observacoes_adicionais);  

//Inserindo dados no checklist
$insertDados = Container::getInsertClientsChecklist();
$insertDados->setFields($fields);
$result = $insertDados->insert();


$response = array("status" => null, "success" => null, "message" => null);

if($result != false){
    //Inserindo dados no status
    $insertDados->setClients_checklist_id($result);
    $insertDados->setStatus("inicial");
    $insertDados->setObs("Sem observações");
    $insertDados->insertObs();
    //Envio de email 
    require_once './template.php';
    require_once './template-checklist.php';
    $officeTotal = new Email('pablo.oliveira@officetotal.com.br', 'Checklist', $mensagemOfficeTotal);
    $cliente = new Email($email, 'Recebemos seu checklist', $mensagemCliente);
    
    $response = array("status" => "success", "message" => "success");
    
}else{
    $response = array("status" => "failed", "message" => "failed");
}

echo json_encode($response);

