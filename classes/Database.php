<?php


class Database
{
    public $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
}