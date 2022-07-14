
<!-- Pied de page -->
<footer class="w3-light-grey w3-padding-48 w3-large">
     <div class="w3-center mb-3">
          <?php 
          $top = new CreateLink();
          $top->setView('#top', '', 'w3-button w3-light-grey', 'fas fa-arrow-up w3-center');
          $top->view();
          ?>
     </div>
     <div class="container">
          <div class="row">
               <div class="col-md-4 mb-5">
                    <h3 class="card-contact__title">Mes contacts</h3>
                    <hr class="linehr">
                    <div class="text-2 mb-2"><?= CreateIcon::view('fas fa-map-marker-alt', null,  null); ?> 11 allée de Picardie 91800 - Brunoy</div>
                    <div class="text-2 mb-2">
                         <?php
                              $tel = new CreateLink();
                              $tel->setView('tel:+33663436087', '(+33) 663 43 60 87' , 'nav-link myphone', 'fab fa-whatsapp');
                              $tel->view();
                         ?>
                    </div>
                    <div class="text-2">
                         <?php
                              $email = new CreateLink();
                              $email->setView('mailto:it.devwebm@gmail.com', 'it.devwebm@gmail.com', 'nav-link', 'fas fa-envelope');
                              $email->view();
                         ?>
                    </div>
               </div>
               <div class="col-md-4 mb-5">
                    <h3 class="card-contact__title">Services Web</h3>
                    <hr class="linehr">
                    <div class="text-2 mb-5">
                         <?php
                              $createweb = new CreateLink();
                              $createweb->setView('#', 'Web design et site web', 'nav-link', 'fas fa-laptop-code');
                              $createweb->view();

                              $ecommerce = new CreateLink();
                              $ecommerce->setView('#', 'Plateforme de E-commerce', 'nav-link', 'fas fa-shopping-cart');
                              $ecommerce->view();

                              $maintenance = new CreateLink();
                              $maintenance->setView('#', 'Maintenance ordinaire', 'nav-link', 'fas fa-tools');
                              $maintenance->view();

                              $migration= new CreateLink();
                              $migration->setView('#', 'Migration de site web', 'nav-link', 'fas fa-exchange-alt');
                              $migration->view();

                              $seo = new CreateLink();
                              $seo->setView('#', 'Optimisation du référencement (SEO)', 'nav-link', 'fas fa-search');
                              $seo->view();

                              $hosting = new CreateLink();
                              $hosting->setView('#', 'Mise en production', 'nav-link', 'fas fa-server');
                              $hosting->view();

                              $accelerer = new CreateLink();
                              $accelerer->setView('#', 'Acceleration de site web sur Google', 'nav-link', 'fas fa-rocket');
                              $accelerer->view();
                         ?>
                    </div>
               </div>
               <div class="col-md-4">
                    <h3 class="card-contact__title">
                         <?= CreateIcon::view('fas fa-bullhorn', null,  null); ?> Derniers articles
                    </h3>
                    <hr class="linehr">
                    <div class="text-2 mb-3">
                         <?php
                              $article1 = new CreateLink();
                              $article1->setView('#', 'Comment améliorer votre taux de conversion des annonces Google', 'nav-link',  'fas fa-newspaper');
                              $article1->view();

                              $article2 = new CreateLink();
                              $article2->setView('#', 'Comment optimiser votre site web pour le référencement', 'nav-link',  'fas fa-newspaper');
                              $article2->view();

                              $article3 = new CreateLink();
                              $article3->setView('#', 'Comment optimiser votre taux de conversion pour augmenter vos ventes', 'nav-link',  'fas fa-newspaper');
                              $article3->view();
                         ?>
                    </div>
               </div>
          </div>
          <hr>
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3 text-center">
               <p class="text-2">
                    <p>&copy; - <?php echo date('Y'); ?> - Tous droits réservés. G.G. Paterne - N° de TVA : FR81209898</p>
                    <?php 
                         $policy = new CreateLink();
                         $policy->setView('#', 'Politique de confidentialité', 'nav-link', null);
                         $policy->view();

                         $cgu = new CreateLink();
                         $cgu->setView('#', 'Conditions générales d\'utilisation', 'nav-link', null);
                         $cgu->view();
                    ?>
               </p>
          </div>
     </div>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/f88b724a6b.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/formcontroller.js"></script>
</body>
</html>