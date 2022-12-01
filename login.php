<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css/cadastro.css">
    <title>Login - Usuários</title>

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
            <img src="images/loginEscola.svg" alt="">
        </div>
        <div class="form">
            <form action="testLogin.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="cadastro.php">Cadastro</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <h4>Bem Vindo(a) de volta ao Smart Studies!</h4>
                    <br>
                    <br>
<br>
<br>
                    <div class="input-box">
                        <label for="email">E-mail:</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail">
                    </div>

                    <div class="input-box">
                        <label for="password">Senha:</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha">
                    </div>



                </div>
                    <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>

</html>