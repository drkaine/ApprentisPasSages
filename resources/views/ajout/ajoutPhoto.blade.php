@extends('templates/barre-admin')

@section("content")
    <section class="ajout">
        @php
            $compte=0;
        @endphp
        <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="nomA" value="{{ $nom}}">
            <label for="nomEdit">Nom</label>
            <textarea id="nomEdit" name ="nom" ></textarea>
            <input type="file" name="photo">
            @foreach ($photos as $p)
            @php
                $compte++;
            @endphp
            <input type="checkbox" id="photo" name="img" value="{{$p->id}}">
            <label for="scales">
                <img src={{ asset("storage/images/$p->chemin") }}  class="ajout-photo" data-toggle="modal" data-target="#myModal{{$compte}}">
                <!-- Modal -->
                <div id="myModal{{$compte}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        @include("modal/photo")
                    </div>
                </div>
            </label>
            @endforeach
            <input type="hidden" name="compte" value="{{$compte}}">
            <input type="submit" value="Ajouter" name ="ajouter">
        </form>
        <a href="{{route('AdminController.albumAdmin', ['nom'=>$nom])}}"><h1>Revenir à l'album {!! $nom!!}</h1></a>
    </section>
    <div class="m-t-1 ban2"></div>
@endsection