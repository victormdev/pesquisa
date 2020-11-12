<?php
    require_once 'Controller.php';
    require '../Model/ClienteDAO.php';
    class SearchController extends Controller{


        
        public function __constructor(){
            parent::__construct();
        }

        public function salvar(){  
            $o = new class{};   
            $o->ID = $_REQUEST['id'];
            $o->DESCRICAO =$_REQUEST['descricao'];
            $o->CIDADE = $_REQUEST['cidade'];
            $o->POPULACAO = $_REQUEST['populacao'];
            $o->ELEITORES = $_REQUEST['eleitores'];
            $o->NIVEL_CONFIANCA = $_REQUEST['nivelConfianca'];
            $o->MARGEM_ERRO = $_REQUEST['margemErro'];
            $o->TOTAL_PARTICIPANTE = $_REQUEST['totalParticipante'];
            $o->INTRODUCAO = $_REQUEST['introducao'];
            $o->PERGUNTAS = $_REQUEST['perguntas'];

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
            $o->NIVEL_CONFIANCA = $_REQUEST['nivelConfianca'];
            $o->MARGEM_ERRO = $_REQUEST['margemErro'];
            $o->TOTAL_PARTICIPANTE = $_REQUEST['totalParticipante'];
            $o->INTRODUCAO = $_REQUEST['introducao'];
            $o->PERGUNTAS = $_REQUEST['perguntas'];

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
        
        public function find (){     
            $clienteDAO = new ClienteDAO();
            return $clienteDAO->obter();
        }   


    }
?>