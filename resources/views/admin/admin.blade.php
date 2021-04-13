@extends("templates/header")

@section("body")

  <body>
    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">Pannel d'administration</h1>
    </div>
    <div class='co_admin'>
      <h2>Connectez-vous</h2>
        <form method="POST" action="">{{-- {{ Route('UserController.authenticate') }} --}}
          {{ csrf_field() }}
          <label for="Mail">Votre mail:</label><br>
          <input type="email" id="email" name="mail" placeholder="Mail" required autofocus ><br>
          <label for="Password">Votre mot de passe:</label><br>
          <input type="password" id="password" name="mdp" placeholder="Mot de passe" required><br><br>
          <button> Se connecter</button>
        </form>
        <a href="mdp-oublie">Mot de passe oublié ?</a>
    </div>
  </body>
  <div class="m-t-1 ban2"></div>

  @include("templates/footer")
  @endsection