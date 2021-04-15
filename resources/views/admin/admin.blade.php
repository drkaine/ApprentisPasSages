@extends("templates/header")

@section("body")

  <body>
    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">Pannel d'administration</h1>
    </div>
    <div class='co_admin'>
      <h2>Connectez-vous</h2>
        <form action="" method="post">
            {{ csrf_field() }}
            
            <input type="hidden" name="confirmeCompte" value="yes">
            <label for="email">Votre mail:</label><br>
            <input type="email" id="email" name="email" placeholder="Mail" required autofocus ><br>
            
            <label for="password">Votre mot de passe:</label><br>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required><br><br>
            
            <button type="submit" value="Se connecter" name ="testconnection">Se connecter</button>
        </form>
        <a href="mdp-oublie">Mot de passe oublié ?</a>
    </div>
       
  </body>
  <div class="m-t-1 ban2"></div>

  @include("templates/footer")
  @endsection