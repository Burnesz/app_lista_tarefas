<?php

class Conexao {

    private $host = '127.0.0.1';
    private $dbname = 'lista_tarefas';
    private $user = 'burnesz';
    private $pass = '';

    public function conectar(){

        try{

            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->pass
            );

            return $conexao;

        } catch (PDOException $e) {
            echo '<p>'.$e->getMessage().'</p>';

        }
    }
}

?>
