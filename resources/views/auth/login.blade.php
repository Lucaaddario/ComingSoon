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
                        <h1 class="fs-4 text-light text-uppercase mb-3">accedi</h1>
                    </div>
                </div>{{-- INIZIO FORM STRUCTURE --}}
                <form method="POST" action="/login" enctype="multipart/form-data">
                    @csrf
                    {{-- NAME&SURNAME INPUT --}}
                    <div class="d-flex justify-content-center flex-column ">
                        <div class="me-3 my-3">
                            <label for="email" class="text-light mb-1 d-block">Indirizzo email</label>
                            <input type="email" name="email" id="email" placeholder="utente@gmail.com" class="w-100 inputLogin">
                        </div>
                        <div class="my-3">
                            <label for="password" class="text-light mb-1 d-block">Password</label>
                            <input type="password" name="password" id="password" placeholder="Inserisci Password" class="w-100 inputLogin">
                        </div>
                        {{-- SUBMIT BUTTON --}}
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-success px-4 py-3 mx-0 mx-lg-3 mt-lg-0 ms-1 w-75">
                                Accedi
                            </button>
                        </div>
                        <p class="text-center mt-5">
                            <span class="spanAccount text-white">Non hai un account ?</span>
                            <a href="{{route('register')}}" class="text-decoration-none nav-link text-success d-inline ms-1 spanAccount ">
                                Registrati
                            </a>
                        </p>
                        <div>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </x-layout>