<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="static/css/estilo.css" />
        <title>VA2 | Development</title>
    </head>

    <body>
        <header>
            <a class="logo">BLOG WebSite</a>
            <div class="header-right">
                <a href="?pg=inicio">Dashboard</a>
                <a href="?pg=sobre">Sobre</a>
                <a href="?pg=contato/contato">Contato</a>
            </div>
        </header>

        <main>
            <?php
                $pg = (isset($_GET["pg"]) && !empty($_GET["pg"])) ? $_GET["pg"] : "inicio";
                include("paginas/".$pg.".php");
            ?>
        </main>
        
        <footer>
            <h5>Copyright © 2021 BLOG WebSite</h5>
        </footer>
    </body>
</html>