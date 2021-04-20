<div class="col-12 col-sm-6 col-lg-3">
	<div style="width: 18rem; height: 18rem;">
        <div class="d-flex flex-column">
        	<a href="{{route('VisiteurController.getOneteam', ['id'=>$membre->id])}}">
                @foreach($membre->getStatus()->get() as $statut)
                    @php $statuts[] = $statut->description; @endphp
				@endforeach

                <img class="imageThrombi m-auto {{  implode(" ", $statuts) }}"
					@if($membre->photo == null)
						src="{{ asset("storage/images/team/apprentispassages_logo_renard.png") }}" alt="photo d'avatar">
					@else
						src="{{  asset("storage/images/$membre->photo")}} " alt="photo de {!! $membre->nom !!}">
					@endif
			</a>
			
			<h3 class="mt-3 textThrombi text-center">{!! $membre->prenom !!} {!! $membre->nom !!}</h3>
		</div>
	</div>
</div>
