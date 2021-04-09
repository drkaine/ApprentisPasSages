<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/accueil.css" />

    <title>Apprentis Pas Sages</title>
  </head>

  <header>
    <nav class="nav_co">
      <ul>
        <li class="logo">
          <img class="logo-fox" src={{ asset("storage/images/fox_logo.png") }} alt="logo"/>
        </li>
        <li class="logo">
          <img class="logo-apprentis" src={{ asset("storage/images/apprentis_pas_sages_banniere.png") }} alt="logo"/>
        </li>
      </ul>
    </nav>
  </header>

  <body>
    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">Mot de passe oublié ?</h1>
    </div>
    <div class='co_admin'>
      <h2>Identifiez-vous</h2>
        <form method="POST" action="accueil-admin">
          <label for="Mail">Votre mail :</label><br>
          <input type="email" id="mail" name="mail" placeholder="Mail" required autofocus ><br>
          <label for="Mail">Vérification mail :</label><br>
          <input type="email" id="mdp" name="mail-verif" placeholder="Mail" required><br><br>
          <button>Envoi</button>
        </form>
    </div>
  </body>
  <div class="m-t-1 ban2"></div>


@extends("templates/footer")