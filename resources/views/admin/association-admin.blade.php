@extends("templates/barre-admin")

@section("content")
@foreach($asso as $assos)

    <form action="" method="post">
    {{ csrf_field() }}
    {!! method_field('PUT') !!}

    <input type="hidden" name="id" value="{{ $assos->id }}">
  <h1>{{ $assos->nom }}</h1>
<textarea id="assoEdit" name ="contenu" value="{{ $assos->contenu }}">
    {{ $assos->contenu }}
</textarea>
<input type="submit" value="Editer" name ="edito" >
</form>

@endforeach

@foreach($info as $infos)
    <form action="" method="post">
    {{ csrf_field() }}
    {!! method_field('PUT') !!}

    <input type="hidden" name="id" value="{{ $infos->id }}">
  <h1>{{ $infos->nom }}</h1>
<textarea id="infoEdit" name ="contenu" value="{{ $infos->contenu }}">
    {{ $infos->contenu }}
</textarea>
<input type="submit" value="Editer" name ="edito" >
</form>
@endforeach



<script>
ClassicEditor
    .create( document.querySelector( '#infoEdit' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

</script>

<script>
//    import HtmlEmbed from '@ckeditor/ckeditor5-html-embed/src/htmlembed';

ClassicEditor
    .create( document.querySelector( '#assoEdit' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
//    .create( document.querySelector( '#assoEdit' ), {
//        plugins: [ HtmlEmbed],
//        toolbar: [ 'htmlEmbed']
//    } )
//    .then( editor => {
//        console.log( editor );
//    } )
//    .catch( error => {
//        console.error( error );
//    } );
</script>

@endsection
