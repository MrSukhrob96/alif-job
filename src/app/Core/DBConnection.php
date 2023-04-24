<?php

namespace App\Core;

use PDO;

class DBConnection
{
    /**
     * instanceof the class DBConnection
     * 
     * @var mixed $instanse
     */
    private static $instanse = null;

    /**
     * instanceof the standart php class PDO
     * 
     * @var ?PDO $pdo
     */
    private ?PDO $pdo = null;


    public function __construct()
    {
    }

    /**
     * Method connect
     */
    private function connect(): void
    {
        try {
            $this->pdo = new PDO(
                Config::get('DB_CONNECTION') . ':host=' . Config::get('DB_HOST') . ':' . Config::get('DB_PORT') . ';dbname=' . Config::get('DB_NAME'),
                Config::get('DB_USER'),
                Config::get('DB_PASS'),
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }
}
