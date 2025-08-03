 <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100 text-center">
     {{--  //metto la route per fare l update   --}}

     <form id="contactForm" action="{{ route('films.update', ['film' => $film]) }}" method="POST"
         enctype="multipart/form-data">

         @csrf
         {{--   importante FORZA METODO PUT  --}}
         @method('PUT')
         {{ $hidden ?? '' }}

         {{-- Titolo film --}}
         <div class="mb-3">
             <input type="text" class="form-control" placeholder="Titolo libro" name="title" {{--  //ora i valori old sono presi dal DB  --}}
                 value="{{ $film->title }}">
             @error('title')
                 <div class="alert alert-danger mt-1">{{ $message }}</div>
             @enderror
         </div>

         {{-- descriz film --}}
         <div class="mb-3">
             <input type="text" class="form-control" placeholder="descrizione" name="description"
                 value="{{ $film->description }}">
             @error('description')
                 <div class="alert alert-danger mt-1">{{ $message }}</div>
             @enderror
         </div>

         {{-- Anno --}}
         <div class="mb-3">
             {{-- ho messo type=text solo per vedere il mesaggio di errore personalizzato nela classe StoreBookRequest --}}
             <input type="text" class="form-control" placeholder="Anno" name="release_year"
                 value="{{ $film->release_year }}">
             @error('release_year')
                 <div class="alert alert-danger mt-1">{{ $message }}</div>
             @enderror
         </div>

         {{-- genere --}}
         <div class="mb-3">
             <input type="text" class="form-control" placeholder="Genere" name="genre" value="{{ $film->genre }}">
             @error('genre')
                 <div class="alert alert-danger mt-1">{{ $message }}</div>
             @enderror
         </div>
         {{-- duration --}}
         <div class="mb-3">
             <input type="number" class="form-control" placeholder="durata" name="duration"
                 value="{{ $film->duration }}">
             @error('duration')
                 <div class="alert alert-danger mt-1">{{ $message }}</div>
             @enderror
         </div>

         {{--  upload file  --}}
         <div class="mb-3">
             {{-- per fare upload della immagine gia presente nel db la metto in una img --}}

             <img style="heigth:80pz" src="{{ Storage::url($film->cover) }}">
             <label for="formFile" class="form-label">Locandina</label>
             <input class="form-control" type="file" id="formFile" name="cover">
         </div>

         {{-- Pulsante --}}
         <button type="submit" class="btn btn-primary  py-3">
             aggiorna <i class="fas fa-paper-plane ms-2"></i>
         </button>

         {{--  <a href="{{ route('films.index') }}" class="btn btn-primary py-3">
                vedi tutti i Film presenti<i class="fas fa-paper-plane ms-2"></i>
            </a> --}}
     </form>

 </div>
