<?php
require_once(realpath(dirname(__FILE__)) . '/BD.php');

/**
 * @access public
 * @author Diogo
 */
class Login {
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
	 * @param string aUsername
	 * @param string aPassword
	 * @return tipo_utilizador : string
	 * @ParamType aUsername string
	 * @ParamType aPassword string
	 * @ReturnType tipo_utilizador : string
	 * 
	 * Aluno
	 * Professor
	 * Admin
	 * Null
	 * �
	 */
	public final function login($aUsername, $aPassword) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string aUsername
	 * @param string aPassword
	 * @return boolean
	 * @ParamType aUsername string
	 * @ParamType aPassword string
	 * @ReturnType boolean
	 */
	public function verifica_ldap($aUsername, $aPassword) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string aUsername
	 * @return tipo_utilizador : string
	 * @ParamType aUsername string
	 * @ReturnType tipo_utilizador : string
	 * tipo_utilizador
	 * �
	 */
	public function verifica_tipo_utilizador($aUsername) {
		// Not yet implemented
	}
}
?>
