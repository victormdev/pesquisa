<?php
    require_once 'Controller.php';
    require '../Model/SearchDAO.php';
    class SearchController extends Controller{

        private $id;
        private $cidade;
        private $periodo;
        private $termino;
        
        public function __constructor(){
            parent::__construct();
        }

        public function salvar(){  
            $o = new class{};   
            $o->DESCRICAO =$_REQUEST['descricao'];
            $o->CIDADE = $_REQUEST['cidade'];
            $o->POPULACAO = $_REQUEST['populacao'];
            $o->ELEITORES = $_REQUEST['eleitores'];
            $o->PERIODO = $_REQUEST['periodo'];
            $o->NIVEL_CONFIANCA = $_REQUEST['nivelConfianca'];
            $o->MARGEM_ERRO = $_REQUEST['margemErro'];
            $o->TOTAL_PARTICIPANTE = $_REQUEST['totalParticipante'];
            $o->INTRODUCAO = $_REQUEST['introducao'];
            $o->PERGUNTAS = $_REQUEST['perguntas'];
            $o->PERIODO_FINAL = $_REQUEST['periodo_final'];

            $SearchDAO = new SearchDAO();
        
            if($SearchDAO->inserir($o)){
        
                echo "<script>alert('criada com sucesso')</script>";
            }else{
                echo "<script>alert(' criada com sucesso')</script>";
        
            }    
        }
        public function alterar(){
          
            $o = new class{};  
            $o->ID = $_REQUEST['id']; 
            $o->DESCRICAO =$_REQUEST['descricao'];
            $o->CIDADE = $_REQUEST['cidade'];
            $o->POPULACAO = $_REQUEST['populacao'];
            $o->ELEITORES = $_REQUEST['eleitores'];
            $o->PERIODO = $_REQUEST['periodo'];
            $o->NIVEL_CONFIANCA = $_REQUEST['nivelConfianca'];
            $o->MARGEM_ERRO = $_REQUEST['margemErro'];
            $o->TOTAL_PARTICIPANTE = $_REQUEST['totalParticipante'];
            $o->INTRODUCAO = $_REQUEST['introducao'];
            $o->PERGUNTAS = $_REQUEST['perguntas'];
            $o->PERIODO_FINAL = $_REQUEST['periodo_final'];

            $SearchDAO = new SearchDAO();
            if($SearchDAO->alterar($o)){
                echo "<script>alert(' aleterada com sucesso')</script>";
            }else{
                echo "<script>alert('erro')</script>";
            }
        }
        public function deletar (){
            
            $o = new class{};   
            $o->ID = $_REQUEST['id']; 
            $SearchDAO = new SearchDAO();
        
            $o->ID =$o->ID ;
             
            if($SearchDAO->excluir( $o)){
                echo "<script>alert('Excluído com  sucesso')</script>";
            }else{
                echo "<script>alert('erro')</script>";
            }
        }        
        public function obterPesquisas(){
            $searchDAO = new SearchDAO();
            return $searchDAO->obter();
        }
        public function obterPesquisaPorPk(){ 
            $this->id = $_REQUEST['codigo'];
            $o = new class{};   
            $o->ID = $this->id;
            $searchDAO = new SearchDAO();   
            echo  json_encode($searchDAO->obterPorPk($o));
            exit;
        }



    }
?>