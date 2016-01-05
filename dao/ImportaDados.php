<?php
require_once(realpath(dirname(__FILE__)) . '/BD.php');

/**
 * @access public
 * @author Diogo
 */
class ImportaDados {
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
	 * @return nome : string, sigla : string
	 * @ReturnType nome : string, sigla : string
	 * string nome
	 * string sigla
	 * �
	 */
	public function obtem_curso() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return nome : string, primeiro_semestre : boolean
	 * @ReturnType nome : string, primeiro_semestre : boolean
	 * nome
	 * primeiro_semestre
	 * �
	 */
	public function obtem_disciplina() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function obtem_disciplina_por_curso() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return nome : string, identificador : string, email : string
	 * @ReturnType nome : string, identificador : string, email : string
	 * nome
	 * identificador
	 * email
	 * �
	 */
	public function obtem_professor() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function obtem_disciplina_professor() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return nome : string, identificador : string, email : string
	 * @ReturnType nome : string, identificador : string, email : string
	 * nome
	 * identificador
	 * email
	 * �
	 */
	public function obtem_aluno() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function obtem_disciplina_aluno() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_tabela
	 * @return boolean
	 * @ParamType aId_tabela int
	 * @ReturnType boolean
	 */
	public function verifica_existencia_id($aId_tabela) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string[] aDados_geral
	 * @return boolean
	 * @ParamType aDados_geral string[]
	 * @ReturnType boolean
	 */
	public function guarda_dados(array $aDados_geral) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string[] aDados_curso
	 * @return boolean
	 * @ParamType aDados_curso string[]
	 * @ReturnType boolean
	 * nome
	 * sigla
	 * �
	 */
	public function guarda_curso(array $aDados_curso) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string[] aDados_disciplina
	 * @return boolean
	 * @ParamType aDados_disciplina string[]
	 * @ReturnType boolean
	 * nome
	 * primeiro_semestre
	 * �
	 */
	public function guarda_disciplina(array $aDados_disciplina) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string[] aDados_disciplina_curso
	 * @return boolean
	 * @ParamType aDados_disciplina_curso string[]
	 * @ReturnType boolean
	 */
	public function guarda_disciplina_por_curso(array $aDados_disciplina_curso) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string[] aDados_professor
	 * @return boolean
	 * @ParamType aDados_professor string[]
	 * @ReturnType boolean
	 * nome
	 * identificador
	 * email
	 * �
	 */
	public function guarda_professor(array $aDados_professor) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string[] aDados_disciplina_professor
	 * @return boolean
	 * @ParamType aDados_disciplina_professor string[]
	 * @ReturnType boolean
	 */
	public function guarda_disciplina_professor(array $aDados_disciplina_professor) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string[] aDados_aluno
	 * @return boolean
	 * @ParamType aDados_aluno string[]
	 * @ReturnType boolean
	 * nome
	 * identificador
	 * email
	 * �
	 */
	public function guarda_aluno(array $aDados_aluno) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string[] aDados_disciplina_aluno
	 * @return boolean
	 * @ParamType aDados_disciplina_aluno string[]
	 * @ReturnType boolean
	 */
	public function guarda_disciplina_aluno(array $aDados_disciplina_aluno) {
		// Not yet implemented
	}
}
?>
