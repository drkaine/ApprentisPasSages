@extends("templates/header")

@section("body")

  <body>
    <div id="ban" class="container-fluid m-t-1 ban">
      <h1 id="titreAssociation" style="box-sizing:border-box;">Mot de passe oublié ?</h1>
    </div>
    <div class='co_admin'>
        <h2>Identifiez-vous</h2>
        <form method="POST" action="/accueil-admin">
            {{ csrf_field() }}
            <label for="Password">Votre mot de passe:</label><br>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required><br><br>
            <label for="Password">Votre mot de passe:</label><br>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required><br><br>
            <button>Envoi</button>
        </form>
    </div>
  </body>
  <div class="m-t-1 ban2"></div>

@include("templates/footer")
@endsection