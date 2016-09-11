<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/inicial.css" type="text/css" />
        <link rel="stylesheet" href="css/responsivo.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body>
        <header class="container">
            <input type="checkbox" id="chk"/>
            <label for="chk" class="menu-icon">&#9776;</label>
            <div class="bg"></div>
            <nav class="menu" id="principal">
                <ul>
                    <li><a href="#" class="voltar-page">Voltar</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Fórum</a></li>
                    <li><a href="#cursos">Lugares <span>+</span></a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#contato">Contato <span>+</span></a></li>
                </ul>
            </nav>

            <nav class="menu" id="cursos">
                <ul>
                    <li><a href="#" class="voltar">Voltar</a></li>
                    <li><a href="#">Lugar1</a></li>
                    <li><a href="#">Lugar2</a></li>
                </ul>
            </nav>

            <nav class="menu" id="contato">
                <ul>
                    <li><a href="#" class="voltar">Voltar</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Fórum</a></li>
                </ul>
            </nav>
        </header>

        <section class="atualizacoes">
            <h1>Ultimas Atualizações</h1>
            <div class="slider">
                <img src="img/CentroPaulaSouza.png">
            </div>
        </section>

        <section class="ultimas-compras">
            <h1>Ultimas Compras</h1>
            <div class="compras">
                <div class="compra">
                </div>
                <div class="compra">
                </div>
                <div class="compra">
                </div>
            </div>
        </section>
        
        <section class="footer">
            
        </section>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>
            $('.voltar-page').on('click', function () {
                $("#chk").prop('checked', false);
            })
        </script>
    </body>
</html>