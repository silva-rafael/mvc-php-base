<?php

namespace App\Models;

use PDO;
use PDOException;

class Model
{

    public static function getConn()
    {

        try {
            $conn = new PDO("mysql:host=localhost;dbname=teste", "root", "");

            return $conn;
        } catch (PDOException $e) {
            echo "Erro de conexão. " . $e->getMessage();
        }
    }
}
