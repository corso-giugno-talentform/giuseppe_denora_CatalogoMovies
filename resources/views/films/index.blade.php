<x-main>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100 text-center">
        

<div class="rounded-3 py-5 px-4 px-md-5 mb-5">

         <div class="container mt-5">
             <div class="align-middle gap-2 d-flex justify-content-between">
                 <h3>Elenco Libri inseriti</h3>
                 <form class="d-flex" role="search" action="#" method="POST">
                     <input class="form-control me-2" name="search" type="search" placeholder="Cerca Libro"
                         aria-label="Search">
                 </form>
                 <a href="{{ route('films.create') }}" type="button" class="btn btn btn-success me-md-2">
                     Crea Nuovo Libro
                 </a>
             </div>
             <table class="table border mt-2">
                 <thead>
                     <tr>
                         <th scope="col">#</th>
                         <th scope="col">Immagine</th>
                         <th scope="col">Titolo</th>
                         <th scope="col"></th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($films as $film)
                         <tr>
                             <th scope="row">#{{ $film->id }}</th>
                             <td>
          {{--                       {{ isset($film->cover) ? Storage::url($film->cover) : '/images/default_poster.jpg' }}
 non funzionava perche isset è true anche se cover  è settato o nullo  --}}
                                 <img class="card-img-top" style="width:3rem"
                                     src="{{ $film->cover ? Storage::url($film->cover) : asset('images/default_poster.jpg') }}

"
                                     alt="..." />
                             </td>
                             <td>{{ $film->title }}</td>
                             <td>

                                 <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                     <a href="#" class="btn btn-primary me-md-2">
                                         Visualizza
                                     </a>
                                     <a href="#" class="btn btn-warning me-md-2">
                                         Modifica
                                     </a>
                                     <button type="button" class="btn btn-danger me-md-2">Elimina</button>
                                 </div>
                             </td>
                         </tr>
                     @endforeach

                 </tbody>
             </table>
         </div>
     </div>


        <a href="{{ route('films.create') }}" class="btn btn-primary py-3">
            vai al form per inserire libri<i class="fas fa-paper-plane ms-2"></i>
        </a>
    </div>
</x-main>