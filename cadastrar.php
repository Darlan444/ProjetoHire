<?php

include "conexao.php";

try {
    
    $c = new Conexao();

    // prepare sql and bind parameters
    $sql = 'INSERT INTO usuario(nome, nascimento, endereco, telefone, email, password)
    VALUES (:nome, :nascimento, :endereco, :telefone, :email, :password)';
    $stmt = $c->connection()->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':nascimento', $nascimento);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    

    $nome       = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $endereco   = $_POST['endereco'];
    $telefone   = $_POST['telefone'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
   
 
    $stmt->execute();


    echo "Usuário cadastrado com sucesso!";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

?>