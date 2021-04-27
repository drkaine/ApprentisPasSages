@extends("templates/header")

@section("body")

  <body>
    <div id="ban" class="container-fluid m-t-1 ban">
      <h1 id="titreAssociation" style="box-sizing:border-box;">Mot de passe à changer !</h1>
    </div>
    <div class='co_admin'>
        <h2>Identifiez-vous</h2>
        <form method="post" action="">
            {{ csrf_field() }}
            <input type="hidden" name="email" value="">
            <label for="mdp1">Votre mot de passe:</label><br>
            <input type="password" id="mdp1" name="mdp1" placeholder="Mot de passe" required><br><br>
            <label for="mdp2">Confirmation de mot de passe:</label><br>
            <input type="password" id="mdp2" name="mdp2" placeholder="Mot de passe vérification" required><br><br>
            @foreach ($errors->all() as $error)
              <div class="Error">{{ $error }}</div>
            @endforeach
            <button type="submit">Envoi</button>
        </form>
    </div>
  </body>
  <div class="m-t-1 ban2"></div>
@include("templates/footer")
@endsection