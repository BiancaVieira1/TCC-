<?php
//  editar campos
    // isset -> serve para saber se uma variável está definida
    include_once('configs.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['codigo'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $celular = $_POST['celular'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome', sobrenome='$sobrenome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco'
        WHERE codigo=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>