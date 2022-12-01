<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Biblioteca </title>
    <link rel="stylesheet" href="lib/css/biblio.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/icon/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


     <style>
           .dropdown {
  display: inline-block;
  position: relative;
  margin-top: -100px;
}

.dd-button {
  display: inline-block;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 10px 30px 10px 20px;
  background-color: #ffffff;
  cursor: pointer;
  white-space: nowrap;
  margin-left: 150px;
  margin-top: -40px;
  background-color: #B0E0E6;
}

.dd-button:after {
  content: '';
  position: absolute;
  top: 30%;
  right: 15px;
  transform: translateY(-50%);
  width: 0; 
  height: 0; 
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid black;
}




.dd-input {
  display: none;
}

.dd-menu {
  position: absolute !important;
  z-index: 999 !important;
  left: 100%;
  border-radius: 4px;
  padding: 0;
  margin: 2px 0 0 0;
  box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
  background-color: #B0E0E6;
  margin-top: -90px;
  list-style-type: none;
}

.dd-input + .dd-menu {
  display: none;
} 

.dd-input:checked + .dd-menu {
  display: block;
} 

.dd-menu li {
  padding: 10px 20px;
  cursor: pointer;
  white-space: nowrap;
}

.dd-menu li:hover {
  background-color: #f6f6f6;
}

.dd-menu li a {
  display: block;
  margin: -10px -20px;
  padding: 10px 20px;
}

.dd-menu li.divider{
  padding: 0;
  border-bottom: 1px solid #cccccc;
}
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
        <i class='bx bxs-notepad'></i>
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
        <i class='bx bxs-book bx-tada' ></i>
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
    <form action='/search' method='get' class='form'>
        <div class='search'>
          <input type='search' placeholder='Nome de livro'>
          <input type='submit' value='Search'>
        </div>
      </form>


      
      
      <br>
      

<h1> Biblioteca  &ensp; &ensp; </h1> 
<label class="dropdown">

<div class="dd-button">
<i class='bx bx-slider-alt'></i> 
</div>

<input type="checkbox" class="dd-input" id="test">

<ul class="dd-menu">
<li>Favoritos</li>
  <li href="ordemA.php">de A á Z</li>
</ul>

</label> 

<br>
 
<hr class="hr1">

 

<br>

<div class="hero-container">
<div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/divcome.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">A DIVINA COMÉDIA</h4>
                <p class="ticket__movie-slogan">Autor: Dante Alighieri</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=2203" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/escrava.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title"> A ESCRAVA ISAURA</h4>
                <p class="ticket__movie-slogan">Autor: Bernardo Guimarães</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=16580" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>


    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/luneta.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title"> A LUNETA MÁGICA</h4>
                <p class="ticket__movie-slogan">Autor: Joaquim Manuel de Macedo</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=16666" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>


    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/Carolina.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">CAROLINA</h4>
                <p class="ticket__movie-slogan">Autor: Casimiro de Abreu</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=1784" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/5min.png" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">CINCO MINUTOS</h4>
                <p class="ticket__movie-slogan">Autor: José de Alencar</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=16677" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>
   

    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/casmur.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">DOM CASMURRO</h4>
                <p class="ticket__movie-slogan">
                    Autor: Machado de Assis
                </p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=1888" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/iracema.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">IRACEMA</h4>
                <p class="ticket__movie-slogan">Autor: José de Alencar</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=2029" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/micro.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">MICROMÉGAS</h4>
                <p class="ticket__movie-slogan">Autor: Voltaire</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=2275" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/noite.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">NOITE NA TAVERNA</h4>
                <p class="ticket__movie-slogan">Autor: Alvares de Azevedo </p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=2025" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/ateneu.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">O ATENEU</h4>
                <p class="ticket__movie-slogan">Autor: Raul Pompeia</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=2020" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>


    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/capitao.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title"> O CAPITÃO MENDONÇA</h4>
                <p class="ticket__movie-slogan">Autor: Machado de Assis</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=17463" style="color: #fff" target="_blank"> Acesse aqui </a> 
                </button>
            </div>
        </div>
    </div>


    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/cortico.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">O CORTIÇO</h4>
                <p class="ticket__movie-slogan">Autor: Aluísio de Azevedo</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=1723" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>
   

    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/lusi.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">OS LUSÍADAS</h4>
                <p class="ticket__movie-slogan">
                    Autor: Luís de Camões
                </p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=1870" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>


    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/mulato.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title"> O MULATO</h4>
                <p class="ticket__movie-slogan">Autor: Aluísio de Azevedo</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=2024" style="color: #fff" target="_blank"> Acesse aqui </a> 
                </button>
            </div>
        </div>
    </div>


    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/primo.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">O PRIMO BASÍLIO</h4>
                <p class="ticket__movie-slogan">
                    Autor: Eça de Queirós
                </p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=16622" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>


    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/sertoes.png" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">OS SERTÕES</h4>
                <p class="ticket__movie-slogan">Autor: Euclides da Cunha</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=16626" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>



    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/quincas.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">QUINCAS BORBA</h4>
                <p class="ticket__movie-slogan">Autor: Machado de Assis</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=1949" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>
   

   
    <div class="main-container">
        <div class="poster-container">
            <a href="#"><img src="images/sonetos.jpg" class="poster" /></a>
        </div>
        <div class="ticket-container">
            <div class="ticket__content">
                <h4 class="ticket__movie-title">SONETOS</h4>
                <p class="ticket__movie-slogan">Autor: Luís de Camões</p>
                <button class="ticket__buy-btn"><a href="http://www.dominiopublico.gov.br/pesquisa/DetalheObraForm.do?select_action=&co_obra=1872" style="color: #fff" target="_blank"> Acesse aqui </a>
                </button>
            </div>
        </div>
    </div>






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