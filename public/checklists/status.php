<?php include_once './commom/header.php'; ?>
<?php

use App\DI\Container;

$status = Container::getSelectClientsChecklist();
$id = filter_input(INPUT_POST, 'id', FILTER_DEFAULT);
$status->setId($id);
$result = $status->selectObs();
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 align="center" style="margin-bottom: 40px;">Status atual do cliente</h2>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="display-4">Atual:</h3>
                    <p class="lead"><?php echo $result['status'];?></p>
                </div>
            </div>
            
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="display-4">Observações:</h3>
                    <p class="lead"><?php echo $result['obs'];?></p>
                </div>
            </div>
            <form method="POST" action="alterar-status">
                <input type="hidden" name="id" value="<?=$id?>" />
                <button type="submit" class="btn btn-primary btn-lg">Atualizar status</button>
            </form>
        </div>          
    </div>
</div>
<?php include_once './commom/footer.php'; ?>

