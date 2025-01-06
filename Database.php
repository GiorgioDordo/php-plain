<?php
//Todo: connessione al MySql database
class Database {
    public $connection;

    public function __construct($config, $username = 'root', $password = 'root') {

        //data source name, a string that declares your connection to the database
        $dsn = 'mysql:' . http_build_query($config, '', ';'); // it declares how characters are encoded if we are not working with english or something similiar

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //fetch all the results as opposed to a single result or a single record and give me the results as an associative array
        ]);
    }

    // Todo: function that will allow us to query the database, it will take a query and an array of parameters
    public function query($query, $params = []) {
        
        $statement = $this->connection->prepare($query); //preparing this query to send to mysql where it will be executed

        $statement->execute($params); //execute the query

        return $statement; 
    }
}