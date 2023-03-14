<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    
    <title>Formulário</title>
</head>
<body>
<div class="box">
        <main>
            <form action="actions/cadastro.php" method="post">
                <div class="field">                
                    <label class="label" for="FCódigo">Código:</label>
                    <div class="control">
                        <input class="input" type="text" name="FCódigo" id="FCódigo">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="FName">Nome:</label>
                    <div class="control">
                        <input class="input" type="text" name="FName" id="FName">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="FSobrenome">Sobrenome:</label>
                    <div class="control">
                        <input class="input" type="text" name="FSobrenome" id="FSobrenome">
                </div>
                </div>

                <div class="field">
                    <label class="label" for="FEmail">Email:</label>
                    <div class="control">
                        <input class="input" type="text" name="FEmail" id="FEmail">
                </div>
                </div>

                <div class="field">
                    <label class="label" for="FCPF">CPF</label>
                    <div class="control">
                        <input class="input" type="text" name="FCPF" id="FCPF">
                </div>
                </div>

                <div class="field">
                    <label class="label" for="FSexo">Sexo</label>
                    <div class="control">
                        <select class="input" name="FSexo" id="FSexo">
                            <option value="M">Masculino</option>
                            <option value="F" selected>Feminino</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="FUsuario">Usuário</label>
                    <div class="control">
                        <input class="input" type="text" name="FUsuario" id="FUsuario">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="FSenha">Senha</label>
                    <div class="control">
                        <input class="input" type="text" name="FSenha" id="FSenha">
                    </div>
                </div>
                <div class="field is-grouped">
                
                    <div class="control">
                        <button id="btn-cadastrar" class="button is-link">Cadastrar</button>
                    </div>
        </main>
    </div>
</body>
<script>
    btnCadastrar = getElementById('btn-cadastrar');

</script>

</html>