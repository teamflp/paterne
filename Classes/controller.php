 <?php
require_once 'Classes/classes.php'; 

// On créé un formulaire de devis avec les différentes options pour création de site internet
$fname = new CreateForm();
$sname = new CreateForm();
$mail = new CreateForm();
$phone = new CreateForm();
$msg = new CreateForm();

// On créé une variable $form à laquelle on affecte les différentes variables créées précédemment
$myform = [
    'nom' => $fname,
    'prenom' => $sname,
    'mail' => $mail,
    'phone' => $phone,
    'msg' => $msg,
];

// On protège la variable $myform pour éviter les injections SQL avec la fonction setProtected()
foreach ($myform as $key => $value) {
    $myform[$key]->setProtected(true);
}

//On affiche le formulaire $myform

$fname->setView('w3-input form-group__input', 'nom', 'nom', null, null, 'text', 'required');
$sname->setView('w3-input form-group__input', 'prenom', 'prenom', null, null, 'text', 'required');
$mail->setView('w3-input form-group__input', 'mail', 'mail', null, null, 'email', 'required');
$phone->setView('w3-input form-group__input', 'phone', 'phone', null, null, 'text', 'required');
$msg->setView('w3-input form-group__textarea', 'msg', 'msg', null, null, 'textarea', 'required');

$fnameLabel = new CreateLabel();
$snameLabel = new CreateLabel();
$mailLabel = new CreateLabel();
$phoneLabel = new CreateLabel();
$msgLabel = new CreateLabel();

$fnameLabel->setView('Nom');
$snameLabel->setView('Prénom');
$mailLabel->setView('Email');
$phoneLabel->setView('Téléphone');
$msgLabel->setView('Votre message');

// On créé un bouton submit
$submit = new CreateForm();
$submit->setView('w3-button w3-gray w3-round w3-padding-large w3-margin-top mybtn', 'submit', 'submit', 'Envoyer', null, 'submit', null);

// Fin du formulaire




