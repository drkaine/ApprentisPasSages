@extends("template")

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
                       <a href="{{$c->lien}}" taget="_blank" title="{{$c->description}}"> {!! $c->nom !!}</a>
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

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Signaler un lien mort !</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form   action="accueil">
                        <select  size=1 >
                            <option selected disabled>Veuillez choisir le lien mort !</option>
                            @foreach ($cdc as $c)
                                <option value="{{ $c->id }}" >{{ print($c->nom) }}</option>
                            @endforeach

                        </select><br />
                        <div class="btn-form-contact">
                          <input type="submit" value="Envoyer">
                         </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div></div>
              </div>
    <div class="m-t-1 ban2">

    </div>
    @endsection
