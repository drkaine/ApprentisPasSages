@extends('templates/barre-admin')

@section("content")
    <form action="" method="post">
        {{ csrf_field() }}    
        <input type="hidden" name="ajoutAction" value="Yes">     
        <input type="hidden" name="prestationId" value="{!! $prestation!!}">
    
        <label for="nomEdit">Nom</label>
        <input type="text"  id="nomEdit" name ="nom" required>

        <label for="photoEdit">img</label>
        <input type="text" id="photoEdit" name ="img" >

        <label for="descriptionEdit">description</label>   
        <textarea id="descriptionEdit" name ="description" required></textarea>

        <div class="col-4 m-auto">
            <h2 class="titreH2prestation pt-5">Catalogue</h2>
            @php
                $compte=0;
            @endphp
            @foreach($catalogues as $cat)
                @php
                    $compte++;
                @endphp
                <div>
            
                    <input type="checkbox" id="catt" name="catt{!! $compte!!}">
                    <label for="scales">{!! $cat->nom!!}</label>
                    
                    <input type="hidden" name="catalogueId{!! $compte!!}" value="{!! $cat->id!!}">
                </div>
        @endforeach
        <input type="hidden" name="compte" value="{!! $compte!!}">
        </div>
        
        <input type="submit" value="Ajouter" name ="ajouter" >
    </form>
  
    @if($prestation=='tout')
        <a href="{{route('AdminController.allPrestationsAdmin')}}"><h1>Revenir à toute les prestations</h1></a>
    @else
        <a href="{{route('AdminController.prestationsAdmin', ['prestation'=>$prestation])}}"><h1>Revenir à {!! $prestation !!}</h1></a>
    @endif

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        CKEDITOR.replace( 'descriptionEdit', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>

    <div class="m-t-1 ban2"></div>
@endsection