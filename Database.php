<?php
//Todo: connessione al MySql database
class Database {
public $connection;

public function __construct() {
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=root;charset=utf8mb4"; // it declares how characters are encoded if we are not working with english or something similiar

$this->connection = new PDO($dsn); //data source name, a string that declares your connection to the database
    }

public function query($query) {
$statement = $this->connection->prepare($query); //preparing this query to send to mysql where it will be executed

$statement->execute();

return $statement; //fetch all the results as opposed to a single result or a single record and give me the results as an associative array
    }
}