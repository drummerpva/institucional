<html>
    <head>
        <title>Meu Site</title>
        <link href="<?php echo BASE_URL; ?>assets/css/estilos.css" rel="stylesheet" />
    </head>
    <body>
        <div class="topo">
            <div class="topo1">
                
            </div>
            <div class="banner">
                
            </div>
        </div>
        <div class="menu">
            <ul>
                <a href="./"><li>HOME</li></a>
                <a href="./portfolio"><li>PORTFOLIO</li></a>
                <a href="./sobre"><li>SOBRE</li></a>
                <a href="./servicos"><li>SERVIÇOS</li></a>
                <a href="./contato"><li>CONTATO</li></a>
            </ul>
        </div>
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?> 
        </div>
        <div class="rodape"></div>

        <script src="<?php echo BASE_URL; ?>assets/js/script.js" type="text/javascript"></script>
    </body>

</html>