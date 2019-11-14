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
$dompdf = new DOMPDF();

// Carrega seu HTML
$dompdf->load_html('
			
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Criado em</th>
      <th scope="col">Razão social</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Endereço</th>
      <th scope="col">Contato</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>'.date("d/m/Y H:i:s", strtotime($result["created_at"])).'</td>
      <td>'.$result["rsocial"].'</td>
      <td>'.$result["cnpj"].'</td>
      <td>'.$result["endereco"].'</td>
      <td>'.$result["contato"].'</td>
      <td>'.$result["telefone"].'</td>
      <td>'.$result["email"].'</td>
    </tr>
  </tbody>
</table>

		');

//Renderizar o html
$dompdf->render();

//Exibibir a página
$dompdf->stream(
    $result["rsocial"]."pdf", array(
    "Attachment" => false //Para realizar o download somente alterar para true
        )
);

