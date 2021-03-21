<?php
//aqui vai o código para realizar registro

?>

<?php include'includes/menuhome.php';?>   

    <form class="form-signin" method="POST" action="">
        <br>
        <div class="text-center"><h3 class="text-home">Cadastre-se na Hire</h3></div>
        <br>
        <div class="form-group">
            <select id="" name="" class="form-control" required>
                <option selected>Anunciante</option>
                <option>Usuário Comum</option>
            </select>
        </div>
        <hr>
        <input type="text" name="nome_completo" id="nome_completo" class="form-control" placeholder="Nome Completo" required>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nome de Usuário" required>
        <input type="text" name="nascimento" id="nascimento" class="form-control" placeholder="Data de Nascimento" required>
        <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" required>
        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone" required>
        <label for="">Foto de Perfil</label>
        <input type="file" class="form-control-file" id="" name="" required>
        <hr>
        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required autofocus>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
        
        <button class="btn btn-lg btn-login btn-block" type="submit">Cadastrar</button>

        <br>
        
        
        
    </form>

    <div class="text-center">
        <a href="index.php"><small>Já tem conta? Entre agora!</small></a>
        <p class="mt-5 mb-3" style="color: rgb(0, 0, 0);">&copy; Juazeiro do Norte - CE | Hire 💖</p>
    </div>
    
<?php include'includes/footerhome.php';?>