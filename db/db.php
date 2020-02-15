<?php
// require_once '../config/config.php';

class Database
{
    function __construct()
    {

        $this->username = DB_USER;
        $this->password = DB_PASS;
        $this->dbengine = DB_ENGINE;
        $this->dbhost = DB_HOST;
        $this->dbname = DB_NAME;
        $this->dbcharset = DB_CHARSET;
        $this->connect();
    }
    function connect()
    {
        try {
            $conn = new PDO("{$this->dbengine}:host={$this->dbhost};dbname={$this->dbname}", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    function __destruct()
    {
    }
    function __get($property)
    {
        if (property_exists($this, $property)) {
        }
    }
}
