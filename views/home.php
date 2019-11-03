<div class="homeSobre">
    <img src="" width="150" height="150" />
    <h4>Sobre</h4>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in 
</div>
<div class="homePortfolio">
    <h4>Meu Portfolio Recente</h4>
    <?php foreach($portfolio as $p){
    ?>
        <div class="portfolioItem">
            <a href=""><img src="./assets/portfolio/<?php echo $p['imagem']?>" width="200" height="150"/></a>
        </div>
    <?php
    }
    ?>
    <div style="clear:both;"></div>
</div>