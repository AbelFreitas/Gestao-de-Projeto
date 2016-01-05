<?php
require_once(realpath(dirname(__FILE__)) . '/BD.php');

/**
 * @access public
 * @author Diogo
 */
class Admin {
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
	 * @return array_alunos : string[]
	 * @ReturnType array_alunos : string[]
	 * array_alunos[]
	 * �
	 */
	public function obtem_alunos() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return array_professores : string[]
	 * @ReturnType array_professores : string[]
	 * array_professores[]
	 * �
	 */
	public function obtem_professores() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_utilizador
	 * @return boolean
	 * @ParamType aId_utilizador int
	 * @ReturnType boolean
	 */
	public function ativar_desativar($aId_utilizador) {
		// Not yet implemented
	}
}
?>
