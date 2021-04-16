@extends('templates/barre-admin')

@section("content")
    <section class="ajout">
        <input type="hidden" name="nom_album" value="{!! $nom!!}">
        @php
            $compte=0;
        @endphp
        <form action="" method="post">
            {{ csrf_field() }}
            <input type="file" name="ajoutPhoto" >
            @foreach ($photos as $p)
            @php
                $compte++;
            @endphp
                <input type="checkbox" id="catt{!! $compte !!}" name="img">
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
            <input type="submit" value="Ajouter" name ="ajouter">
        </form>
        <a href="{{route('AdminController.albumAdmin', ['nom'=>$nom])}}"><h1>Revenir à l'album {!! $nom!!}</h1></a>
    </section>
    <div class="m-t-1 ban2"></div>
@endsection