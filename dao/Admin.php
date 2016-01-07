<?php
include_once('../bd/bd_gp.php');

/**
 * @access public
 * @author JOSÉ REI
 * @author Diogo
 */
class Admin {

	public $DBH = null;
	public $bd = null;

	public function _construct() {
        try{
            $this->bd = new bd();
            $this->DBH = $this->bd->abre_ligacao();
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
        return true;
    }


	public function fecha_ligacao() {
        $this->bd->fecha_ligacao();
        $this->DBH = null;
    }

	public function obtem_alunos() {
        $dados = null;

        try{
            // Query para obter todos os alunos
            $instrucao = $this->DBH->prepare("SELECT * FROM UTILIZADOR WHERE U_TIPO = 'Aluno'");

            // Executar
            $sucesso_funcao = $instrucao->execute();

            // Percorrer os dados da query e guardar num array
            if($sucesso_funcao){
                $instrucao->setFetchMode(PDO::FETCH_ASSOC);
                while($registo = $instrucao->fetch()){
                $dados[] = $registo;
            }
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $dados;
    }

	public function obtem_professores() {
        $dados = null;

        try{
            // Query para obter todos os professores
            $instrucao = $this->DBH->prepare("SELECT * FROM UTILIZADOR WHERE U_TIPO = 'Professor'");

            // Executar
            $sucesso_funcao = $instrucao->execute();

            // Percorrer os dados da query e guardar num array
            if($sucesso_funcao){
                $instrucao->setFetchMode(PDO::FETCH_ASSOC);
                while($registo = $instrucao->fetch()){
                    $dados[] = $registo;
                }
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $dados;
    }

	public function ativar_desativar($U_ATIVO,$U_ID) {
        try{
            // Query para ativar ou desativar o utilizador
            $instrucao = $this->$DBH->prepare("UPDATE UTILIZADOR SET U_ATIVO=? WHERE U_ID=?");
            $instrucao->bind_param($U_ATIVO, $U_ID);

            // Executar
            $sucesso_funcao = $instrucao->execute();
            $instrucao->close();

        }catch(PDOException $e){
            echo $e->getMessage();
        }

        if($sucesso_funcao == true){
            return true;
        }
        return false;
    }
}
?>
