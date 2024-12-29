<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; //aggiungendo path alla fine, faccio in modo che quando vado a fare dd() di uri, mi restituisca solo il path della pagina
// dd($uri);

// Todo: separate the path from the query string
// dd(parse_url($uri));

// if ($uri === '/') {
//     require 'controllers/index.php';
// } else if ($uri === '/about') {
//     require 'controllers/about.php';
// } else if ($uri === '/contact') {
//     require 'controllers/contact.php';
// }



// reformat del codice precedente
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    // se il link non viene trovato allora restituire l'errore 404
    require 'views/404.view.php';
    
    die();
}