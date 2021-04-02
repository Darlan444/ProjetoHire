<?php

class Conexao
{

    const HOST = "localhost";
    const USER = "root";
    const PASS = "";
    const NAME = "hire";
    public $conn;
    //Conexão com banco de dados
    function connection()
    {


        try {
            $this->conn = new  \PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME . ';charset=utf8', self::USER, self::PASS);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexão realizada com sucesso!";
            return $this->conn;
        } catch (PDOException $e) {
            echo "Conexão falhou! Erro: " . $e->getMessage();
        }
    }
}
