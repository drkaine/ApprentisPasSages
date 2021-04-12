@extends('templates/barre-admin')

@section("content")
    <form action="" method="post">
        {{ csrf_field() }}
        
        <input type="hidden" name="ajoutEV" value="Yes">
        
        <label for="dateDebutEdit">date de debut</label>
        <input id="dateDebutEdit" type="datetime-local" step="1" value="YYYY-MM-DD hh:mm:ss" name="dateDebut">

        <label for="dateFinEdit">date de fin</label>
        <input id="dateFinEdit" type="datetime-local" step="1" value="YYYY-MM-DD hh:mm:ss" name="dateFin">

        <label for="photoEdit">Nombre de personne</label>
        <input id="nbPersonnesPrevuesEdit" name ="nbPersonnesPrevues" type="number" >

        <select name="Module"  size=1 >
            <option disabled>Veuillez choisir un module</option>
            @foreach ($module as $mod)
                <option value="{{ $mod->id }}" >{{ $mod->nom }}</option>
            @endforeach
        </select>
        <select name="Action"  size=1 >
            <option disabled>Veuillez choisir un module</option>
            @foreach ($action as $act)
                <option value="{{ $act->id }}" >{{ $act->nom }}</option>
            @endforeach
        </select>
        
        <input type="submit" value="Ajouter" name ="ajouter" >
    </form>

    <a href="{{route('Accueil-Admin')}}"><h1>Revenir à Accueil</h1></a>
    <div class="m-t-1 ban2"></div>
@endsection