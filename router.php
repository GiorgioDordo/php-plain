<?php 

//Todo: aggiungendo path alla fine, faccio in modo che quando vado a fare dd() di uri, mi restituisca solo il path della pagina
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
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

//Todo: reformat del codice precedente
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        // se il link non viene trovato allora restituire l'errore 404
        abort(); // 404 di default dichiarato nella funzione
    }
}

function abort($code = 404) {
    http_response_code($code);
    
    require "views/{$code}.view.php";
    
    die();
}

routeToController($uri, $routes);

?>