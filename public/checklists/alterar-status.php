<?php include_once './commom/header.php'; ?>
<?php

ob_start();

use App\DI\Container;

$ses = Container::getSes();
if ($ses->ses()) {
    header("Location: /checklist/public/login");
}

set_time_limit(0);

$status = Container::getSelectClientsChecklist();
$id = filter_input(INPUT_POST, 'id', FILTER_DEFAULT);
$status->setId($id);
$result = $status->selectObs();
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 align="center" style="margin-bottom: 40px;">Atualizar informações do cliente</h2>
            <form id="update_obs" method="POST" action="helpers/update_obs.php">
                <input type="hidden" name="update_id" value="<?= $result['id'] ?>" />
                <div class="form-group">
                    <label for="status">Escolha o status</label>
                    <select name="status" class="form-control" id="status">
                        <option value="<?= $result['status'] ?>"><?= $result['status'] ?></option>
                        <option value="">Inicial</option>
                        <option value="">Em análise</option>
                        <option value="">Com pendência</option>
                        <option value="">Finalizado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="obs">Atualizar observações</label>
                    <textarea name="obs" class="form-control" id="obs" rows="7"><?= $result['obs'] ?></textarea>
                </div>

                <button type="button" class="btn btn-primary btn-lg" id="btnUpdateObs">Atualizar informações</button>
            </form>
            <br>
            <br>
            <div class="resposta"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#btnUpdateObs").click(function () {
            var dados = $('#update_obs').serialize();

            $.ajax({
                url: "helpers/update_obs.php",
                type: "post",
                dataType: "json",
                data: dados,
                success: function (result) {
                    console.log(result);
                    $(".resposta").html('<div class="alert alert-success">Dados gravados com sucesso!</div>');
                },
                error: function (result) {
                    console.log(result);
                    $(".resposta").html('<div class="alert alert-danger">Erro ao gravar os dados!</div>');
                }
            });
        });
    });
</script>
<?php include_once './commom/footer.php'; ?>

