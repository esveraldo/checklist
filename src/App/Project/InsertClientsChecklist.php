<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Project;

use App\Contracts\InterfaceConnection;

/**
 * Description of InsertClientsChecklist
 *
 * @author Esveraldo
 */
class InsertClientsChecklist {

    private $connection;
    private $fields = [];
    
    function getFields() {
        return $this->fields;
    }

    function setFields($fields) {
        $this->fields = $fields;
    }

    
    public function __construct(InterfaceConnection $conn) {
        $this->connection = $conn->getConnection();
    }
    
    public function insert()
	{
		try{
			$stmt = $this->connection->prepare("INSERT INTO clients_checklist( 
                            rsocial,
                            cnpj,
                            endereco,
                            contato,
                            telefone,
                            email,
                            bilhetagem,
                            relatorios,
                            listagem,
                            regras_imp,
                            pool,
                            cotas,
                            alerta_cotas,
                            policy,
                            lib_cracha,
                            chargerback,
                            tracking,
                            releaser,
                            dispositivos_liberacao,
                            implementacao,
                            instalacao,
                            sites,
                            impressao,
                            sem_server_imp,
                            sis_op,
                            comunicacao_entre_sites,
                            user_autentic_estacoes,
                            imp_rede_usb,
                            licenca_sql_server,
                            instalar_sql_server_express,
                            server_dominio_autenticacao,
                            importacao_dominio,
                            qtde_users,
                            qtde_contas,
                            qtde_grupos,
                            qtde_estacoes_trabalho,
                            sis_op_est_trabalho,
                            navegadores_utilizados,
                            antivirus_utilizado,
                            erp_utilizado,
                            plataforma_erp,
                            impressao_erp,
                            bilhetagem_erp,
                            forma_desej_bilhetagem_erp,
                            em_cluster,
                            em_cetrix,
                            solaris,
                            ibm,
                            amb_impressao_extraordinario,
                            mod_e_qtde_de_impressoras,
                            mod_e_qtde_de_impressoras_usb,
                            server_imp_resp,
                            restricoes_do_fabricante,
                            descricao_restricao,
                            objetivo_projeto,
                            observacoes_adicionais
                                 ) 
                            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                                   ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                                   ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
			$stmt->execute($this->getFields());
			if($stmt->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}catch(\PDOException $e){
			echo 'Erro: ' . $e->getMessage();
		}
	}

}
