<?php 
require_once 'Classes/classes.php'; 

?>
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