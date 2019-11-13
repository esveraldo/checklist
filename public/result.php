<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$status = array('success' => '', 'failed' => '');

if(!empty($_POST)){
    /*$status['success'] = 'success';
    echo json_encode($status['success']);*/
    echo '<br>';
    echo '<div class="alert alert-secondary" role="alert"> Dados gravados com sucesso! </div>';
}else{
    /*$status['failed'] = 'failed';
    echo json_encode($status['failed']);*/
    echo '<br>';
    echo '<div class="alert alert-danger" role="alert"> houve um erro ao gravar os dados! </div>';
}

