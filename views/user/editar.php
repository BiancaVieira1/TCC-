<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php
$objEvents=new \Classes\ClassEvents();
$events=$objEvents->getEventsById($_GET['id']);
$date=new \DateTime($events['start']);
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta chaset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no", initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Cronograma Escolar </title>
    <link rel="stylesheet" href="<?php echo DIRPAGE.'lib/css/style.css'; ?>">
    <link rel="stylesheet" href="../../lib/css/lembreteEdicao.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<style>
.botao{
  background-color: #fff; 
  border:solid 1px;
  border-radius:8px;
  border-color: black;
  color: rgb(108, 177, 220); 
  padding: 6px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

}

.link{
  text-decoration: none;
  color: black;
}


a:hover {
 color:  rgb(108, 177, 220); 
}
</style>

<div class="card">
    <div class="left">
      
      <i class="fa fa-long-arrow-left"></i>
      <i class="fa fa-long-arrow-right"></i>
    </div>
    <div class="right">
      <div class="product-info">
        <div class="product-name">
          <h1>Editar Lembrete <i class='bx bx-edit-alt' style='color:#56b0d0'  ></i></h1>
          <i class="fa fa-search"></i>
          <i class="fa fa-user"></i>
          <i class="fa fa-shopping-cart"></i>
        </div>
        <div class="details">
        <form  name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE.'controllers/ControllerEdit.php'; ?>">
<input  type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br> <br>
  Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br> <br>
  Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br> <br>
  Título: <input type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br> <br>
  Descrição: <input type="text" name="description" id="description" value="<?php echo $events['description'];?>">
  <br>
  <br>
  <input type="submit" value="Confirmar">
  
  <button class="botao">  <a class="link" href="index.php"> Voltar </button> 


</form>
        </div>
       
       <br>
        <a id="delete" href="<?php echo DIRPAGE.'controllers/ControllerDelete.php?id='.$_GET['id']; ?>"><img src="<?php echo DIRPAGE.'img/lixo.png' ?>" alt="" height="80px" width="80px" align="left"></a>
      </div>
    </div>
  </div>


<?php include(DIRREQ."lib/html/footer.php"); ?>