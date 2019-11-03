<h1 >Meu Portfolio</h1>
<?php foreach ($portfolio as $p) {
    ?>
    <div class="portfolioItem">
        <a href=""><img src="./assets/portfolio/<?php echo $p['imagem'] ?>" width="200" height="150"/></a>
    </div>
    <?php
}
?>
<div style="clear:both;"></div></div>