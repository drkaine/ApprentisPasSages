
@extends("template")

@section("content")

      <!-- galerie -->
        <section class="album">
            <div class="row">
                <div class="column">
                @foreach ($photos as $photo)
                    <img src="{{ $photo->chemin }}">

                @endforeach
                </div>
        </section>

        @endsection
