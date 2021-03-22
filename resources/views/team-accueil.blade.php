
<div class="col-12 col-sm-6 col-lg-3">
	<div style="width: 18rem; height: 18rem;">
        <a href="team-accueil/{{ $membre->id}}">
			<div class="d-flex flex-column">

				<img class="imageThrombi m-auto
				@foreach($membre->getMembre as $statut)
				  {{$status->status_desc}}
				@endforeach
				"
				@if($membre->photo == null)
					src="img/team/apprentispassages_logo_renard.png" alt="photo d'avatar">
				@else
					src="img/team/{{$membre->photo}}" alt="photo de {{$membre->nom}}">
				@endif
			</a>
			<h3 class="mt-3 textThrombi text-center">{{$membre->prenom}} {{$membre->nom}}</h3>

			</div>

	</div>
</div>
