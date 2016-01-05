<?php
require_once(realpath(dirname(__FILE__)) . '/BD.php');

/**
 * @access public
 * @author Diogo
 */
class Aluno {
	/**
	 * @AttributeType databasehandler
	 */
	private $_dBH;
	/**
	 * @AttributeType BD
	 */
	private $_bd;

	/**
	 * @access public
	 */
	public function _construct() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function fecha_ligacao() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_utilizador
	 * @return nome_inq : string, data_limite : date
	 * @ParamType aId_utilizador int
	 * @ReturnType nome_inq : string, data_limite : date
	 * nome_inq
	 * data_limite
	 * �
	 */
	public function obter_inq_preencher($aId_utilizador) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_utilizador
	 * @return nome_inq : string, notificacao : string
	 * @ParamType aId_utilizador int
	 * @ReturnType nome_inq : string, notificacao : string
	 * nome_inq
	 * notificacao
	 * �
	 */
	public function notificacoes_recebidas($aId_utilizador) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_utilizador
	 * @return nome_inq : string, disciplina_associada : string, id_inq : int, id_disciplina : int
	 * @ParamType aId_utilizador int
	 * @ReturnType nome_inq : string, disciplina_associada : string, id_inq : int, id_disciplina : int
	 * nome_inq
	 * disciplina_associada
	 * id_inq
	 * id_disciplina
	 * �
	 */
	public function obtem_inq_hist_preenchidos($aId_utilizador) {
		// Not yet implemented
	}
}
?>
