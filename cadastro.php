<?php include_once("./partials/cadastroHead.php"); ?>
<div id="logo">
    <img src="./assets/images/petsHotel.png" width="120">
</div>
<div id="cadastro" class="container row">
    <form class="col s12 m12">
        <div class="row">
            <div class="input-field col s6 m6">
                <input id="nome" name="nome" type="text" class="validate">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6 m6">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12 m12">
                <input id="senha" name="senha" type="password" class="validate">
                <label for="senha">Senha</label>
            </div>
            <div class="input-field col s6 m6">
                <input id="endereco" name="endereco" type="text" class="validate">
                <label for="endereco">Endereço</label>
            </div>
            <div class="input-field col s6 m6">
                <input id="cidade" name="cidade" type="text" class="validate">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s6 m6">
                <input id="estado" name="estado" type="text" class="validate">
                <label for="estado">Estado</label>
            </div>
            <div class="input-field col s6 m6">
                <input id="celular" name="celular" type="tel" class="validate">
                <label for="celular">Celular</label>
            </div>
        </div>
    </form>
</div>
</body>

</html>