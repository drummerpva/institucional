<?php
    class contatoController extends controller{
        public function index(){
            $dados = array();
            if(!empty($_POST['nome'])){
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $msg = addslashes($_POST['mensagem']);
                $para = "douglas.poma@registrallogistica.com.br";
                $assunto = "Dúvida do Site";
                $mensagem = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Mensagem: ".$msg;
                $cabecalho = "From: suporte@registrallogistica.com.br"."\r\n".
                             "Reply-To: ".$email.
                             "X-Mailer: PHP/". phpversion();
                //mail($para,$assunto,$mensagem,$cabecalho);
                $dados['aviso'] = "E-mail enviado com sucesso<br><br>";
                
            }
            
           $this->loadTemplate('contato',$dados);
        }
        
    }
