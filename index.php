<?php

include("conexao.php");
$conn = connection();
if (isset($_POST['email']) && strlen($_POST['email']) > 0) {
    if(isset($_SESSION))
    session_start();

    $_SESSION['email'] = $conn->escape_string($_POST['email']);
    $_SESSION['senha'] = md5(md5($_POST['senha']));

    $sql_code = "SELECT senha, id FROM usuario WHERE email = '$_SESSION[email]'";
    $sql_querry = $conn->querry($sql_code) or die ($conn->error);
    $dado = $sql_querry->fetch_assoc();
    $total = $sql_querry->num_rows;

        if ($total == 0) {
            $erro[] = "Este email não pertence a nenhum usuário.";
        }   else {
                if($dado['senha'] && $_SESSION['senha']){
                $_SESSION['usuario'] = $dado['id'];
                }
            }  
           
}
?>

<?php include'includes/menuhome.php';?>
      
    <div class="grupo_lista">
        <ul class="ul_quem_somos">
            <li class="lista_quem_somos"><a href="" class="link_quem_somos"><button class="btn btn-quemsomos">Quem Somos?</button></a></li>
            <li class="lista_quem_somos"><a href="" class="link_quem_somos"><button class="btn btn-quemsomos">Contato</button></a></li>
            
        </ul>
    </div>

    

    <form class="form-signin text-center" method="POST" action="">
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