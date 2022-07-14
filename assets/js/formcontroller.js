// 
function checkForm() {
     let form = document.getElementById("form");
     let inputs = form.getElementsByTagName("input", "textarea");
     let error = document.getElementById("error");
     let success = document.getElementById("success");
     let empty = false;
     for (var i = 0; i < inputs.length; i++) {
          if (inputs[i].value == "") {
               empty = true;
          }
     }
     if (empty) {
          document.getElementById("error").innerHTML = 'Veuillez remplir tous les champs du formulaire';
          // on attibue une class au div pour lui donner une couleur de fond rouge
          error.classList.add("alert", "alert-danger", "transition");

          // On attribue une bordure rouge aux champs vides
          for (var i = 0; i < inputs.length; i++) { 
               if (inputs[i].value == "") {
                    inputs[i].style.border = "1px solid red";
               }
          }
     } else {
          // On affiche un message de succès
          success.innerHTML = 'Votre message a bien été envoyé';
          error.innerHTML = "";
          form.submit();
     }
     // on fait disparaitre progressivement la class du div après 3 secondes pour le rendre transparent et le supprimer de la liste des classes
     setTimeout(() => {
          error.innerHTML = "";
          // On supprime les class du div après 3 secondes
          error.classList.remove("alert", "alert-danger", "transition");
     }, 3000);
}
