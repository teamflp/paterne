<?php 
namespace App\Classes;
use CreateLink;
use CreateIcon;
require_once 'Classes/classes.php'; 
?>
<section class="container-fluid training services-web w3-padding-32">
     <div class="container">
          <div class="row">
               <div class="col">
                    <h4 class="text-center">Formation</h4>
                    <h2 class="text-center">Présentiel ou distanciel</h2>
                    <p class="text-center">
                         Vous êtes un centre de formation agréé ou une entreprise, vous cherchez des formateurs pour vos apprenants ou employés ?
                    </p>
                    <p class="text-center mb-5">Nous dispensons des formations de qualité.</p>
               </div>
          </div> 

          <div class="center">
               <div class="wrapper">
                    <div class="inner">
                         <div class="card">
                              <?= CreateIcon::view('fa fa-wordpress text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>WordPress</h1>
                                   <h3>Système de gestion de contenu</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                              <?= CreateIcon::view('fa fa-linux text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>Linux</h1>
                                   <h3>Système d'exploitation open source</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                              <?= CreateIcon::view('fa-brands fa-aws text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>AWS</h1>
                                   <h3>Plateforme cloud la plus complète</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                              <?= CreateIcon::view('fa fa-cloud text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>Cloud</h1>
                                   <h3>Cloud, services cloud et virtualisation</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                              <?= CreateIcon::view('fa fa-html5 text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>HTML5</h1>
                                   <h3>Créer des pages web avec HTML5</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                               <?= CreateIcon::view('fa fa-css3 text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>CSS3</h1>
                                   <h3>Designer un site web avec le CSS3</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>
                         
                         <div class="card">
                              <?= CreateIcon::view('fab fa-php text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>PHP</h1>
                                   <h3>Créer un site dynamique avec PHP</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                              <?= CreateIcon::view('fab fa-symfony text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>Symfony</h1>
                                   <h3>Créer un site robuste avec Symfony</h3>
                                    <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                              <?= CreateIcon::view('fa fa-database text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>MySQL</h1>
                                   <h3>Serveur de base de données relationnel</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                              <?= CreateIcon::view('fab fa-js text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>JavaScript</h1>
                                   <h3>Langage de programmation de script</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                              <?= CreateIcon::view('fab fa-bootstrap text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>Bootstrap</h1>
                                   <h3>Infrastructure de développement frontale</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>

                         <div class="card">
                              <?= CreateIcon::view('fab fa-vuejs text-center', 10, 'em') ?>
                              <div class="content">
                                   <h1>Vuejs</h1>
                                   <h3>Framework javascript open-source</h3>
                                   <?php
                                        $btn = new CreateLink();
                                        $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                        $btn->view();
                                   ?>
                              </div>
                         </div>
                    </div>
               </div>
          
               <div class="map">
                    <button class="active first"></button>
                    <button class="second"></button>
                    <button class="third"></button>
               </div>
          </div>
     </div>             
</section>


 <!-- javascript mini carousel -->
     <script>
          const buttonsWrapper = document.querySelector(".map");
          const slides = document.querySelector(".inner");

          buttonsWrapper.addEventListener("click", e => {
               if (e.target.nodeName === "BUTTON") {
                    Array.from(buttonsWrapper.children).forEach(item =>item.classList.remove("active"));
                    if (e.target.classList.contains("first")) {
                         slides.style.transform = "translateX(-0%)";
                         e.target.classList.add("active");
                    } else if (e.target.classList.contains("second")) {
                         slides.style.transform = "translateX(-33.33333333333333%)";
                         slide.style.transition = "0.5s ease 0s infinite";
                         e.target.classList.add("active");
                    } else if (e.target.classList.contains('third')){
                         slides.style.transform = 'translatex(-66.6666666667%)';
                         e.target.classList.add('active');
                    } 
               }
          });

     </script>