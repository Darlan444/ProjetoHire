<?php

session_start();

if( isset($_SESSION['usuario_id']) ){
	header("Location: /");
}

require 'conexao.php';

if(!empty($_POST['email']) && !empty($_POST['senha'])):
	
	$records = $conn->prepare('SELECT id,email,senha FROM usuario WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['senha'], $results['senha']) ){

		$_SESSION['usuario_id'] = $results['id'];
		header("Location: /");

	} else {
		$message = 'Sorry, those credentials do not match';
	}

endif;

?>

<?php include'includes/menuhome.php';?>
      
    <div class="grupo_lista">
        <ul class="ul_quem_somos">
            <li class="lista_quem_somos"><a href="" class="link_quem_somos"><button class="btn btn-quemsomos">Quem Somos?</button></a></li>
            <li class="lista_quem_somos"><a href="" class="link_quem_somos"><button class="btn btn-quemsomos">Contato</button></a></li>
            
        </ul>
    </div>

    

    <form class="form-signin text-center" method="POST" action="index.php">
        <h1 class="text-home"><img src="img/logohireblack.svg" alt="" width=""></h1>
        <br>
        <input type="email" value="" name="email" id="email" class="form-control" placeholder="E-mail" required autofocus>
        <input type="password" value="" name="senha" id="senha" class="form-control" placeholder="Senha" required>
        
        <button class="btn btn-lg btn-login btn-block" type="submit">Entrar</button>

        <br>
        <a href="registrar.php"><small>Criar Conta na Hire</small></a>
        <p class="mt-5 mb-3" style="color: rgb(0, 0, 0);">&copy; Juazeiro do Norte - CE | Hire 💖</p>
    </form>

<?php include'includes/footerhome.php';?>