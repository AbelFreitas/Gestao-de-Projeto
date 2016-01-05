<?php
require_once(realpath(dirname(__FILE__)) . '/BD.php');

/**
 * @access public
 * @author Diogo
 */
class PA {
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
	 * @param string aTipo_inquerito
	 * @return nome, id_inq, data_preenchimento, notificacao_automatica : string[]
	 * @ParamType aId_utilizador int
	 * @ParamType aTipo_inquerito string
	 * @ReturnType nome, id_inq, data_preenchimento, notificacao_automatica : string[]
	 * nome
	 * id_inq
	 * data_preenchimento
	 * notificacao_automatica
	 * �
	 */
	public function obtem_inq_submetidos($aId_utilizador, $aTipo_inquerito) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_utilizador
	 * @return nome, id_inq, data : string[]
	 * @ParamType aId_utilizador int
	 * @ReturnType nome, id_inq, data : string[]
	 * nome
	 * id_inq
	 * data
	 * �
	 */
	public function obtem_inq_geral($aId_utilizador) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_inquerito
	 * @return titulo, mensagem_inicio, mensagem_fim, data_fim, notifica��o_automatica, disciplina_associada, array_perguntas : string[]
	 * @ParamType aId_inquerito int
	 * @ReturnType titulo, mensagem_inicio, mensagem_fim, data_fim, notifica��o_automatica, disciplina_associada, array_perguntas : string[]
	 * titulo
	 * mensagem_inicio
	 * mensagem_fim
	 * data_fim
	 * notificacao_automatica
	 * disciplina_associada
	 * array_perguntas[]
	 * �
	 */
	public function obter_inq($aId_inquerito) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_inquerito
	 * @return array_perguntas : string[]
	 * @ParamType aId_inquerito int
	 * @ReturnType array_perguntas : string[]
	 * array_perguntas[]
	 * �
	 */
	public function obter_perguntas($aId_inquerito) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_inquerito
	 * @return titulo, mensagem_inicio, mensagem_fim, data_fim, notifica��o_automatica : string[]
	 * @ParamType aId_inquerito int
	 * @ReturnType titulo, mensagem_inicio, mensagem_fim, data_fim, notifica��o_automatica : string[]
	 * titulo
	 * mensagem_inicio
	 * mensagem_fim
	 * data_fim
	 * notifica��o_automatica
	 * �
	 */
	public function obter_dados_inq($aId_inquerito) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_inquerito
	 * @return disciplina_associada : string
	 * @ParamType aId_inquerito int
	 * @ReturnType disciplina_associada : string
	 * disciplina_associada
	 * �
	 */
	public function obter_disciplina($aId_inquerito) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_inquerito
	 * @param int aId_disciplina
	 * @return array_respostas : string[]
	 * @ParamType aId_inquerito int
	 * @ParamType aId_disciplina int
	 * @ReturnType array_respostas : string[]
	 * array_resposta[](id_pergunta)
	 * �
	 */
	public function obter_estatisticas($aId_inquerito, $aId_disciplina) {
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
	public function editar_inq($aTitulo, array $aPerguntas, $aMensagem_inicio, $aMensagem_fim, $aNotificacao_automatica, date_4 $aData_atual) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_inquerito
	 * @param int aId_utilizador
	 * @param string aEstado_utilizador
	 * @return boolean
	 * @ParamType aId_inquerito int
	 * @ParamType aId_utilizador int
	 * @ParamType aEstado_utilizador string
	 * @ReturnType boolean
	 */
	public function partilhar_inq($aId_inquerito, $aId_utilizador, $aEstado_utilizador) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int aId_utilizador
	 * @return boolean
	 * @ParamType aId_utilizador int
	 * @ReturnType boolean
	 */
	public function verifica_se_e_criador($aId_utilizador) {
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
	public function ver_notificacao_enviada($aId_utilizador) {
		// Not yet implemented
	}
}
?>
