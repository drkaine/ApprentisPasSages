@extends("barre-admin")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
</div>

<form method="POST" action="accueil-admin">
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="nom" placeholder="" required  ><br>
    <label for="nom">Description:</label><br>
    <input type="text" id="nom" name="nom" placeholder="" required  ><br>
    <label for="nom">Img:</label><br>
    <input type="text" id="nom" name="nom" placeholder="" required  ><br>
    <label for="nom">Temps:</label><br>
    <input type="text" id="nom" name="nom" placeholder="" required  ><br>
    <label for="nom">Matériel nécessaire :</label><br>
    <input type="text" id="nom" name="nom" placeholder="" required  ><br>
    <label for="nom">Projet pédagogique :</label><br>
    <input type="text" id="nom" name="nom" placeholder="" required  ><br>
    <label for="nom">Lieu du module :</label><br>
    <input type="text" id="nom" name="nom" placeholder="" required  ><br>
    <label for="nom">Format du module :</label><br>
    <input type="text" id="nom" name="nom" placeholder="" required  ><br>
    <button> Valider</button>
    <button> Annuler</button>
  </form>

<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
        @endsection
