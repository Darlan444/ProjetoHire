<?php
//aqui vai o código para realizar login

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