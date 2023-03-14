
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Boas Vindast</title>
</head>
<body>
<div class="box">
        <main>
            <form action="consulta.php" method="get">
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
</form>

<div class="field is-grouped">
                
                    <div class="control">
                        <button id="btn-login" class="button is-link">Login</button>
                    </div>
</div>
</main>
</div>
</body>
</html>