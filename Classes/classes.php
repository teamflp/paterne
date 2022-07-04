   <?php

// Créer un menu

     class Menu {
          public function __construct($lien, $texte, $class)
          {
               $this->lien = $lien;
               $this->texte = $texte;
               $this->class = $class;
          }

          public function afficher() {
               echo "<a href=".$this->lien." class=" . $this->class . ">" . $this->texte . "</a>";
          }
     }