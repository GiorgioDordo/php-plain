<?php
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// dd($_SERVER);

// if ($_SERVER['REQUEST_URI'] === 'php_laravel/') {
//     echo 'bg-gray-900 text-white';
// } else {
//     echo 'text-gray-300';
// }

// ternario
// echo $_SERVER['REQUEST_URI'] === 'php-laravel/' ? 'bg-gray-900 text-white' : 'text-gray-300';

// funzione che mi semplifica la verifica dell'url della pagina corrente
function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort() {
    http_response_code(404);
    
    require 'views/404.view.php';
    
    die();
}

?>