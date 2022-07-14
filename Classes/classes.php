<?php
// Importation des classes
require_once 'Classes/interface.php'; 

// Créer une class CreateLink qui hérite de l'interface Link
class ClassLink implements LinkInterface {
     // On déclare les variables qui seront utilisées dans les liens
     public function setView($lien, $text, $class, $icon) {
          $this->lien = $lien;
          $this->text = $text;
          $this->class = $class;
          $this->icon = $icon;
     }
     // On déclare la méthode qui affiche le formulaire
     public function getView() {
          return '<a href="' . $this->lien . '" class="' . $this->class . '"> <i class="'. $this->icon .'"></i> '  . $this->text . '</a>';
     }
     public function view() {
          echo $this->getView();
     }
}

// On créé une classe qui hérite de la classe ClassLink
class CreateLink extends ClassLink {
     // On déclare la méthode qui affiche le formulaire
     public function view() {
          echo $this->getView();
     }
}


// Classe CreateClass
class CreateClass {
     private $class;
     private $id;

     public function __construct($class, $id) {
          $this->class = $class;
          $this->id = $id;
     }

     // Créer une methode static pour afficher la class

     public static function view($class = null, $id = null) {
          if($class || $id) {
               $class = new CreateClass($class, $id);
               echo htmlspecialchars($class->class). " " .htmlspecialchars($class->id);
          }
          return false;
     }
}

// Créer une classe icon pour les icones

class CreateIcon {
     public function __construct($class, $size, $u) {
          $this->class = $class;
          $this->size = $size;
          $this->u = $u;
     }
     public static function view($class, $size, $u) {
          $html = '<i class="'.$class.'" style="font-size:' .$size. "" .$u. ';"></i>';
          return $html;
     }

}

// Créer une classe ClassForm qui hérite de l'interface Form
class ClassForm implements FormInterface {
     // On déclare les variables qui seront utilisées dans les formulaires
     public function setView($class, $id, $name, $value, $placeholder, $type, $required) {
          $this->class = $class;
          $this->id = $id;
          $this->name = $name;
          $this->value = $value;
          $this->placeholder = $placeholder;
          $this->type = $type;
          $this->required = $required;
     }
    
     // On créé une méthode pour protéger les champs du formulaire contre les injections SQL
     public function setProtected($bool) {
          $this->protected = $bool;
     }
     
     // On déclare la méthode qui affiche le formulaire
     public function getView() {
          return '<input type="' . $this->type . '" class="' . $this->class . '" id="' . $this->id . '" name="' . $this->name . '" value="' . $this->value . '" placeholder="' . $this->placeholder . '" required>';
     }
     public function view() {
          echo $this->getView();
     }
}

// Créer une classe CreateForm qui hérite de la classe ClassForm
class CreateForm extends ClassForm {
     // On déclare la méthode qui affiche le formulaire
     public function view() {
          echo $this->getView();
     }
}

// Créer une classe ClassLabel qui hérite de l'interface LabelInterface
class ClassLabel implements LabelInterface {
     // On déclare les variables qui seront utilisées dans les formulaires
     public function setView($label) {
          $this->label = $label;
     }
     // On déclare la méthode qui affiche le formulaire
     public function getView() {
          return '<label for="' . $this->label . '">' . $this->label . '</label>';
     }
     public function view() {
          echo $this->getView();
     }
}

// Créer une classe CreateLabel qui hérite de la classe ClassLabel
class CreateLabel extends ClassLabel {

     // On déclare la méthode qui affiche le formulaire
     public function view() {
          echo $this->getView();
     }
}
