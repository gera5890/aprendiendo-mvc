<?php

    abstract class Connection{

        const server = 'localhost';
        const user = 'root';
        const dbname = 'usuarios';
        const password = '58905292';

        public static function connect() : PDO{
            try {
                $dsn = 'mysql:host='.self::server.';dbname='. self::dbname;
                $pdo = new PDO($dsn,self::user,self::password);
                return $pdo;

            } catch (Exception $e) {
                echo "No se puede conectar a la base de datos: " . $e->getMessage();
            }

        }

    }




    
