<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Estudos </title>
    <link rel="stylesheet" href="lib/css/biblio.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/icon/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

</style>
   </head>
<body>
  <div class="sidebar">
   
   
        <i class='bx bx-menu' id="btn" ></i>

     
  <br>
  <br>
    <ul class="nav-list">
      <li>
        <a href="AreaUsuario.php">
            <i class='bx bxs-graduation'></i>
          <span class="links_name">Área do Usuário</span>
        </a>
         <span class="tooltip">Área do Usuário</span>
      </li>
      <li>
       <a href="views/user/index.php">
         <i class='bx bxs-time' ></i>
         <span class="links_name">Cronograma </span>
       </a>
       <span class="tooltip">Cronograma Escolar</span>
     </li>
     <li>
       <a href="Estudos.php">
        <i class='bx bx-notepad bx-tada' ></i>
         <span class="links_name">Estudos</span>
       </a>
       <span class="tooltip">Estudos</span>
     </li>
     <li>
       <a href="Chat.html">
        <i class='bx bxs-message-rounded-dots'></i>
         <span class="links_name">Chat Rápido</span>
       </a>
       <span class="tooltip">Chat Rápido</span>
     </li>
     <li>
       <a href="Biblioteca.php">
        <i class='bx bxs-book'></i>
         <span class="links_name">Biblioteca </span>
       </a>
       <span class="tooltip">Biblioteca</span>
     </li>
<br>
<br>
<br>
<br>


     <li>
        <a href="ajustes.html">
            <i class='bx bxs-cog'></i>
          <span class="links_name">Ajustes </span>
        </a>
        <span class="tooltip">Ajustes</span>
      </li>
      <li>
        <a href="login.html">
          <i class='bx bx-log-out' style='color:#141313' onclick="funcaoSair()"></i>
          <span class="links_name"><f onclick="funcaoSair()"> Sair</f></span>
        </a>
        <span class="tooltip">Sair</span>
      </li>
     
      <script>
        function funcaoSair()
        {
        alert("Você voltará para a tela de login!");
        }
        </script>
            
    

    </ul>
  </div>
 
  <section class="home-section">
    <br>
    


      
      
      <br>
      

<h1> &ensp;  •  Anotações </h1>
<hr class="hr1">
<img src="img/nota.png" width="230px" height="230px"> <a href="Notas.html"><img src="img/add-button.jpg" width="50px" height="50px"></a>
<br>

<h1> &ensp;  •  Mapa Mental </h1>
<hr class="hr1">
<br>
&ensp; &ensp; &ensp;<img src="img/mental.png" width="180px" height="180px"> <a href="MindMapJS-master/MindMapJS-master/MM.html"><img src="img/add-button.jpg" width="50px" height="50px"></a>



<!-- jQuery CDN -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  </section>
  

 

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  searchBtn.addEventListener("click", ()=>{ 
    sidebar.classList.toggle("open");
    menuBtnChange(); 
  });


  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
   }
  }
  </script>



<script src="js/areaUser.js"></script>
</body>
</html>