<?php 
namespace App\Classes;
use CreateIcon;
use CreateLink;

require_once 'Classes/classes.php'; 
require_once 'Classes/controller.php'; 
?>

<!-- Créer un formulaire de devis avec les difféerentes options pour création de site internet-->
<div class="container-fluid formdevis w3-padding-64">
     <div class="container">
          <div class="w3-row-padding">
               <div class="w3-col m4 card-contact">
                    <h3 class="card-contact__title">Mes contacts</h3>
                    <hr class="linehr">
                    <div class="text-3 mb-2"><?= CreateIcon::view('fas fa-map-marker-alt', null,  null); ?> 11 allée de Picardie 91800 - Brunoy</div>
                    <div class="text-3 mb-2">
                         <?php
                              $tel = new CreateLink();
                              $tel->setView('tel:+33663436087', '(+33) 663 43 60 87' , 'nav-link myphone', 'fab fa-whatsapp');
                              $tel->view();
                         ?>
                    </div>
                    <div class="text-3">
                         <?php
                              $email = new CreateLink();
                              $email->setView('mailto:it.devwebm@gmail.com', 'it.devwebm@gmail.com', 'nav-link', 'fas fa-envelope');   
                              $email->view();
                         ?>
                    </div>
               </div>
               <div class="text-center text-white">
                    <h3 class="card-contact__title">Contactez-moi</h3>
                    <p class="text-3">Demandez une consultation gratuite</p>
                    <p class="text-2">Remplissez le formulaire pour recevoir des informations ou demander un devis gratuit.</p>
               </div>
               
               <div class="w3-col m8 w3-padding-64 p-5 w3-card card-contact__form">
                    <form action="formdevis.php" method="post">
                         <div class="row">
                              <div class="col-md-6">
                                   <p>
                                        <label for="nom"><?= $fnameLabel->view() ?></label>
                                        <?= $fname->view(); ?>
                                   </p>
                              </div>
                              
                              <div class="form-group col-md-6">
                                   <p>
                                        <label for="prenom"> <?= $snameLabel->view() ?></label>
                                        <?= $sname->view(); ?>
                                   </p>
                              </div>
                              
                              <div class="form-group col-md-6">
                                   <p>
                                        <label for="email"> <?= $mailLabel->view() ?></label>
                                        <?= $mail->view(); ?>
                                   </p>
                              </div>

                              <div class="form-group col-6">
                                   <p>
                                        <label for="phone"> <?= $phoneLabel->view() ?></label>
                                        <?= $phone->view(); ?>
                                   </p>
                              </div>
                              
                              <div class="form-group col-12">
                                   <p>
                                        <label for="msg"> <?= $msgLabel->view() ?></label>
                                        <?= $msg->view(); ?>
                                   </p>
                              </div>
                              
                              <div class="form-group col-12">
                                   <p>
                                        <?= $submit->view(); ?>
                                   </p>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>