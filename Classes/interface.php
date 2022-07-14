<?php

// Déclaration de l'interface pour les formulaires comme template
interface FormInterface {
     // On déclare les variables qui seront utilisées dans les formulaires
     public function setView($class, $id, $name, $value, $placeholder, $type, $required);
     // On déclare la méthode qui affiche le formulaire
     public function getView();
     public function view();
}

// Déclaration de l'interface CreateLink
interface LinkInterface {
     // On déclare les variables qui seront utilisées dans les formulaires
     public function setView($lien, $text, $class, $icon);
     // On déclare la méthode qui affiche le formulaire
     public function getView();
     public function view();
}

// Déclaration de l'interface LabelInterface
interface LabelInterface {
     // On déclare les variables qui seront utilisées dans les formulaires
     public function setView($label);
     // On déclare la méthode qui affiche le formulaire
     public function getView();
     public function view();
}