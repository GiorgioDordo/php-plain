<?php

require 'functions.php';

// require 'router.php';



//Todo: connessione al MySql database

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=root;charset=utf8mb4"; // it declares how characters are encoded if we are not working with english or something similiar

$pdo = new PDO($dsn); //data source name, a string that declares your connection to the database

$statement = $pdo->prepare("select * from posts"); //preparing this query to send to mysql where it will be executed

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC); //fetch all the results as opposed to a single result or a single record and give me the results as an associative array

// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}

// Todo: classes, a blueprint of what a person is and what he can do
// class Person {
//     public $name;
//     public $age;

//     public function breathe() {
//         echo $this->name . " is breathing";
//     }
// }


// $person = new Person();

// $person->name = "Jhon Doe";
// $person->age = 25;
// $person->breathe();
 ?>