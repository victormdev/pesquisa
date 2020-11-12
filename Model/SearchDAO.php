<?php
    require_once 'Db.php';
    class SearchDAO extends Db{
    
        public function __construct() {
            parent::__construct();
        }
    
        public function inserir($o){     
            return queryTransaction("INSERT INTO SEARCH ( DESCRICAO, CIDADE, POPULACAO, ELEITORES, PERIODO, NIVEL_CONFIANCA, MARGEM_ERRO, TOTAL_PARTICIPANTE, INTRODUCAO, PERGUNTAS ) VALUES('$o->DESCRICAO','$o->CIDADE','$o->POPULACAO','$o->ELEITORES','$o->PERIODO','$o->NIVEL_CONFIANCA','$o->MARGEM_ERRO','$o->TOTAL_PARTICIPANTE','$o->INTRODUCAO','$o->PERGUNTAS')");
            }
        public function alterar($o){
            return queryTransaction("UPDATE SEARCH SET  DESCRICAO='$o->DESCRICAO', CIDADE='$o->CIDADE', POPULACAO='$o->POPULACAO', ELEITORES='$o->ELEITORES', PERIODO='$o->PERIODO', NIVEL_CONFIANCA='$o->NIVEL_CONFIANCA', MARGEM_ERRO='$o->MARGEM_ERRO', TOTAL_PARTICIPANTE='$o->TOTAL_PARTICIPANTE', INTRODUCAO='$o->INTRODUCAO', PERGUNTAS WHERE ID ='$o->ID'");
        }
        public function excluir($o){
            return queryTransaction( "DELETE FROM SEARCH WHERE ID ='$o->ID'");
        }
        public function obter($o = null){
            return $this->querySelector("SELECT * FROM SEARCH ");     
        }
        public function obterPorPk($o){
            return $this->querySelector("SELECT * FROM SEARCH WHERE ID = '$o->ID'");   
        }

        public  function queryTransaction($query){
            try{
                 return $this->oConn->exec($query);
             }catch (Exception $ex) {
                 return false;
             }
        } 
        public  function querySelector($query){
         $res = $this->oConn->query($query);
         return $res->fetchAll();
        }
    }
?>