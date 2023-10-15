<?php

    require 'vendor/autoload.php';

    $app = new \Slim\App;

    $app->get('/', function ($request, $response) {
        $pagina = 'pag_html/home';
        include('main.php');

    });

    $app->get('/contato', function ($request, $response) {
        $pagina = 'pag_html/contato';
        include('main.php');

    });

    $app->get('/projetos', function ($request, $response) {
        $pagina = 'pag_html/projetos';
        include('main.php');

    });


    $app->run();

?>