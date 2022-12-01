<?php

include('configs.php');



$busca =  $_POST['busca'];


$query = mysqli_query($conexao, "SELECT * FROM livro WHERE nome_livro LIKE '%$busca%' or autor LIKE '%$busca%' ");
$num   = mysqli_num_rows($query);
if($num >0){
    while($row = mysqli_fetch_assoc($query)){
      echo $row['nome_livro'].' - '.$row['autor'].'<br /><hr>';
    }
}else{
  echo "Esta Pessoa Não Existe!";
}
?>