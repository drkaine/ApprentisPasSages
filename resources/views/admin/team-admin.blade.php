@extends('templates/barre-admin')

@section("content")

  <section class="mr-5 ml-5">
    <div id="banOneTeam" class="container-fluid ban"></div>
      <div class="ml-2 mr-2">
        @foreach ($team as $membre)
          @include('admin/OneTeam-admin', compact('team'))
        @endforeach
    </div>
  </section>
@endsection
