<?php
    class homeController extends controller{
        public function index(){
            $dados = array();
            
            $port = new Portfolio();
            $dados['portfolio'] = $port->getTrabalhos(8);
           $this->loadTemplate('home',$dados);
        }
        
    }
