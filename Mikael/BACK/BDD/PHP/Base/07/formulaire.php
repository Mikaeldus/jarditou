<?php
    $nombre1 = 0;
    $nombre2 = 0;
?>
<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset="utf-8">
    <title>Exercice php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<div>
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="col-12">

          
          <form action="" method="POST">
            <div class="form-row">

              <p class="col-12">* Ces zones sont obligatoire</p>

              <div class="col-md-6 mb-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="inputNom" name="Nom" value="" >
                <span id="missNom" class="hint missNom"></span>
              </div>

              <div class="col-md-6 mb-3">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="inputPrenom" name="Prénom" value="" >
                <span id="missPrenom" class="hint missPrenom"></span>
              </div>

            </div>

            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="date">Date de naissance:</label>
                <input type="date" class="form-control" id="inputDate" name="Date-de-naissance" value="">
              </div>

              <div class="col-md-6 mb-3">
                <label for="mail">E-mail</label>
                <input type="email" class="form-control" id="inputEmail" name="E-mail" value="" >
                <span id="missMail" class="hint missMail"></span>
              </div>

            </div>

            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="inputAdresse" name="Adresse" value="" >
              </div>

              <div class="col-md-6 mb-3">
                <p>Sexe*:</p>
                <input type="radio" name="sexe" value="f" required="required">Masculin
                <input type="radio" name="sexe" value="m" required="required">Féminin<br>
              </div>
            </div>

            <div class="form-row">

              <div class="col-md-6 mb-3">
                <label for="validationDefault06">Ville</label>
                <input type="text" class="form-control" id="validationDefault06" name="Ville" >
              </div>

              <div class="col-md-6 mb-3">
                <label for="code">Code Postale</label>
                <input type="number" class="form-control" id="inputCodePostal" name="Code-postale">
                <span id="missCodePostale" class="hint missCodePostale"></span>
              </div>

            </div>

            <div class="form-row">

              <div class="col-md-6 mb-3">

                <div>Votre demande</div>
                <label for="Sujet">Sujet*</label>
                <select name="Sujet" id="inputSujet" required>
                  <option value="" selected>Veuillez séléctionner un sujet</option>
                  <option value="Mes commandes">Mes commandes</option>
                  <option value="Question sur un produit">Question sur un produit</option>
                  <option value="Réclamation">Réclamation</option>
                  <option value="Autres">Autres</option>
                </select><br>
                <div>Votre question* :</div>
                <textarea name="Commentaires" rows="6" cols="40" id="inputQuestion" required="required"></textarea>
              </div>
            </div>
            <br>



            <div class="form-group">
              <div class="form-check">
                <div class="col-md-12 mb-6">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" name="autoriser" required>
                  <label class="form-check-label" for="invalidCheck2">
                    J'accepte le traitement informatique de ce formulaire
                  </label>
                </div>
              </div>
            </div>

            <div class="col-md-12 mb-6">
              <div class="form-group">
                <div class="form-check">
                  <button id="btn-verif-formulaire" class="btn btn-primary" type="submit">Envoyer</button>
                  <input class="btn btn-primary" type="reset" value="annuler">
                </div>
              </div>
            </div>
          </form>


        </div>
      </div>
    </div>
	</div>
</body>
</html>