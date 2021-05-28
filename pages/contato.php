<!DOCTYPE html>
<html lang="pt-br">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="static/css/estilo.css"/>
        
        <title>Contact | Development</title>
    </head>

    <body>
        <header>
            <a href="#" class="logo">Development WebSite</a>
            <div class="header-right">
                <div class="container">
                    <a class="active" href="#">Home</a>
                    <a href="#">Contact</a>
                    <a href="#">About</a>
                </div>
            </div>
        </header>

        <main>
            <div class="content">
                <div id="div-form">
                    <h2>Form Contact</h2>
                    <form method="POST" action="processar_formulario.php">
                        <div>
                            <label>Nome: </label>
                            <input id="nome" class="form-input" type="text" name="nome" placeholder=" Insira o nome: " required/>
                        </div>
                        <div>
                            <label>E-mail: </label>
                            <input id="email" class="form-input" type="email" name="email" placeholder=" Insira o e-mail:" required/>
                        </div>
                        <div>
                            <label>Telefone: </label>
                            <input id="telefone" class="form-input" type="text" name="telefone" placeholder=" Insira o telefone:" required/>
                        </div>
                        <div>
                            <label>Mensagem</label>
                            <textarea name="mensagem" placeholder="Digite a mensagem..."></textarea>
                        </div>
                        <button type="submit" value="Adicionar" name="submit">SEND</button>
                    </form>
                </div>
            </div>
        </main>
        
        <footer>
            <h5>Copyright © 2021 Development WebSite</h5>
        </footer>

        <script type="text/javascript" src="static/js/index.js"></script>
    </body>
</html>