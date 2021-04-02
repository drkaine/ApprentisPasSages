
@extends('barre-admin')

@section("content")
 <form action="" method="post">
    {{ csrf_field() }}
    {!! method_field('PUT') !!}


<input type="hidden" name="membres" value="Yes">
<input type="hidden" name="id" value="{{ $membre->id }}">
  <label for="prenomEdit">Prenom</label>
   <textarea id="prenomEdit" name ="prenom" value="{!!$membre->prenom!!}">
    <div class="pl-5">{!!$membre->prenom!!}</div>
</textarea>
 <label for="prenomEdit">Nom</label>
  <textarea id="nomEdit" name ="nom" value="{!!$membre->nom!!}">
    <div class="pl-5">{!!$membre->nom!!}</div>
</textarea>


<section class="membre">
<div class="row">
    <div class="col-3 p-auto">
      @if($membre->photo == null)
        <img class="imageOneTeam" src="/public/img/team/apprentispassages_logo_renard.png" alt="photo de l'avatar de l'association ApprentiPasSage">
      @else
           <img class="imageOneTeam" src="/img/team/{{$membre->photo}}" alt="photo de {{$membre->nom}} {{$membre->prenom}} de l'association ApprentiPasSage">
      @endif
    </div>

  </div>
</section>


<label for="photoEdit">photo</label>
  <textarea id="photoEdit" name ="photo" value="{!!$membre->photo!!}" >
    {!!$membre->photo!!}
</textarea>




<label for="descriptionEdit">description</label>
<textarea id="descriptionEdit" name ="description" value="{!!$membre->description!!}">
    <div class="pl-5">{!!$membre->description!!}</div>
</textarea>


      <label for="telephoneEdit">telephone</label>
  <textarea id="telephoneEdit" name ="telephone" value="{!!$membre->telephone!!}">
    <div class="pl-5">{!!$membre->telephone!!}</div>
</textarea>


     <label for="emailEdit">email</label>
  <textarea id="emailEdit" name ="email" value="{!!$membre->email!!}">
    <div class="pl-5">{!!$membre->email!!}</div>
</textarea>

  <input type="submit" value="Editer" name ="edito" >
</form>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
CKEDITOR.replace( 'descriptionEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
 <script>
CKEDITOR.replace( 'prenomEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
<script>
CKEDITOR.replace( 'nomEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>

 <script>
CKEDITOR.replace( 'emailEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
<script>
CKEDITOR.replace( 'telephoneEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
<script>
CKEDITOR.replace( 'photoEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>


 <form action="" method="post">
    {{ csrf_field() }}
    {!! method_field('PUT') !!}


<input type="hidden" name="membresStatuts" value="Yes">


<div class="col-4 m-auto">
      <h2 class="titreH2prestation pt-5">Rôle(s) dans l'association</h2>
      @php
          $compte=0;
      @endphp
      @foreach($statut as $statu)
        @php
          $compte++;
      @endphp
      <div>

          <input type="checkbox" id="statt" name="statt{{$compte}}"
          @foreach($membreStatut as $mStatut)
          @if($statu->id==$mStatut->statut_id and $membre->id==$mStatut->membre_id )
          checked
          @endif
          @endforeach
          >
          <label for="scales">{{$statu->nom}}</label>

          <input type="hidden" name="statutId{{$compte}}" value="{{$statu->id}}">
          <input type="hidden" name="membreId" value="{{ $membre->id }}">
    </div>
      @endforeach
      <input type="hidden" name="compte" value="{{$compte}}">
    </div>

    <input type="submit" value="Editer" name ="edito" >
</form>





  <section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
@endsection
