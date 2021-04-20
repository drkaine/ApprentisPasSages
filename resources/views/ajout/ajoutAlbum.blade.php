@extends('templates/barre-admin')

@section("content")


    <form action="" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="ajoutAlbum" value="Yes">
        <label for="nomEdit">Nom</label>
        <textarea id="nomEdit" name ="nom" ></textarea>
        <div>
            @php
                  $compte=0;
              @endphp
            @foreach ($photos as $p)
                <input type="checkbox" id="photo{!! $compte !!}" name="id" value="{{$p->id}}">
                <label for="scales">
                    <img src={{ asset("storage/images/$p->chemin ") }}  class="ajout-photo" data-toggle="modal" data-target="#myModal{{$compte}}">
                    <!-- Modal -->
                    <div id="myModal{{$compte}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            @include("modal/photo")
                        </div>
                    </div>
                </label>
                @php
                  $compte++;
                @endphp
            @endforeach
            <input type="hidden" name="compte" value={{ $compte }}>
          </div>
        <input type="submit" value="Ajouter" name ="ajouter" >
    </form>

    <a href="{{route('Galerie-Admin')}}"><h1>Revenir à la galerie</h1></a>

    <div class="m-t-1 ban2"></div>
@endsection
