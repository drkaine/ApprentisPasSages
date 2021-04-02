
<div class="col-12 col-sm-6 col-lg-3">
	<div style="width: 18rem; height: 18rem;">
        <div class="d-flex flex-column">
            <form action="{{ url('/deleteMembre'.$membre->id) }}" method="post">
                {{ csrf_field() }}
                {!! method_field('DELETE') !!}
            </form>
            <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"membre" ,'id1'=>$membre->id,"id2"=>""]) }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-danger">
                    <i class="fas fa-minus-circle"></i>
                </button>
            </form>
                @foreach($membre->getStatus()->get() as $statut)
                    @php
                        $statuts[] = $statut->description;
                    @endphp
				@endforeach
                <img class="imageThrombi m-auto {{  implode(" ", $statuts) }}"
				@if($membre->photo == null)
					src="{{ asset("images/team/apprentispassages_logo_renard.png") }}" alt="photo d'avatar">
				@else
					src="{{  asset("images/team/$membre->photo")}} " alt="photo de {{$membre->nom}}">
				@endif
			</a>
			<h3 class="mt-3 textThrombi text-center">{{$membre->prenom}} {{$membre->nom}}</h3>

			</div>

	</div>
</div>
