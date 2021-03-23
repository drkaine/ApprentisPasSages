@extends('accueil')

@section("content")

@section('title', "membre")
<div id="banOneTeam" class="container-fluid ban"></div>
{{--Prestations--}}
<section class="mr-5 ml-5">
  <div class="ml-2 mr-2">
      {{ var_dump($team) }}
      @foreach ($team as $membre)
          @include('OneTeam', compact('oneTeam'))
      @endforeach
  </div>
</section>
{{--ENDPrestations--}}

@endsection
