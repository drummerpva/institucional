<h1>Contato</h1>
<form method="POST" class="contato">
    <?php echo $aviso ?? "";?> 
    Seu nome:<br/>
    <input type="text" name="nome" required=""/><br/><br/>
    Seu email:<br/>
    <input type="email" name="email" required=""/><br/><br/>
    Mensagem:<br/>
    <textarea name="mensagem" required></textarea><br/><br/>
    <input type="submit" value="Enviar" />
</form>