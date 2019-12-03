<?php include_once './commom/header.php'; ?>
<?php
ob_start();

use App\DI\Container;

$ses = Container::getSes();
if ($ses->ses()) {
    header("Location: /checklist/public/login");
}

set_time_limit(0);

$dados = Container::getSelectClientsChecklist();
$result = $dados->select();
?>
<div class="row">
    <div class="col-xs-12">
        <!--<table class="table table-hover">-->
        <table id="checklist" class="display" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Razão social</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col" style="width: 30px;">Ver</th>
                    <th scope="col" style="width: 30px;">PDF</th>
                    <th scope="col" style="width: 30px;">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($result)) { ?>
                    <tr>
                        <td colspan="7">Não foram encontrados registros.</td>
                    </tr>
                    <?php
                } else {
                    foreach ($result as $res) {
                        ?>
                        <tr>
                            <th scope="row"><?= $res['id'] ?></th>
                            <td><?= date("d/m/Y H:i:s", strtotime($res['created_at'])) ?></td>
                            <td><?= $res['rsocial'] ?></td>
                            <td><?= $res['cnpj'] ?></td>
                            <td><?= $res['endereco'] ?></td>
                            <td><?= $res['contato'] ?></td>
                            <td><?= $res['telefone'] ?></td>
                            <td><?= $res['email'] ?></td>
                            <td>
                                <form method="POST" action="relatorio">
                                    <input type="hidden" name="id" value="<?= $res['id'] ?>" />
                                    <button class="btn btn-primary">Ver</button>
                                </form>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="relatorio-em-pdf.php?id=<?= $res['id'] ?>" role="button">Gerar PDF</a>
                            </td>
                            <td>
                                <form method="POST" action="status">
                                    <input type="hidden" name="id" value="<?= $res['id'] ?>" />
                                    <button class="btn btn-primary">Status</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#checklist').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
    
    var table=$('#example').DataTable();

$('.dataTables_filter input').unbind().keyup(function(e) {
    var value = $(this).val();
    if (value.length>3) {
        //alert(value);
        table.search(value).draw();
    } else {     
        table.search('').draw();
    }        
});
</script>
<?php include_once './commom/footer.php'; ?>

