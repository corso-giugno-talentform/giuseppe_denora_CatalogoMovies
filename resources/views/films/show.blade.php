<x-main >
    <div class="container mx-auto mt-5 ">
        <h1>Dettagli</h1>
    <h2 class="mt-2">Nome Film: {{ $film->title }}</h2>
    <p class="mt-2">Anno uscita: {{ $film->release_year }}</p>
    <p class="mt-2">Durata: {{ $film->duration }}</p>
    <p class="mt-2">Genere: {{ $film->genre }}</p>
</div>

</x-main>