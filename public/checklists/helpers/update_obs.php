<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../../../vendor/autoload.php';

use App\DI\Container;

$updateObs = Container::getUpdateClientsChecklist();

$status = filter_input(INPUT_POST, 'status', FILTER_DEFAULT);
$updateObs->setId(filter_input(INPUT_POST, 'update_id', FILTER_DEFAULT));
$updateObs->setStatus($status);
$updateObs->setObs(filter_input(INPUT_POST, 'obs', FILTER_DEFAULT));

$result = $updateObs->updateObs();

$response = array("status" => null, "success" => null, "message" => null);

if($result != false){
    $response = array("status" => "success", "message" => "success");
}else{
    $response = array("status" => "failed", "message" => "failed");
}

echo json_encode($response);

