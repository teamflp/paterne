<?php  
namespace App\Classes;
use CreateLink;

require_once 'Classes/classes.php'; 
?>

<!-- navbar pour les cordonnées -->
<nav class="navbar-tel-email w3-padding-16 navbar-light bg-light">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
				// @param $lien : lien de la page
				// @param $text : texte du lien
				// @param $class : classe du lien
				// @param $icon : icone du lien

				$tel = new CreateLink();
				$tel->setView('tel:+33663436087', '(+33) 663 43 60 87', 'nav-link',  'fab fa-whatsapp');
				$tel->view();

				$email = new CreateLink();
				$email->setView('mailto:it.devwebm@gmail.com', 'it.devwebm@gmail.com', 'nav-link', 'fas fa-envelope');
				$email->view();
				?>
			</div>
		</div>
	</div>
</nav>

<nav class="w3-panel-top w3- mynavbar navbar navbar-expand-lg" id="mynav" v-show="show_nav" >
     <div class="container">
		<h3 class="navbar-brand" href="#">DWM</h3>
		<div class="row">
			<div class="col-12">
				<?php
				     $tel = new CreateLink();
					$tel->setView('tel:+33663436087', '(+33) 663 43 60 87' , 'nav-link myphone', 'fab fa-whatsapp');
					$tel->view();
				?>
			</div>
		</div>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		 </button>
	     <div class="mycollapse collapse navbar-collapse" id="navbarNav">
		     <div class="navbar-nav mr-auto">
				<?php
				     $home = new CreateLink();
					$home->setView('index.php', 'Accueil', 'nav-link', 'fas fa-home');
					$home->view();
					
					$about = new CreateLink();
					$about->setView('#propos', 'À propos',  'nav-link', '');
					$about->view();

					$training = new CreateLink();
					$training->setView('#formation', 'Formation', 'nav-link', '');
					$training->view();

					$presta = new CreateLink();
					$presta->setView('#prestation', 'Prestation', 'nav-link', '');
					$presta->view();

					$contact = new CreateLink();
					$contact->setView('#contact', 'Contact', 'nav-link', 'fas fa-envelope');
					$contact->view();
				?>		
			     </div>
		     </div>
			<div class="devis">
				<?php 
				// @param $lien : lien de la page
				// @param $text : texte du lien
				// @param $class : classe du lien
				// @param $icon : icone du lien

					$devis = new CreateLink();
					$devis->setView('#devis', 'Devis', 'nav-link mybtn', '');
					$devis->view();
				?>
			</div>
		</div>
     </div>
</nav>
