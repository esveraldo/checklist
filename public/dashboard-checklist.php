<?php include_once './commom/header.php';?>
<?php 
use App\DI\Container;
$dados = Container::getSelectClientsChecklist();
$result = $dados->select();
?>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-hover">
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
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($result)){?>
                <tr>
                    <td colspan="7">Não foram encontrados registros.</td>
                </tr>
                <?php 
                }else{
                    foreach ($result as $res){
                    ?>
                <tr>
                    <th scope="row"><?=$res['id']?></th>
                    <td><?=date("d/m/Y H:i:s", strtotime($res['created_at']))?></td>
                    <td><?=$res['rsocial']?></td>
                    <td><?=$res['cnpj']?></td>
                    <td><?=$res['endereco']?></td>
                    <td><?=$res['contato']?></td>
                    <td><?=$res['telefone']?></td>
                    <td><?=$res['email']?></td>
                    <td>
                        <a target="_blank" class="btn btn-primary" href="relatorio.php?id=<?=$res['id']?>" role="button">Ver</a> | 
                        <a class="btn btn-primary" href="relatorio-em-pdf.php?id=<?=$res['id']?>" role="button">Gerar PDF</a>
                    </td>
                </tr>
                <?php 
                    }
                }?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once './commom/footer.php';?>

