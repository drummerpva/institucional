<?php
    class portfolioController extends controller{
        public function index(){
            $dados = array();
            
            $port = new Portfolio();
            $dados['portfolio'] = $port->getTrabalhos();
           $this->loadTemplate('portfolio',$dados);
        }
        
    }
