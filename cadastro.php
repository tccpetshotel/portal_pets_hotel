<?php include_once("./partials/cadastroHead.php"); ?>
<div id="sigin-page">
    <div id="logo">
        <img id="logoImg" src="./assets/images/logo.png" onclick="window.history.back();" width="180">
    </div>
    <div id="cadastro" class="container row">
        <form id="form-createClient" class="col s12 m12" action="https://petshotel.herokuapp.com/client/create" method="POST">
            <div class="row">
                <div class="input-field col s12 m6">
                    <input id="nome" name="nome" type="text" class="validate">
                    <label for="nome">
                        <h5>Nome</h5>
                    </label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">
                        <h5>Email</h5>
                    </label>
                </div>
                <div class="input-field col s12 m12">
                    <input id="senha" name="senha" type="password" class="validate">
                    <label for="senha">
                        <h5>Senha</h5>
                    </label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="endereco" name="endereco" type="text" class="validate">
                    <label for="endereco">
                        <h5>Endereço</h5>
                    </label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="cidade" name="cidade" type="text" class="validate">
                    <label for="cidade">
                        <h5>Cidade</h5>
                    </label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="estado" name="estado" type="text" class="validate">
                    <label for="estado">
                        <h5>Estado</h5>
                    </label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="celular" name="celular" type="tel" class="validate">
                    <label for="celular">
                        <h5>Celular</h5>
                    </label>
                </div>
                <div id="submitDIV" class="input-field col s12 m12">
                    <button id="submit" class="waves-effect waves-light btn-large" type="submit">
                        <h5 id="cadastrar-se">Cadastrar-se</h5>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>

</html>