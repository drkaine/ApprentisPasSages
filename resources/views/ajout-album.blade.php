@extends("barre-admin")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
</div>

<form method="POST" action="accueil-admin">
    <label for="nom">Nom album:</label><br>
    <input type="text" id="nom" name="nom" placeholder="nom" required  ><br>
    <label for="module">Module relié :</label><br>
    <input type="text" id="module" name="module" placeholder="module" ><br><br>
    <label for="module">Photo appartenant à l'album :</label><br>
    <button> Valider</button>
    <button> Annuler</button>
  </form>

<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
        @endsection
