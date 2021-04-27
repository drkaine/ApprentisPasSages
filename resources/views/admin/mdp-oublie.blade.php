@extends("templates/header")

@section("body")

  <body>
    <div id="ban" class="container-fluid m-t-1 ban">
      <h1 id="titreAssociation" style="box-sizing:border-box;">Mot de passe oublié ?</h1>
    </div>
    <div class='co_admin'>
      <h2>Identifiez-vous</h2>
        <form method="POST" action="">
          {{ csrf_field() }}
          <input type="hidden" name="mdp" value="Yes">
          <label for="Mail">Votre mail :</label><br>
          <input type="email" id="mail" name="mail" placeholder="Mail" required autofocus ><br>
          <label for="Mail">Vérification mail :</label><br>
          <input type="email" id="mail2" name="mail2" placeholder="Mail" required><br><br>
          <input type="submit" value="Envoyer" name ="edito" >
          @foreach ($errors->all() as $error)
            <div class="Error">{{ $error }}</div>
        @endforeach
        </form>
    </div>
  </body>
  <div class="m-t-1 ban2"></div>
@include("templates/footer")
@endsection