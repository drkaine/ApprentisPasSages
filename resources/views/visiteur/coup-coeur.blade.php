@extends("templates/template")

@section("content")

  <!-- coup de coeur -->
  <div id="ban" class="container-fluid m-t-1 ban">
      <h1 id="titreAssociation" style="box-sizing:border-box;">Coups de cœur</h1>
  </div>

  <section class="cdc">
    @foreach ($ccdc as $cc)
      <ul class="CategorieCoupDeCoeur">
        <li>
          <h2>{!! $cc->nom !!} :</h2>
          @foreach ($cdc as $c)
            @if($c->categoriecoupsdecoeur_id==$cc->id)
              <ul>
                <li>
                  <a href="{!! $c->lien !!}" taget="_blank" title="{!! $c->description !!}"><i class="fa fa-heart"></i> {!! $c->nom !!}</a>
                </li>
              </ul>
              @endif
            @endforeach
        </li>
      </ul>
    @endforeach
  </section>

  <button type="button" class="lien-mort" data-toggle="modal" data-target="#myModal">Signaler lien mort !</button>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      @include("modal/lien-mort");
    </div>
  </div>
  
  <div class="m-t-1 ban2"></div>
@endsection