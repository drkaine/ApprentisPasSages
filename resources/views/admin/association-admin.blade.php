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



<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
CKEDITOR.replace( 'infoEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
<script>
CKEDITOR.replace( 'assoEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>

@endsection
