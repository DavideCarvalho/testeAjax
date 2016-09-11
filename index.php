<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Ajax - Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    </head>
    <body>
        <div class="linha">
            <p>Sistema de Reserva de Almoço</p>
        </div>
        <div class="wrapper">
            <div class="login">
                <h1>Login</h1>
                <form method="POST" id="form">
                    <div class="input-login">
                        <label>RA</label>
                        <input type="text" name="login" placeholder="Login">
                    </div>
                    <div class="input-senha">
                        <label>Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <button type="submit" class="botao">Entrar</button>
                    <p class="invalido"></p>
                </form>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>

