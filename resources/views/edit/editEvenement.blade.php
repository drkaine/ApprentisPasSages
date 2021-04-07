
@extends('templates/barre-admin')

@section("content")
 <form action="" method="post">
    {{ csrf_field() }}

    <input type="hidden" name="editEV" value="Yes">

    @foreach($programmationId as $p)
    <input type="hidden" name="progid" value="{{$p->id}}">
  <label for="dateDebutEdit">date de debut</label>
<input id="dateDebutEdit" type="datetime-local" step="1" value="{{$p->dateDebut}}" name="dateDebut">

 <label for="dateFinEdit">date de fin</label>
<input id="dateFinEdit" type="datetime-local" step="1" value="{{$p->dateFin}}" name="dateFin">

<label for="photoEdit">Nombre de personne</label>
  <input id="nbPersonnesPrevuesEdit" name ="nbPersonnesPrevues" type="number" value="{{$p->nbPersonnesPrevues}}" >
@endforeach
@foreach($moduleId as $m)
<select name="Module"  size=1 >
                <option disabled>Veuillez choisir un module</option>
                @foreach ($module as $mod)
                    <option value="{{ $mod->id }}"
                    @if($mod->id==$m->id)
                        selected="selected"
                    @endif

                       >{{ $mod->nom }}</option>
                @endforeach
            </select>
@endforeach

@foreach($actionId as $a)
<select name="Action"  size=1 >
                <option disabled>Veuillez choisir un module</option>
                @foreach ($action as $act)
                    <option value="{{ $act->id }}"
                    @if($act->id==$a->id)
                        selected="selected"
                    @endif>{{ $act->nom }}</option>
                @endforeach
            </select>
@endforeach


    <input type="submit" value="éditer" name ="edito" >
</form>


<a href="{{route('Accueil-Admin')}}"><h1>Revenir à Accueil</h1></a>


<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
@endsection
