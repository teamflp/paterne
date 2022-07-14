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
                    <div class="row">
                         <div class="col-md-3 mb-2">
                              <div class="card w3-hover">
                                   <?= CreateIcon::view('fa fa-wordpress text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">WordPress</h5>
                                        <p class="card-text">Système de gestion de contenu</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>
                         
                         <div class="col-md-3 mb-2">
                              <div class="card">
                                  <?= CreateIcon::view('fa fa-linux text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">Linux</h5>
                                        <p class="card-text">Système d'exploitation open source</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fa-brands fa-aws text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">AWS</h5>
                                        <p class="card-text"> Plateforme cloud la plus complète</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                          <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fa fa-cloud text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">Cloud</h5>
                                        <p class="card-text">Cloud, services cloud et virtualisation</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fa fa-html5 text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">HTML5</h5>
                                        <p class="card-text">Créer des pages web avec HTML5</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fa fa-css3 text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">CSS3</h5>
                                        <p class="card-text">Feulles de style en cascade</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fab fa-php text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">PHP</h5>
                                        <p class="card-text">Créer un site dynamique avec PHP</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fab fa-symfony text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">Symfony</h5>
                                        <p class="card-text">Créer un site robuste avec Symfony</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fa fa-database text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">MySQL</h5>
                                        <p class="card-text">Serveur de base de données</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fab fa-js text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">JavaScript</h5>
                                        <p class="card-text">Langage de programmation de script</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fab fa-bootstrap text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">Bootstrap</h5>
                                        <p class="card-text">Infrastructure de développement frontale</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 mb-2">
                              <div class="card">
                                   <?= CreateIcon::view('fab fa-vuejs text-center', 10, 'em') ?>
                                   <div class="card-body text-center">
                                        <h5 class="card-title">Vuejs</h5>
                                        <p class="card-text">Framework javascript open-source</p>
                                        <!-- Créer un bouton -->
                                        <?php
                                             $btn = new CreateLink();
                                             $btn->setView('#', 'En savoir plus', 'btn btn-primary', 'fas fa-arrow-circle-right');
                                             $btn->view();
                                        ?>
                                   </div>
                              </div>
                         </div>
                    </div>
               <!-- </div>
          </div> -->




          <div class="center">
               <div class="wrapper">
                    <div class="inner">
                         <div class="card">
                              <img src="https://colorlib.com/preview/theme/seogo/img/case_study/1.png">
                              <div class="content">
                                   <h1>Product Design</h1>
                                   <h3>UI/UX, Design</h3>
                              </div>
                         </div>
                         <div class="card">
                              <img src="https://colorlib.com/preview/theme/seogo/img/case_study/2.png">
                              <div class="content">
                                   <h1>Custom Website</h1>
                                   <h3>UI/UX, Design</h3>
                              </div>
                         </div>
                         <div class="card">
                              <img src="https://colorlib.com/preview/theme/seogo/img/case_study/3.png">
                              <div class="content">
                                   <h1>Digital Marketing</h1>
                                   <h3>UI/UX, Design</h3>
                              </div>
                         </div>
                         <div class="card">
                              <img src="https://colorlib.com/preview/theme/seogo/img/case_study/1.png">
                              <div class="content">
                                   <h1>Digital Marketing</h1>
                                   <h3>UI/UX, Design</h3>
                              </div>
                         </div>
                         <div class="card">
                              <img src="https://colorlib.com/preview/theme/seogo/img/case_study/2.png">
                              <div class="content">
                                   <h1>Digital Marketing</h1>
                                   <h3>UI/UX, Design</h3>
                              </div>
                         </div>
                         <div class="card">
                              <img src="https://colorlib.com/preview/theme/seogo/img/case_study/3.png">
                              <div class="content">
                                   <h1>Digital Marketing</h1>
                                   <h3>UI/UX, Design</h3>
                              </div>
                         </div>
                         <div class="card">
                              <img src="https://colorlib.com/preview/theme/seogo/img/case_study/1.png">
                              <div class="content">
                                   <h1>Digital Marketing</h1>
                                   <h3>UI/UX, Design</h3>
                              </div>
                         </div>
                         <div class="card">
                              <img src="https://colorlib.com/preview/theme/seogo/img/case_study/2.png">
                              <div class="content">
                                   <h1>Digital Marketing</h1>
                                   <h3>UI/UX, Design</h3>
                              </div>
                         </div>
                         <div class="card">
                              <img src="https://colorlib.com/preview/theme/seogo/img/case_study/3.png">
                              <div class="content">
                                   <h1>Digital Marketing</h1>
                                   <h3>UI/UX, Design</h3>
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