<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

<link rel="stylesheet" href="lib/css/areaUsuario.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/icon/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
</head>
<body>

<div class="sidebar">
   
   
        <i class='bx bx-menu' id="btn" ></i>

     
  <br>
  <br>
    <ul class="nav-list">
      <li>
        <a href="../../AreaUsuario.php">
        <i class='bx bxs-graduation'></i>
          <span class="links_name">Área do Usuário</span>
        </a>
         <span class="tooltip">Área do Usuário</span>
      </li>
      <li>
       <a href="/views/user/index.php">
       <i class='bx bxs-time bx-tada' ></i>
         <span class="links_name">Cronograma </span>
       </a>
       <span class="tooltip">Cronograma Escolar</span>
     </li>
     <li>
       <a href="../../Estudos.php">
       <i class='bx bxs-notepad'></i>
         <span class="links_name">Estudos</span>
       </a>
       <span class="tooltip">Estudos</span>
     </li>
     <li>
       <a href="../../Chat.html">
        <i class='bx bxs-message-rounded-dots'></i>
         <span class="links_name">Chat Rápido</span>
       </a>
       <span class="tooltip">Chat Rápido</span>
     </li>
     <li>
       <a href="../../Biblioteca.php">
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
        <a href="Ajustes.html">
            <i class='bx bxs-cog'></i>
          <span class="links_name">Ajustes </span>
        </a>
        <span class="tooltip">Ajustes</span>
      </li>
      <li>
        <a href="../../login.php">
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
   
<div class="calendarUser"></div>

<?php include(DIRREQ."lib/html/footer.php"); ?>




