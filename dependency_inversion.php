<?php

interface DatabaseConnectionInterface
{
    public function connect();

}

class MySQLConnection implements DatabaseConnectionInterface
{

    public function connect()
    {
        //Return the MySQL <connection class connection
    }
}


class SomeClass {

    private $dbConnection;

    public function __construct(DatabaseConnectionInterface $dbConnection)
    {
        $this->$dbConnection = $dbConnection;
    }
    // more code
}