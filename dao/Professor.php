<?php
require_once(realpath(dirname(__FILE__)) . '/BD.php');

/**
 * @access public
 * @author Diogo
 */
class Professor {
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
	 * @param int aId_inquerito
	 * @return boolean
	 * @ParamType aId_inquerito int
	 * @ReturnType boolean
	 */
	public function submete_inq($aId_inquerito) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_inquerito
	 * @param date aData_atual
	 * @return boolean
	 * @ParamType aId_inquerito int
	 * @ParamType aData_atual date
	 * @ReturnType boolean
	 */
	public function encerra_inq($aId_inquerito, date_6 $aData_atual) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_inquerito
	 * @param string aMensagem
	 * @return boolean
	 * @ParamType aId_inquerito int
	 * @ParamType aMensagem string
	 * @ReturnType boolean
	 */
	public function notificacao_enviar($aId_inquerito, $aMensagem) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string aTitulo
	 * @param string[] aPerguntas
	 * @param string aMensagem_inicio
	 * @param string aMensagem_fim
	 * @param string aNotificacao_automatica
	 * @param date aData_atual
	 * @return boolean
	 * @ParamType aTitulo string
	 * @ParamType aPerguntas string[]
	 * @ParamType aMensagem_inicio string
	 * @ParamType aMensagem_fim string
	 * @ParamType aNotificacao_automatica string
	 * @ParamType aData_atual date
	 * @ReturnType boolean
	 */
	public function criar_inq($aTitulo, array $aPerguntas, $aMensagem_inicio, $aMensagem_fim, $aNotificacao_automatica, date_7 $aData_atual) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_inquerito
	 * @return boolean
	 * @ParamType aId_inquerito int
	 * @ReturnType boolean
	 */
	public function apagar_inq($aId_inquerito) {
		// Not yet implemented
	}
}
?>
