<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Área Usuário </title>
    <link rel="stylesheet" href="lib/css/areaUsuario.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/icon/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
   
   
        <i class='bx bx-menu' id="btn" ></i>

     
  <br>
  <br>
    <ul class="nav-list">
      <li>
        <a href="AreaUsuario.php">
          <i class='bx bxs-graduation bx-tada' ></i>
          <span class="links_name">Área do Usuário</span>
        </a>
         <span class="tooltip">Área do Usuário</span>
      </li>
      <li>
       <a href="/views/user/index.php">
         <i class='bx bxs-time' ></i>
         <span class="links_name">Cronograma </span>
       </a>
       <span class="tooltip">Cronograma Escolar</span>
     </li>
     <li>
       <a href="Estudos.php">
        <i class='bx bxs-notepad'></i>
         <span class="links_name">Estudos</span>
       </a>
       <span class="tooltip">Estudos</span>
     </li>
     <li>
       <a href="chat/index.html">
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
        <a href="sair.php">
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
    
    <h2> Bem-Vindo(a)</h2>
      <br>
      

<main>
  <span>Central Notícias Vestibulares </span>
  <br>
  <br>
  <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="project-img">
            <img src="https://www.mirassol.sp.gov.br/imagens/165089029262669634d62a0867587665.jpg" alt="Foto 01">
          </div>
          
        </div>
        <div class="swiper-slide">
          <div class="project-img">
            <img src="https://th.bing.com/th/id/R.10a81479558f6f71f6f3b1712b3d1bdb?rik=siqXcOp%2fMnH%2fqw&riu=http%3a%2f%2fvemprausp.usp.br%2fwp-content%2fuploads%2f2021%2f06%2fFUVEST-2022-calendario-e-livros.png&ehk=W4cOPHemLaZWy4k2Vz0hVu5MPV7czZ%2bHSnhROmMRTO8%3d&risl=&pid=ImgRaw&r=0" alt="Foto 02">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="project-img">
            <img src="https://vestibulares2021.com/wp-content/uploads/2020/08/inscricao-vestibular-fuvest.jpg" alt="Foto 03">
          </div>
        </div>
      </div>
    
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

</main>



<hr class="hr1">

<br>
<SCRIPT LANGUAGE="JavaScript">
  d = new Date();
  hour = d.getHours();
  if(hour < 5)
  {
     document.write("Boa Madrugada!");
  }
  else
  if(hour < 12)
  {
     document.write("Bom Dia!");
  }
  else
  if(hour > 12)
  {
     document.write("Boa tarde!");
  }
  else
  if(hour < 18)
  {
     document.write("Boa tarde!");
  }
  else
  {
     document.write("Boa noite!");
  }
  </SCRIPT>

<br>

&ensp;

<div>
  <div class="relogio">
    <div>
        <span id="horas">00</span>
        <span class="tempo">Horas</span>
    </div>

    <div>
        <span id="minutos">00</span>
        <span class="tempo">Minutos</span>
    </div>

    <div>
        <span id="segundos">00</span>
        <span class="tempo">Segundos</span>
    </div>
</div>


<!-- jQuery CDN -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<!-- Relogio -->
<script src="lib/js/relogio.js"></script>

<!-- Calculadora -->
<script src="lib/js/calc.js"></script>
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



<script src="lib/js/areaUser.js"></script>
</body>
</html>