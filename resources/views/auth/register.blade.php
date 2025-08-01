<x-main>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

<x-errors/>
                <form class="p-5 border rounded" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome
                            utente</label>
                        <input type="text" name="name" class="form-control" id="name" required value="{{old('name')}}" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email
                            utente</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma
                            password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation" required>
                    </div>

                     {{--  Scelta se essere admin   --}}


                   {{--  <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" name="is_admin" id="is_admin" value="1">
                        <label class="form-check-label" for="is_admin">Registrati come admin</label>
                    </div>
 --}}
                    <button type="submit" class="btn btn-dark">Registrati</button>
                    <a href="{{ route('login') }}" class="btn btn-outline-dark">Gia'
                        iscritto?</a>
                </form>
            </div>
        </div>
    </div>
</x-main>