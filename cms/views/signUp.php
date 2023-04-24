<?php
include("./blades/header.php");
include("../../app/views/components/sectionHeader.php");
include("../../public/utils/components/popup.php");
?>
<section id="img-cadastro">
    <img src="../../public/imgs/cadastro.png">
</section>
<section id="forms-login">
    <h2>Faça parte do nosso time AUUdacioso!</h2>
    <form action="" id="forms">
        <div id="titulo-forms">
            <h3>Faça seu login</h3><span class="heartIcon"></span>
        </div>

        <div id="text-login">
            <p>Nome de usuário</p>
            <input type="text" name="usuario">
            <p>E-mail</p>
            <input type="text" name="email">
            <p>Senha</p>
            <input type="password" name="senha"><br>
            <p>Confirmar senha</p>
            <input type="password" name="senhaconfirmar"><br>
            <div class="btnLoginWrapper">
            <button class="btnLogin">Cadastrar</button><br>
            </div>
        </div>
        <div id="text-link">
            <a href="#"> Tem uma conta? Faça login</a>
        </div>
    </form>

</section>

<?php include("./blades/footer.php") ?>
