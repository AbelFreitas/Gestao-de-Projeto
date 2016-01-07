<?php

class bd {
    public $DBH = null;

    /**
     * string abre_ligação(void)
     *
     * esta função atribui à variàvel $DBH o link para a base de dados,
     * retorna o link
     */
    public function abre_ligacao(){
        global $host, $user, $pass, $db;

        try {
            $this->DBH = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        } catch(PDOException $e) {
            echo $e->getMessage();
            $this->error = $e->getMessage();
            var_dump($this->error);
            die("<h2> Erro ao criar link x</h2>");
        }
        return $this->DBH;
    }
    /**
     * void fecha_ligacao(void)
     *
     *esta função fecha a ligação à base de dados
     */
    public function fecha_ligacao(){
        $this->DBH=null;
    }
}
