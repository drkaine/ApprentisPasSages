@extends("templates/template")

@section("content")
<body>
<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">Qui sommes nous ?</h1>

<h1 ></h1>
</div>
      <!-- galerie -->
      <section class="about-us">
          @foreach ($asso as $assoc)
            {!! $assoc->contenu!!}
          @endforeach

          <div id="asociation">
            @foreach ($info as $infos)
                {!! $infos->contenu!!}
            @endforeach
      </section>
      <section id="coupDeCoeur" class ="cdc">
        <div class="m-t-1 ban2">
        </div>
    </section>
@endsection
