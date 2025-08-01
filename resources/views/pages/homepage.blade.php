<x-main>

 <section class="container d-flex flex-column justify-content-center  align-items-center mb-5">
    <h1 class="mt-5">I film presenti in catalogo,loggati per vedere piu dettagli  </h1>
    <ul class="mt-5">
        @foreach ( $films as $film)
            <li>{{ $film->title }}</li>
        @endforeach

    </ul>

  {{-- <x-cards :films="$films" /> --}}

</section>
</x-main>


<ul>


 {{--    @guest
       
        @foreach($films as $film)
            <li>{{ $film->title }}</li>
        @endforeach
    @endguest

    @auth
       
        <div class="row">
            @foreach($films as $film)
                <div class="card col-3 m-2">
                    <img src="{{ $film->cover ? asset('storage/' . $film->cover) : 'path/default.jpg' }}" class="card-img-top" alt="Copertina">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film->title }}</h5>
                        <p class="card-text">{{ $film->description }}</p>
                        <p class="card-text"><small>Anno: {{ $film->release_year }}</small></p>
                        <a href="{{ route('films.show', $film->id) }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endauth
</ul> --}}