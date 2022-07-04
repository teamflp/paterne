<?php 
require_once 'Classes/classes.php';
//use Classes\Menu;
?>

<nav class="w3-panel-top mynavbar navbar navbar-expand-lg fixed-top">
     <div class="container">
		<a class="navbar-brand" href="#">DWM</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		 </button>
	     <div class="mycollapse collapse navbar-collapse" id="navbarNav">
		     <div class="navbar-nav mr-auto">
				<?php
				     $menu1 = new Menu('index.php', 'Accueil', 'nav-link active');
					$menu2 = new Menu('#propos', 'À propos', 'nav-link');
					$menu3 = new Menu('#formations', 'Formations', 'nav-link');
					$menu4 = new Menu('#prestations', 'Prestations', 'nav-link');
					$menu5 = new Menu('#contact', 'Contacts <i class="fas fa-user-circle"></i>', 'nav-link nav-item');
					$menu1->afficher();
					$menu2->afficher();
					$menu3->afficher();
					$menu4->afficher();
					$menu5->afficher();
				?>			
				</div>
		     </div>
	     </div>
	     <div class="devis w-45">
			<?php 
				$menu6 = new Menu('#devis', 'Devis gratuit', 'mybtn');
				$menu6->afficher();
			?>
		</div>
     </div>
</nav>
