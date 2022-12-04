<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$date=filter_input(INPUT_POST, 'date', FILTER_DEFAULT);
$time=filter_input(INPUT_POST, 'time', FILTER_DEFAULT);
$title=filter_input(INPUT_POST, 'title', FILTER_DEFAULT);
$description=filter_input(INPUT_POST, 'description', FILTER_DEFAULT);
$horasDuracao=filter_input(INPUT_POST, 'horasDuracao', FILTER_DEFAULT);
$start=new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo'));
$objEvents->createEvent(
    0,
    $title,
    $description,
    'blue',
    $start->format("Y-m-d H:i:s"),
    $start->modify('+'.$horasDuracao.'hours')->format("Y-m-d H:i:s")
);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Adição de Lembrete</title>
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
      <p>Lembrete adicionado com sucesso.</p>
    </div>
    <div class="form-input">
      <button class="subscribe-btn"><a class="link" href="../views/user/index.php"> Voltar</button>
    </div>
  </form>
</div>
  </body>

 
</html>