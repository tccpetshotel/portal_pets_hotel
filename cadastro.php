<?php include_once("./partials/cadastroHead.php"); ?>
<div id="sigin-page">
    <div id="logo">
        <img src="./assets/images/logo.png" width="180">
    </div>
    <div id="cadastro" class="container row">
        <form id="form-createClient" class="col s12 m12" action="https://petshotel.herokuapp.com/client/create" method="POST">
            <div class="row">
                <div class="input-field col s12 m6">
                    <input id="nome" name="nome" type="text" class="validate">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12 m12">
                    <input id="senha" name="senha" type="password" class="validate">
                    <label for="senha">Senha</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="endereco" name="endereco" type="text" class="validate">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="cidade" name="cidade" type="text" class="validate">
                    <label for="cidade">Cidade</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="estado" name="estado" type="text" class="validate">
                    <label for="estado">Estado</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="celular" name="celular" type="tel" class="validate">
                    <label for="celular">Celular</label>
                </div>
                <div id="submitDIV" class="input-field col s12 m12">
                    <button id="submit" class="btn-floating btn-large waves-effect waves-light" type="submit"><i class="material-icons">add</i></button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
<script>
    const button = document.getElementById("submit");
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;
    const endereco = document.getElementById("endereco").value;
    const cidade = document.getElementById("cidade").value;
    const estado = document.getElementById("estado").value;
    const celular = document.getElementById("celular").value;
    const data = {
        nome: nome,
        email: email,
        senha: senha,
        endereco: endereco,
        cidade: cidade,
        estado: estado,
        celular: celular
    }
    function att(){
        if(data.nome == "" || data.email == "" || data.senha == "" || data.endereco == "" || data.cidade == "" || data.estado == "" || data.celular == ""){
            button.setAttribute("disabled", "disabled");
        } else {
            button.removeAttribute("disabled"); 
        }
    }
    for(i=0; i<; i++){
        att();
    }
</script>
</html>