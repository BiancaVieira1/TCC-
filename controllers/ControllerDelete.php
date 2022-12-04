<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$id=filter_input(INPUT_GET,'id', FILTER_DEFAULT);
$objEvents->deleteEvent($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Excluir Lembrete</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../lib/css/confirmedit.css">
    <link rel="icon" href="images/icon/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
  <style>
.link{
  text-decoration: none;
  color: black;
}


a:hover {
 color:  #fff; 
}
  </style>
  
  </head>
  <body>
  

<div class="wrapper">
  <form action="#" class="card-content">
    <div class="container">
      <div class="image">
        <i class="fas fa-envelope"></i>
      </div>
      <h1>CONCLUÍDO</h1>
      <p>Lembrete excluído com sucesso.</p>
    </div>
    <div class="form-input">
      <button class="subscribe-btn"><a class="link" href="../views/user/index.php"> Voltar</button>
    </div>
  </form>
</div>
  </body>

 
</html>