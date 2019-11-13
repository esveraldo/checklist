<?php 

namespace App\Project;

use App\Contracts\InterfaceConnection;

class SelectClientsChecklist
{
	private $connection;

	public function __construct(InterfaceConnection $conn)
	{
		$this->connection = $conn->getConnection();
	}

	public function select()
	{
		try{
			$stmt = $this->connection->query("SELECT * FROM clients_checklist");
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetchAll(\PDO::FETCH_ASSOC);
			}else{
				return false;
			}
		}catch(\PDOException $e){
			echo 'Erro: ' . $e->getMessage();
		}
	}
}