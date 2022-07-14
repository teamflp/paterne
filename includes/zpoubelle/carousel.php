<?php 
require_once 'Classes/classes.php'; 

?>
<!-- 1 Carousel bootstarp -->
<!-- <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Diapositive 1" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Diapositive 2" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Diapositive 3" class=""></button>
     </div>
     <div class="carousel-inner">
          <div class="carousel-item active">
               <img class="img-slide w-100 img-fluid" src="assets/images/carousel/12.webp" alt="First slide">
               <div class="container">
                    <div class="carousel-caption text-start">
                         <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exemple de titre.</font></font></h1>
                         <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Un contenu d'espace réservé représentatif pour la première diapositive du carrousel.</font></font></p>
                         <p><a class="btncarousel btn btn-lg btn-primary" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrivez-vous aujourd'hui</font></font></a></p>
                    </div>
               </div>
          </div>

           <div class="carousel-item">
               <img class="img-slide w-100 img-fluid" src="assets/images/carousel/02.webp" alt="First slide">
               <div class="container">
                    <div class="carousel-caption text-end">
                         <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Un de plus pour faire bonne mesure.</font></font></h1>
                         <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Un contenu d'espace réservé représentatif pour la troisième diapositive de ce carrousel.</font></font></p>
                         <p><a class="btn btn-lg btn-primary" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parcourir la galerie</font></font></a></p>
                    </div>
               </div>
          </div>

          <div class="carousel-item">
               <img class="img-slide w-100 img-fluid" src="assets/images/carousel/03.webp" alt="First slide">
               <div class="container">
                    <div class="carousel-caption text-end">
                         <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Un de plus pour faire bonne mesure.</font></font></h1>
                         <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Un contenu d'espace réservé représentatif pour la troisième diapositive de ce carrousel.</font></font></p>
                         <p><a class="btn btn-lg btn-primary" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parcourir la galerie</font></font></a></p>
                    </div>
               </div>
          </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Précédent</font></font></span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prochain</font></font></span>
     </button>
</div> -->


<!-- 2 Carousel js -->

<div class="carousel2 carousel slide container-fluid"  data-bs-ride="carousel">
     <div class="progress-bar progress-bar--primary hide-on-desktop">
          <div class="progress-bar__fill"></div>
     </div>

     <header class="main-post-wrapper">
          <div class="slides">
               <article class="main-post main-post--active">
                    <div class="main-post__image">
                         <img class="img-slide w-100 img-fluid" src="assets/images/carousel/04.webp" alt="First slide">
                    </div>
                    <div class="main-post__content">
                         <div class="main-post__tag-wrapper">
                              <span class="main-post__tag">Création de sites internet</span>
                         </div>
                         <h1 class="main-post__title">
                              De la conception à la production, nous créons votre site internet et e-commerce rapide, sûr et facile à gérer.
                         </h1>
                         <span class="main-post__link-text">
                              <?php
                                   $btn = new CreateLink();
                                   $btn->setView('#contact', 'Contactez-moi', 'nav-link main-post__link', 'fa fa-arrow-circle-right');
                                   $btn->view();
                              ?>
                         </span>
                    </div>
               </article>

               <article class="main-post main-post--not-active">
                    <div class="main-post__image">
                         <img class="img-slide w-100 img-fluid" src="assets/images/carousel/06.webp" alt="First slide">
                    </div>
                    <div class="main-post__content">
                         <div class="main-post__tag-wrapper">
                              <span class="main-post__tag">Création de sites internet</span>
                         </div>
                         <h1 class="main-post__title">
                              Création de sites internet professionnels pour particuliers et entreprises sur la plateforme WordPress.
                         </h1>
                         <span class="main-post__link-text">
                              <?php
                                   $btn = new CreateLink();
                                   $btn->setView('#contact', 'Contactez-moi', 'nav-link main-post__link', 'fa fa-arrow-circle-right');
                                   $btn->view();
                              ?>
                         </span>
                    </div>
               </article>

               <article class="main-post main-post--not-active">
                    <div class="main-post__image">
                         <img class="img-slide w-100 img-fluid" src="assets/images/carousel/10.webp" alt="First slide">
                    </div>
                    <div class="main-post__content">
                         <div class="main-post__tag-wrapper">
                              <span class="main-post__tag">Optimisation du référencement</span>
                         </div>
                         <h1 class="main-post__title">
                              Création de contenus de qualité engageant pour maximiser les conversions.
                         </h1>
                         <span class="main-post__link-text">
                              <?php
                                    $btn = new CreateLink();
                                   $btn->setView('#contact', 'Contactez-moi', 'nav-link main-post__link', 'fa fa-arrow-circle-right');
                                   $btn->view();
                              ?>
                         </span>
                    </div>
               </article>
          </div>
     </header>

     <div class="posts-wrapper hide-on-mobiler">
          <article class="post post--active">
               <div class="progress-bar">
                    <div class="progress-bar__fill"></div>
               </div>
               <header class="post__header">
                    <span class="post__tag">Création de sites internet</span>
                    
               </header>
               <h2 class="post__title">
                    De la conception à la production, nous créons votre site internet et e-commerce rapide, sûr et facile à gérer.
               </h2>
          </article>

          <article class="post">
               <div class="progress-bar">
               <div class="progress-bar__fill"></div>
               </div>
               <header class="post__header">
               <span class="post__tag">Webdesign et sites web</span>
               </header>
               <h2 class="post__title">Création de sites internet professionnels pour particuliers et entreprises sur la plateforme WordPress.</h2>
          </article>

          <article class="post">
               <div class="progress-bar">
                    <div class="progress-bar__fill"></div>
               </div>
               <header class="post__header">
                    <span class="post__tag">Optimisation du référencement</span>
               </header>
               <h2 class="post__title">Création de contenus de qualité engageant pour maximiser les conversions.</h2>
          </article>
     </div>
</div>

<script>
     $(document).ready(function() {
          $('#myCarousel').carousel({
               interval: 5000,
               pause: "hover",
               wrap: true,
               keyboard: true,
               ride: true,
               touch: true
          }, 'cycle');
     });
</script>