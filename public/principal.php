<?php include_once './commom/header.php';?>
<?php 
use App\DI\Container;
$dados = Container::getSelectClientsChecklist();
$result = $dados->select();
?>
<div class="row">
    <div class="col-xs-12">
        <h1>Página principal(estamos em construção)</h1>
    </div>
</div>
<?php include_once './commom/footer.php';?>

