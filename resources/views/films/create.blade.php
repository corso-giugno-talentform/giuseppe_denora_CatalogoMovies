<x-main>

    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100 text-center">
        <form id="contactForm" action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ $hidden ?? '' }}

            {{-- Titolo libro --}}
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Titolo libro" name="title"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

             {{-- descriz libro --}}
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="descrizione" name="description"
                    value="{{ old('description') }}">
                @error('description')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            {{-- Anno --}}
            <div class="mb-3">
                {{-- ho messo type=text solo per vedere il mesaggio di errore personalizzato nela classe StoreBookRequest --}}
                <input type="text" class="form-control" placeholder="Anno" name="release_year"
                    value="{{ old('release_year') }}">
                @error('release_year')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            {{--genere--}}
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Genere" name="genre"
                    value="{{ old('genre') }}">
                @error('genre')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
             {{--duration--}}
            <div class="mb-3">
                <input type="number" class="form-control" placeholder="durata" name="duration"
                    value="{{ old('duration') }}">
                @error('duration')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            {{--  upload file  --}}
            <div class="mb-3">
                <label for="formFile" class="form-label">Locandina</label>
                <input class="form-control" type="file" id="formFile"  name="cover"  
>
            </div>

            {{-- Pulsante --}}
            <button type="submit" class="btn btn-primary  py-3">
                Inserisci Film <i class="fas fa-paper-plane ms-2"></i>
            </button>

            <a href="{{ route('films.index') }}" class="btn btn-primary py-3">
                vedi tutti i Film presenti<i class="fas fa-paper-plane ms-2"></i>
            </a>
        </form>

    </div>
</x-main>
