<script src="<?php echo DIRPAGE.'lib/js/FullCalendar/main.min.js'; ?>"></script>
  <script src="<?php echo DIRPAGE.'lib/js/javascript.js'; ?>"></script>


  
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

