<?php

class Database {
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;

    // preparing statements
    private $statement;
    private $dbHandler;
    private $error;

    // Run connection anytime database is called
    public function __construct() {
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        $options = array(
            // preventing driver crashing
            PDO::ATTR_PERSISTENT => true,
            // handling errors
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch(PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    // Function to allow to write queries, prepares the SQL statement
    public function query($sql) {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    // Bind the parameters with the values
    public function bind($parameter, $value, $type = null) {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value);
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value);
                $type = PDO::PARAM_NULL;
                break;
            default:
            $type = PDO::PARAM_STR;
        }
        $this->statement->bindValue($parameter, $value, $type);
    }
    // Execute the prepared statement
    public function execute() {
        return $this->statement->execute();
    }

    // Return an array
    public function resultSet() {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    // Return specific row as object
    public function single() {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    // Get row count
    public function rowCount() {
        return $this->statement->rowCount();
    }
}

?>