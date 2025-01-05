<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';

$config = require('config.php');

$db = new Database($config[ 'database' ]);

$id = $_GET['id']; // $_GET is a superglobal variable that holds information about variables passed through the URL

$posts = $db->query("select * from posts where id = {$id}")->fetch(); 

dd($posts);

// foreach ($posts as $post) {
//     echo "<li>" . $post["title"] . "</li>";
// }

// Todo: classes, a blueprint of what a person is and what he can do (properties and methods), a class is a blueprint of an object and an object is an instance of a class 
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