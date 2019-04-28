<h3>Cadastre-se</h3>
<form method="post">
    Nome:<br/>
    <input type="text" name="nome" id="nome" required><br><br>

    Email:<br/>
    <input type="email" name="email" id="email" required><br><br>

    Senha:<br/>
    <input type="password" name="senha" id="senha" required><br><br>

    <input type="submit" value="Cadastrar">

    <br><br>

    <?php
        if(!empty($aviso)){
            echo $aviso;
        }
    ?>

</form>