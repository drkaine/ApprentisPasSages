<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/accueil.css" />
    <title>WEB-Apprentis</title>




    <nav>
        <ul>
          <li class="logo">
              <img
                class="logo-fox"
                src="images/fox_logo.png"  alt="logo"/>
            </li>
          <li class="logo">
            <img
              class="logo-apprentis"
              src="images/apprentis_pas_sages_banniere.png"  alt="logo"/>
          </li>
        </ul>
    </nav>

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">Pannel d'administration</h1>
</div>
<div>
    <h2>Connectez-vous</h2>
    <form method="post">
        <label name="email">Votre email</label>
        <label name='password'>Votre mot de passe</label>
        <button type="submit">Envoyer</button>
        <a href="mot_de_passe_oublie">Mot de passe oublié ?</a>
    </form>
</div>

<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>



<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\apprentisPasSages\resources\views/admin.blade.php ENDPATH**/ ?>