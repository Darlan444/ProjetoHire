<?php

include "conexao.php";

$conn = connection();
try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO usuario(nome)
    VALUES (:nome, :nascimento, :endereco, :telefone, :email, :senha)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':nascimento', $nascimento);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    

    $nome       = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $endereco   = $_POST['endereco'];
    $telefone   = $_POST['telefone'];
    $email      = $_POST['email'];
    $senha      = $_POST['senha'];
   
 
    $stmt->execute();


    echo "Usuário cadastrado com sucesso!";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

?>