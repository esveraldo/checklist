<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$status = array('success' => '', 'failed' => '');

if(!empty($_POST)){
    $status['success'] = 'success';
    echo json_encode($status['success']);
}else{
    $status['failed'] = 'failed';
    echo json_encode($status['failed']);
}

