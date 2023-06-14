<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complex Store</title>      
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

<body>
  <div class="header" id="header"> <!--header do site-->
  <div class="logo_header"> <!--logo da loja-->
    <a class="logo-main" href="index.php">
    <img src="imagens\logo site.png" alt="logo" class="logo" >
    </a>
  </div>  
      <div class="navheader">
        <!--area de busca-->
        <div class="search-box">
        <input type="search" class="search-txt">
         <a href="#" class="search-btn">
          <img src="imagens\search.svg" alt="busca" class="search">
         </a> 
        </div>
        <nav>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
          <ul class="nav-list"><!--navlist responsiva começo-->
          
          <li><a href="/">Produtos</a></li>
          <li><a href="/">Meus Pedidos</a></li>
          

        </ul><!--fim navlist responsiva--> 
        </nav> 
      <a href="" title="carrinho de compras" class="nav-cart-menu" id="carrinho"><!--carrinho de compras-->
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
          <i class="nav-cart-icon"></i>
          <span class="nav-header-visually-hidden"></span>
          <span class="nav-cart-icon-quantity"></span>
        </a><!--fim carrinho de compras-->
            <div class="nav-perfil">
            <a href="pagina cadastro.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg> 
            </a>
          </div>
        </div>
      </div>    
  <script src="navbar.js"></script>
    <section class="slides">
      <div class="slides-show"><!--slides tela principal-->
        <div class="slides">
        <input type="radio" name="slide" id="slide1" checked>
        <input type="radio" name="slide" id="slide2">
        <input type="radio" name="slide" id="slide3">
        <input type="radio" name="slide" id="slide4">
        <input type="radio" name="slide" id="slide5">
        
            
            <div class="slide s1">
              <a class="b" href="">
              <img src="imagens\slide 1.jpeg" alt="dunk">
              </a>
            </div>
        
            <div class="slide s2">
              <a class="b" href="">
              <img src="imagens\slide 2.png" alt="af1">
              </a>
            </div>
        
            <div class="slide s3">
              <a class="b" href="">
              <img src="imagens\slide3.png" alt="jd1">
              </a>
            </div> 
            
            <div class="slide s4">
              <a class="b" href="">
              <img src="imagens\slide promo.jpeg" alt="promo">
              </a>
            </div>
        
            <div class="slide s5">
              <a class="b" href="">
              <img src="imagens\slide yeezy.jpeg" alt="yeezyday">
              </a>
            </div>
      

          <div class="nav-slides">
            <label class="bar" for="slide1"></label>
            <label class="bar" for="slide2"></label>
            <label class="bar" for="slide3"></label>
            <label class="bar" for="slide4"></label>
            <label class="bar" for="slide5"></label>
          <script src="slideshow.js"></script>
          </div>
        </div>
      </div><!--fim slides tela principal-->
    </section>
    <main>
    </main>
    <br>
    <br>
    <br>
    <br>
 <section class="categoria-prod">
  <div class="categoria-title">
    <h1>Veja nossas categorias:</h1>
    <h2>O que você busca esta aqui</h2>
  <div class="categoria-body">     
       <ul>
       <li><a href="#">Nike</a></li>
       <li><a href="#">Adidas</a></li>
       <li><a href="#">Jordan</a></li>
       <li><a href="#">Vans</a></li>
       <li><a href="#">Yeezy</a></li>
       <li><a href="#">Blusa</a></li>
       <li><a href="#">Sale</a></li>
       <li><a href="#">Ver tudo</a></li>
       </ul>
  </div>
 </section>
 <br>
<footer>
    <div id="footer-content">
      <div id="footer-contacts">
        <div id="footer-logo">
        <img src="imagens\logo site.png" alt="logo-footer" width="100px">
        </div>
        <div id="footer-social-media">
          
          <a href="https://instagram.com/complexsneakrs?igshid=YmMyMTA2M2Y=" target="_blank" class="footer-link" id="instagram" >
            <i class="fa-brands fa-instagram"></i>
          </a>

          <a href="#" class="footer-link" id="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
          </a>

        </div>
      </div>
      
      <ul class="footer-list">
        <li>
          <h3>Ajuda</h3>
        </li>
        
        <li>
          <a href="#" class="footer-list">Sobre a Complex</a>
        </li>

        <li>
          <a href="#" class="footer-list">Prazo de entrega</a>
        </li>
      
        <li>
          <a href="#" class="footer-list">Trocas e Devoluções</a>
        </li>
      </ul>

      <ul class="footer-list">
        <li>
          <h3>Links Úteis</h3>
        </li>
        
        <li>
          <a href="pagina login.php" class="footer-list">Login</a>
        </li>

        <li>
          <a href="#" class="footer-list">Meus Pedidos</a>
        </li>
      
        <li>
          <a href="#" class="footer-list">Trocas e Devoluções</a>
        </li>
      </ul>

      <div id="footer-subscribe">
        <h3>Atualização</h3>
          <a href="#" class="footer-list">Cadastre seu email para receber atualizações de nossos produtos</a> 
      </div>
    </div>
    </div>
    <div id="footer-copyright">
      &#169 2023 all rights reserved 
    </div> 
 </footer>
</body>
</html> 
