<x-layout>
    {{-- INIZIO FORM STRUCTURE --}}
    <section class="container-fluid bg-dark d-flex align-items-center justify-content-center ">
        <div class="row justify-content-center p-5">
            {{-- CREAZIONE COLONNA NERA FORM --}}
            <div class="col-12 p-5 rounded-4 register-column">
                <div class="row">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {{-- TITOLO DEL FORM --}}
                    <div class="col-12">
                        <h1 class="fs-4 text-light text-uppercase mb-3">registrati</h1>
                    </div>
                </div>{{-- INIZIO FORM STRUCTURE --}}
                <form method="POST" action="/register" enctype="multipart/form-data">
                    @csrf
                    {{-- NAME&SURNAME INPUT --}}
                    <div class="d-flex justify-content-center">
                        <div class="me-3">
                            <label for="name" class="text-light mb-1 d-block">Nome</label>
                            <input type="text" name="name" id="name" placeholder="Nome" class="w-100">
                        </div>
                        <div>
                            <label for="surname" class="text-light mb-1 d-block">Cognome</label>
                            <input type="text" name="surname" id="surname" placeholder="Cognome" class="w-100">
                        </div>
                    </div>
                    {{-- BIRTHDAY INPUT --}}
                    <div class="d-flex justify-content-center mt-3">
                        <div class="me-3">
                            <label for="birthday" class="text-light mb-1 d-block">Birthday</label>
                            <input type="date" name="birthday" id="birthday"class="birthday-input">
                        </div>
                        <div>
                            <label for="gender" class="text-light mb-1 d-block">Genere</label>
                            <select name="gender" id="gender" class="gender-input">
                                <option value="M">
                                    Uomo
                                </option>
                                <option value="F">
                                    Donna
                                </option>
                            </select>
                        </div>
                    </div>
                    {{-- USERNAME INPUT --}}
                    <div class="mt-3">
                        <label for="username" class="text-light mb-1 d-block">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username" class="w-100">
                    </div>
                    {{-- EMAIL INPUT --}}
                    <div class="mt-3">
                        <label for="email" class="text-light mb-1 d-block">Indirizzo email</label>
                        <input type="email" name="email" id="email" placeholder="utente@gmail.com">
                    </div>
                    {{-- PASSWORD INPUT --}}
                    <div class="mt-3">
                        <label for="password" class="text-light mb-1 d-block">Password</label>
                        <input type="password" name="password" id="password" class="" placeholder="Password">
                    </div>
                    <div class="mt-3">
                        <label for="password_confirmation" class="text-light mb-1 d-block">Conferma Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="" placeholder="Password">
                    </div>
                    {{-- SUBMIT BUTTON --}}
                    <div class="mt-3 d-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-success px-4 py-3 mx-0 mx-lg-3 mt-lg-0 ms-1 w-75">
                            Registrati
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>