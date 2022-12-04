<?php

    if(isset($_POST['submit']))
    {

        include_once('configs.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,celular,senha) 
        VALUES ('$nome','$sobrenome','$email','$celular','$senha')");

        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css/cadastro.css">
    <title>Cadastro - Usuários</title>

    <style>
input[type=button], input[type=submit], input[type=reset] {
  background-color: #20B2AA;
  border: none;
  color: white;
  padding: 10px 200px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}
    </style>



</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="images/cadasEscola.svg" alt="">
        </div>
        <div class="form">
            <form action="cadastro.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Login</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <h4>Bem Vindo(a) ao Smart Studies!</h4>
                    <br>
                    <br>
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail:</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular:</label>
                        <input id="number" type="tel" name="celular" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha:</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                </div>
                <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>

