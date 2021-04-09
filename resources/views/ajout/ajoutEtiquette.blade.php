
@extends('barre-admin')

@section("content")
 <form action="" method="post">
    {{ csrf_field() }}
    
    <input type="hidden" name="ajoutEtiquette" value="Yes">
     
   

 <label for="nomEdit">Nom</label>
  <input type="text"  id="nomEdit" name ="nom" required>



<label for="couleurEdit">couleur</label>
<input type="text" id="couleurEdit" name ="couleur" required>
  
@if($prestation=='tout')
<a href="{{route('TemplateController.allPrestationsAdmin')}}"><h1>Revenir à toute les prestations</h1></a>
@else
<a href="{{route('TemplateController.prestationsAdmin', ['prestation'=>$prestation])}}"><h1>Revenir à {{$prestation}}</h1></a>
@endif


<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
@endsection