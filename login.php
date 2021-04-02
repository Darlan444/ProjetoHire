<?php

require 'conexao.php';
include 'includes/menuhome.php';

//
if (!empty($_POST['email']) && !empty($_POST['password'])) :
    $c = new Conexao();

    $sql = 'SELECT id,email,password FROM usuario WHERE email = ? AND password = ?';
    $stmt = $c->connection()->prepare($sql);

    $stmt->bindValue(1,  $_POST['email']);
    $stmt->bindValue(2, $_POST['password']);

    $stmt->execute();

    if ($stmt->rowCount() > 0) :

        header('Location: index.php');

    else :
        $_POST['erro'] = 'usuario ou senha errados';

    endif;
endif;
?>


<div class="grupo_lista">
    <ul class="ul_quem_somos">
    
        <li class="lista_quem_somos"><a href="" class="link_quem_somos"><button class="btn btn-quemsomos">Quem Somos?</button></a></li>
        <li class="lista_quem_somos"><a href="" class="link_quem_somos"><button class="btn btn-quemsomos">Contato</button></a></li>

    </ul>
</div>

<form class="form-signin text-center" method="POST">
    <h1 class="text-home"><img src="img/logohireblack.svg" alt="" width=""></h1>
    <br>
    <input type="email" value="" name="email" id="email" class="form-control" placeholder="E-mail" required autofocus>
    <input type="password" value="" name="password" id="password" class="form-control" placeholder="Senha" required>

    <button class="btn btn-lg btn-login btn-block" type="submit">Entrar</button>

    <br>
    <a href="registrar.php"><small>Criar Conta na Hire</small></a>
    <p class="mt-5 mb-3" style="color: rgb(0, 0, 0);">&copy; Juazeiro do Norte - CE | Hire 💖</p>
</form>

<?php include 'includes/footerhome.php'; ?>